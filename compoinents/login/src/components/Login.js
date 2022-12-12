import { InputGroup } from "./InputGroup.js";
import { setScreen } from '../app.js';
import Home from './Home.js';
import Register from './Register.js';

class Login {
    $container;
    $title;
    $usernameInput;
    $passwordInput;
    $btnSubmit;
    $linkToRegister;

    constructor() {
        this.$title = document.createElement('div');
        this.$title.innerHTML = 'Đăng nhập hệ thống';
        this.$title.classList.add('login__title');
        this.$container = document.createElement('form');
        this.$container.classList.add('login');
        this.$container.addEventListener('submit', this.handleSubmit);
        this.$usernameInput = new InputGroup('Username', 'text');
        this.$passwordInput = new InputGroup('Password', 'password');
        this.$btnSubmit = document.createElement('button');
        this.$btnSubmit.innerHTML = 'Submit';
        this.$linkToRegister = document.createElement('div');
        this.$linkToRegister.classList.add('link');
        this.$linkToRegister.innerHTML = 'Create new account';
        this.$linkToRegister.addEventListener('click', this.moveToRegister);
    }

    moveToRegister = () => {
        const register = new Register();
        setScreen(register);
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

        if(localStorage.getItem('users')){
            const user = JSON.parse(localStorage.getItem('users'));

            for(let i = 0; i < user.length; i++){
                if(username == user[i].username && password == user[i].password){
                    localStorage.setItem("isLogin", true);
                    const home = new Home();
                    setScreen(home);
                }
            }
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
        this.$container.appendChild(this.$linkToRegister);
        return this.$container;
    }

}

export default Login;