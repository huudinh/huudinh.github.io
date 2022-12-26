class InputGroup{
    $container;
    $label;
    $input;
    $feedback;

    constructor(label, inputType){
        this.$container = document.createElement('div');
        this.$container.style.display = 'flex';
        this.$container.style.flexDirection = 'column';

        this.$label = document.createElement('label');
        this.$label.innerHTML = label;

        this.$input = document.createElement('input');
        this.$input.type = inputType;

        this.$errorMsg = document.createElement('div');
        this.$errorMsg.classList.add('error-msg');

    }
    getInputValue() {
        return this.$input.value;
    }

    setError(message){
        if(message){
            this.$errorMsg.innerHTML = message;
        } else{
            this.$errorMsg.innerHTML = '';
        }
    }


    render() {
        this.$container.appendChild(this.$label);
        this.$container.appendChild(this.$input);
        this.$container.appendChild(this.$errorMsg);
        return this.$container;
    }
}

export { InputGroup }
