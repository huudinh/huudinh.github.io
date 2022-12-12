import Login from './Login.js';
import { setScreen } from '../app.js';

class Home {
    $container;
    $title;
    $linkToLogin;

    constructor() {
        this.$container = document.createElement('div');
        this.$container.classList.add('home');
        this.$title = document.createElement('div');
        this.$title.innerHTML = 'Đăng nhập thành công';
        this.$title.classList.add('login__title');
        this.$linkToLogin = document.createElement('div');
        this.$linkToLogin.classList.add('link');
        this.$linkToLogin.innerHTML = 'Thoát';
        this.$linkToLogin.addEventListener('click', this.moveToLogin);
    }
    moveToLogin = () => {
        const login = new Login();
        localStorage.removeItem('isLogin');
        setScreen(login);
    }
    render() {
        this.$container.appendChild(this.$title);
        this.$container.appendChild(this.$linkToLogin);
        return this.$container;
    }

}

export default Home;