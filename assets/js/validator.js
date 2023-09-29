function Validator(options) {
    let selectorRules = {};

    const getParent = (element, selector) => {
        while (element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    // Ham thuc hien validate
    const validate = (inputElement, rule) => {
        let formGroup = getParent(inputElement, options.formGroupSelector);
        let errorElement = formGroup.querySelector(options.errorSelector);

        // Lay ra cac rules cua Selector
        let rules = selectorRules[rule.selector];

        // Lap qua tung rule va kiem tra
        for (let i = 0; i < rules.length; ++i){
            switch (inputElement.type){
                case 'radio':
                case 'checkbox':
                    errorMessage = rules[i](
                        formElement.querySelector(rule.selector + ':checked')
                    );
                    break;
                default:
                    errorMessage = rules[i](inputElement.value);
            }
            if(errorMessage) break;
        }

        if (errorMessage) {
            errorElement.innerText = errorMessage;  
            formGroup.classList.add('invalid');
        } else {
            errorElement.innerText = '';
            formGroup.classList.remove('invalid');
        }

        return !errorMessage;
    }

    // Lay Element cua Form can Validate
    let formElement = document.querySelector(options.form);
    if (formElement) {
        // Khi submit form
        formElement.onsubmit = function (e) {
            e.preventDefault();

            let isFormValid = true;

            // Thực hiện lặp qua từng rules và Validate
            options.rules.forEach((rule) => {
                let inputElement = formElement.querySelector(rule.selector);
                let isValid = validate(inputElement, rule);
                if (!isValid) {
                    isFormValid = false;
                }
            });

            if (isFormValid){
                // Truong hop submit voi javascript
                if (typeof options.onSubmit === 'function') {
                    let enableInputs = formElement.querySelectorAll('[name]:not([disable])');
                    let formValues = Array.from(enableInputs).reduce(function(values, input){
                        switch(input.type){
                            case 'radio':
                                values[input.name] = formElement.querySelector('input[name="' + input.name + '"]:checked').value;
                                break;
                            case 'checkbox':
                                if(input.matches(':checked')) {
                                    values[input.name] = [];
                                    return values;
                                }

                                if(!Array.isArray(values[input.name])){
                                    values[input.name] = [];
                                };
                                values[input.name].push(input.value);
                                break;
                            case 'file':
                                values[input.name] = input.files;
                                break;
                            default:
                                values[input.name] = input.value;
                        }
                        return values;
                    }, {});
                    options.onSubmit(formValues);
                } else {
                    formElement.submit();
                } 
            } 

        }

        // Lap qua moi Rules và xử lý (lắng nghe sự kiện)
        options.rules.forEach((rule) => {

            // Luu lai cac rule cho moi input
            if (Array.isArray(selectorRules[rule.selector])){
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }

            let inputElements = formElement.querySelectorAll(rule.selector);

            Array.from(inputElements).forEach((inputElement)=>{
                // Xu ly truong hop Blur khoi input
                inputElement.onblur = () => {
                    validate(inputElement, rule);
                }
    
                // Xu ly moi khi nguoi dung go vao input
                inputElement.oninput = () => {
                    let formGroup = getParent(inputElement, options.formGroupSelector);
                    let errorElement = formGroup.querySelector(options.errorSelector);

                    errorElement.innerText = '';
                    formGroup.classList.remove('.invalid');
                }
            })
        });
    }
}
Validator.isRequired = (selector, message) => {
    return {
        selector: selector,
        test: function (value) {
            return value ? undefined : message || 'Vui lòng nhập trường này!';
        }
    }
}

Validator.isEmail = (selector, message) => {
    return {
        selector: selector,
        test: function (value) {
            let regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : message || 'Địa chỉ Email chưa chính xác';
        }
    }
}

Validator.isMobile = (selector, message) => {
    return {
        selector: selector,
        test: function (value) {
            let regex = /(84|0[3|5|7|8|9])+([0-9]{8})\b/g;
            return regex.test(value) ? undefined : message || 'Số điện thoại chưa chính xác';
        }
    }
}

Validator.minLength = (selector, min, message) => {
    return {
        selector: selector,
        test: function (value) {
            return value.length >= min ? undefined : message || `Vui lòng nhập tối thiểu ${min} ký tự`;
        }
    }
}

Validator.isConfirmed = (selector, getConfirmValue, message) => {
    return {
        selector: selector,
        test: function (value) {
            return value == getConfirmValue() ? undefined : message || 'Giá trị nhập vào không chính xác';
        }
    }
}