import { InputGroup } from "./InputGroup.js";
import { setScreen } from '../app.js';
import Home from './Home.js';
import Login from './Login.js';

class Register {
    $container;
    $title;
    $usernameInput;
    $passwordInput;
    $btnSubmit;
    $linkToLogin;

    constructor() {
        this.$title = document.createElement('div');
        this.$title.innerHTML = 'Đăng ký thành viên';
        this.$title.classList.add('login__title');
        this.$container = document.createElement('form');
        this.$container.classList.add('login');
        this.$container.addEventListener('submit', this.handleSubmit);
        this.$usernameInput = new InputGroup('Username', 'text');
        this.$passwordInput = new InputGroup('Password', 'password');
        this.$btnSubmit = document.createElement('button');
        this.$btnSubmit.innerHTML = 'Submit';
        this.$linkToLogin = document.createElement('div');
        this.$linkToLogin.classList.add('link');
        this.$linkToLogin.innerHTML = 'Create new account';
        this.$linkToLogin.addEventListener('click', this.moveToLogin);
    }

    moveToLogin = () => {
        const login = new Login();
        setScreen(login);
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

        if(username == 'admin' && password == '123456'){
            localStorage.setItem("isLogin", true);
            const home = new Home();
            setScreen(home);
        }
    }

    render() {
        this.$container.appendChild(this.$title);
        this.$container.appendChild(this.$usernameInput.render());
        this.$container.appendChild(this.$passwordInput.render());
        this.$container.appendChild(this.$btnSubmit);
        this.$container.appendChild(this.$linkToLogin);

        return this.$container;
    }

}

export default Register;