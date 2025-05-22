const clickShowNavMenu = () => {
    const iconMenu = document.querySelector('.header_knbm_1_0_0__icon');
    const navMenu = document.querySelector('.header_knbm_1_0_0__nav');
    const closeNav = document.querySelector('.header_knbm_1_0_0__close');
    const bgMenu = document.querySelector('.header_knbm_1_0_0__bg');
    iconMenu.addEventListener('click', () => {
        bgMenu.classList.add('show')
        navMenu.classList.add('show')
    });
    closeNav.addEventListener('click', () => {
        bgMenu.classList.remove('show')
        navMenu.classList.remove('show')
    });
    bgMenu.addEventListener('click', () => {
        bgMenu.classList.remove('show')
        navMenu.classList.remove('show')
    
    });
};

const clickShowSubmenu = () => {
    const arrowSubmenu = document.querySelectorAll('.header_knbm_1_0_0__svg--9');
    arrowSubmenu.forEach(item => item.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = item.parentElement;
        item.classList.toggle('active');
        parent.querySelector('.header_knbm_1_0_0__subMenu').classList.toggle('active');
    }));
};

document.addEventListener("DOMContentLoaded", function() {
    clickShowNavMenu();
    clickShowSubmenu();

    const header = document.querySelector('.header_knbm_1_0_0');
    window.addEventListener('scroll', () => {
        if(window.scrollY > header.clientHeight) {
            header.classList.add('fixed');
        } else {
            header.classList.remove('fixed');
        }
    })

});
