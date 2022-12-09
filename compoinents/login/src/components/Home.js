class Home {
    $container;
    $title;

    constructor() {
        this.$title = document.createElement('div');
        this.$title.innerHTML = 'Đăng nhập thành công';
        this.$title.classList.add('login__title');
    }

    render() {
        this.$container.appendChild(this.$title);
        return this.$container;
    }

}

export default Home;