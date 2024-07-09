document.addEventListener("DOMContentLoaded", function () {
    let slideIndex = 0;
    const slides = document.querySelectorAll(".doctorDegree_drg_1_0_0__pic");
    const img = document.querySelectorAll(".doctorDegree_drg_1_0_0__pic img");
    const box = document.querySelector(".doctorDegree_drg_1_0_0__slide");
    const totalSlides = slides.length;
    const itemsToShow = window.innerWidth >= 600 ? 3 : 1;
    const prevBtn = document.querySelector(".doctorDegree_drg_1_0_0__prev");
    const nextBtn = document.querySelector(".doctorDegree_drg_1_0_0__next");
    let count = 0;    
    let imgSize = slides[0].offsetWidth + 10;
    
    // Kiểm tra màn hình
    function screenCheck(){
        if(window.innerWidth < 600){
            addStyle(true);
        } else{
            addStyle(false);
        }
        imgSize = slides[0].offsetWidth + 10;
    }

    // Xử lý responsive style ảnh
    function addStyle(check) {
        for(let i = 0; i < img.length; i++){
            if(check){
                img[i].setAttribute("style", `width:${box.offsetWidth}px!important`);
            } else {
                img[i].removeAttribute("style");
            }
        }
    }

    // Gọi hàm kiểm tra màn hình
    screenCheck();

    // Xử lý khi resize
    window.addEventListener("resize", function () {
        screenCheck();
    });

    // Hàm xử lý Next Slide
    function nextSlide() {
        if (slideIndex < totalSlides - itemsToShow) {
            slideIndex++;
            count -= imgSize;
            showSlides(count);
            prevBtn.classList.remove('disable');
           
        } else {
            nextBtn.classList.add('disable');
            alert('Bạn vui lòng chọn mũi tên quay lại');
        }
    }

    // Hàm xử lý Prev Slide
    function prevSlide() {
        if (slideIndex > 0) {
            slideIndex--;
            count += imgSize;
            showSlides(count);
            nextBtn.classList.remove('disable');

        } else {
            prevBtn.classList.add('disable');
            alert('Bạn vui lòng chọn mũi tên xem tiếp')
        }
    }

    // Hàm xử lý chuyển động
    function showSlides(count) {
        box.style.transform = `translateX(${count}px)`;
        box.style.transition = 'transform 0.5s ease-in-out';
    }

    // Sự kiện click mũi tên
    prevBtn.addEventListener("click", prevSlide);
    nextBtn.addEventListener("click", nextSlide);
});

