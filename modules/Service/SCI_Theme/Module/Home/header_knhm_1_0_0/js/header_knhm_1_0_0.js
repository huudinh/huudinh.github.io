document.addEventListener("DOMContentLoaded", function () {
    // Chọn các phần tử DOM
    const header = document.querySelector('.header_knhm_1_0_0');
    const topMainHeight = document.querySelector('.header_knhm_1_0_0__topMain')?.offsetHeight || 0;
    const hamburger = document.querySelector('.header_knhm_1_0_0__hamburger');
    const overlay = document.querySelector('.header_knhm_1_0_0__overlay');
    const menupc = document.querySelector('.header_knhm_1_0_0__menupc');
    const toggleCheckbox = document.getElementById('header_toggle');
    const menuItems = document.querySelectorAll('.header_knhm_1_0_0__itemMenu');

    // Hàm để hiển thị/ẩn menu
    function toggleMenu(show) {
        menupc.style.left = show ? '0px' : '-280px';
        overlay.style.display = show ? 'block' : 'none';
        hamburger.classList[show ? 'add' : 'remove']('active');
        if (toggleCheckbox) toggleCheckbox.checked = show;
    }

    // Xử lý thay đổi kích thước màn hình
    function checkScreenSize() {
        if (window.innerWidth <= 1024) {
            toggleMenu(false);
        } else {
            menupc.style.left = '';
        }
    }

    // Khởi tạo và thiết lập các sự kiện
    checkScreenSize();
    window.addEventListener('resize', checkScreenSize);

    // Xử lý cuộn trang cho header cố định
    // window.addEventListener('scroll', function () {
    //     const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    //     header.classList[scrollTop > topMainHeight ? 'add' : 'remove']('sticky');
    // });

    // Bật/tắt menu khi nhấp vào hamburger
    if (hamburger) {
        hamburger.addEventListener('click', function () {
            toggleMenu(menupc.style.left !== '0px');
        });
    }

    // Đóng menu khi nhấp vào overlay
    if (overlay) {
        overlay.addEventListener('click', function () {
            toggleMenu(false);
        });
    }

    // Xử lý menu dropdown trên giao diện mobile
    menuItems.forEach(item => {
        const link = item.querySelector('a');
        const dropdown = item.querySelector('.header_knhm_1_0_0__dropdown');

        if (dropdown && link) {
            link.addEventListener('click', function (e) {
                if (window.innerWidth <= 1024) {
                    e.preventDefault();

                    // Đóng các dropdown khác
                    menuItems.forEach(otherItem => {
                        if (otherItem !== item) otherItem.classList.remove('active');
                    });

                    // Bật/tắt dropdown hiện tại
                    item.classList.toggle('active');
                }
            });
        }
    });
});