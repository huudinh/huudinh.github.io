import { InputGroup } from "./InputGroup.js";

class Login {
    $container;
    $usernameInput;
    $passwordInput;
    $btnSubmit;

    constructor() {
        this.$container = document.createElement('form');
        this.$usernameInput = new InputGroup('Username', 'text');
        this.$passwordInput = new InputGroup('Password', 'password');
        this.$btnSubmit = document.createElement('button');
        this.$btnSubmit.innerHTML = 'Submit';
        this.$btnSubmit.addEventListener('click', this.handleSubmit);

    }

    handleSubmit = (evt) => {
        evt.preventDefault();
        const username = this.$usernameInput.getInputValue();
        const password = this.$passwordInput.getInputValue();

        if(!username){
            this.$usernameInput.setError('Username cannot be empty!');
        } else {
            this.$usernameInput.setError();
        }

        if(!password){
            this.$passwordInput.setError('Password cannot be empty!');
        } else if(password.length < 6){
            this.$passwordInput.setError('Password length must be greater or equal than 6!');
        } else{
            this.$passwordInput.setError();
        }
    }

    render() {
        this.$container.appendChild(this.$usernameInput.render());
        this.$container.appendChild(this.$passwordInput.render());
        this.$container.appendChild(this.$btnSubmit);
        return this.$container;
    }

}

export default Login;