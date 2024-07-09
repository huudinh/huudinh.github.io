document.addEventListener("DOMContentLoaded", function () {
    let slideIndex = 0;
    const slides = document.querySelectorAll(".doctorDegree_drg_1_0_0__pic");
    const box = document.querySelector(".doctorDegree_drg_1_0_0__slide");
    const totalSlides = slides.length;
    const itemsToShow = window.innerWidth >= 600 ? 3 : 1;
    const prevBtn = document.querySelector(".doctorDegree_drg_1_0_0__prev");
    const nextBtn = document.querySelector(".doctorDegree_drg_1_0_0__next");
    let count = 0;
    const imgSize = 245 + 10;

    function nextSlide() {
        if (slideIndex < totalSlides - itemsToShow) {
            slideIndex++;
            count -= imgSize;
            showSlides(count);
           
        } else {
            nextBtn.classList.add('disable');
            alert('Bạn vui lòng chọn mũi tên quay lại');
        }
    }

    function prevSlide() {
        if (slideIndex > 0) {
            slideIndex--;
            count += imgSize;
            showSlides(count);
        } else {
            prevBtn.classList.add('disable');
            alert('Bạn vui lòng chọn mũi tên xem tiếp')
        }
    }

    function showSlides(count) {
        box.style.transform = `translateX(${count}px)`;
        box.style.transition = 'transform 0.5s ease-in-out';
    }

    prevBtn.addEventListener("click", prevSlide);
    nextBtn.addEventListener("click", nextSlide);
});

