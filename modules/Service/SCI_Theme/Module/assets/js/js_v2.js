// Sent form
function sendForm(info, redirect) {
    if (!info.hasOwnProperty('iname')) {
        message('iname');
    } else if (!info.hasOwnProperty('imob')) {
        message('imob');
    } else if (!info.hasOwnProperty('iemail')) {
        message('iemail');
    } else if (!info.hasOwnProperty('itext')) {
        message('itext');
    } else if (!info.hasOwnProperty('code_campaign')) {
        message('code_campaign');
    } else if (!info.hasOwnProperty('name_campaign')) {
        message('name_campaign');
    } else if (!info.hasOwnProperty('first_link')) {
        message('first_link');
    } else if (!info.hasOwnProperty('referred')) {
        message('referred');
    } else if (!info.hasOwnProperty('website')) {
        message('website');
    } else if (!info.hasOwnProperty('location')) {
        message('location');
    } else {
        createForm(info, redirect);
    }

    // Thông báo
    function message(field){
        console.error(`Form not send! ${field} not undefined`);
    }

    // Create Form
    async function createForm (info, redirect){
        const response = await fetch(`
            https://richardhuy.com/css/api/sendform?
            contact_name=${info.iname}&
            phone=${info.imob}&
            email_from=${info.iemail}&
            description=${info.itext}&
            code_campaign=${info.code_campaign}&
            name_campaign=${info.name_campaign}&
            first_link=${info.first_link}&
            referred=${info.referred}&
            website=${info.website}&
            location=${info.location}
        `);
        const data = await response.json();

        window.top.location.href = redirect;
        console.log('Data', data);
        return data;
    };
}

// Lấy giá trị Value từ Input
function getValue(querySelector){
    return document.querySelector(querySelector).value;
}

// Disable Button
function disableButton(form, button){
    const text = document.querySelector(button).value;
    document.querySelector(button).setAttribute("disabled", "");
    document.querySelector(button).value="Đang gửi thông tin...";
    document.querySelector(button).style="background:#ccc;color:#000";
    document.querySelector(form).reset();
    setTimeout(()=> {
      document.querySelector(button).value=text;
      document.querySelector(button).removeAttribute('disabled');
      document.querySelector(button).removeAttribute('style');
    }, 5000);
}

// Auto Form
// Get API User
const getLocation = async () => {
    try {
        const response = await fetch(`https://ipinfo.io/json`);
        const data = await response.json();
        
        return data;
    }
    catch (err) {
        console.log(err);
        return '';
    }
};
// Hàm chuyển đổi Google Ads
function getParam(p) {
    var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
    return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
}

function addToStorage(key, value) {
    var expiryPeriod = 90 * 24 * 60 * 60 * 1000; // 90 day expiry in milliseconds
    var expiryDate = new Date().getTime() + expiryPeriod;

    var record = { value: value, expiryDate: expiryDate };

    localStorage.setItem(key, JSON.stringify(record));
}

function storeGclid() {
    var gclidParam = getParam('gclid');

    if (gclidParam) {
        addToStorage('gclid', gclidParam);
    }
}

function addGclid() {
    storeGclid(); // store gclid param to localstorage

    var gclidFormFieldList = document.querySelectorAll('input[name="referred"]');
    // console.log(gclidFormFieldList);

    var currDate = new Date().getTime();

    var gclsrcParam = getParam('gclsrc');
    var isGclsrcValid = !gclsrcParam || gclsrcParam.indexOf('aw') !== -1;


    var gclid = JSON.parse(localStorage.getItem('gclid'));
    var isGclidValid = gclid && currDate < gclid.expiryDate;

    if (gclidFormFieldList && isGclidValid && isGclsrcValid) {
        //   gclidFormField.value = gclid.value;
        for (let i = 0; i < gclidFormFieldList.length; i++) {
            gclidFormFieldList[i].value = gclid.value;
        }
    }
}
// Run Get Gclid
window.addEventListener('load', addGclid);

(function addInput() {
    let firstLinkFieldList = document.querySelectorAll('input[name="first_link"]');
    let locationFieldList = document.querySelectorAll('input[name="location"]');
    let websiteReferFieldList = document.querySelectorAll('input[name="website"]');

    // Get Full UTM URL 
    if (firstLinkFieldList) {
        for (let i = 0; i < firstLinkFieldList.length; i++) {
            firstLinkFieldList[i].value = window.location.href;
        }
    }

    // Get City
    if (locationFieldList) {
        for (let i = 0; i < locationFieldList.length; i++) {
            getLocation().then((data) => {
                locationFieldList[i].value = data.city;
            })
        }
    }

    let refer = document.referrer;
    if (!refer) {
        refer = 'website';
    }

    // Get URL Refer
    if (websiteReferFieldList) {
        for (let i = 0; i < websiteReferFieldList.length; i++) {
            websiteReferFieldList[i].value = refer;
        }
    }

})();

// Validate
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
        for (let i = 0; i < rules.length; ++i) {
            switch (inputElement.type) {
                case 'radio':
                case 'checkbox':
                    errorMessage = rules[i](
                        formElement.querySelector(rule.selector + ':checked')
                    );
                    break;
                default:
                    errorMessage = rules[i](inputElement.value);
            }
            if (errorMessage) break;
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

            if (isFormValid) {
                // Truong hop submit voi javascript
                if (typeof options.onSubmit === 'function') {
                    let enableInputs = formElement.querySelectorAll('[name]:not([disable])');
                    let formValues = Array.from(enableInputs).reduce(function (values, input) {
                        switch (input.type) {
                            case 'radio':
                                values[input.name] = formElement.querySelector('input[name="' + input.name + '"]:checked').value;
                                break;
                            case 'checkbox':
                                if (input.matches(':checked')) {
                                    values[input.name] = [];
                                    return values;
                                }

                                if (!Array.isArray(values[input.name])) {
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
            if (Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }

            let inputElements = formElement.querySelectorAll(rule.selector);

            Array.from(inputElements).forEach((inputElement) => {
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

Validator.addInput = (selector, getInput) => {
    return {
        selector: selector,
        test: function () {
            document.querySelector(selector).value = getInput();
        }
    }
}