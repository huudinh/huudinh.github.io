const renderService = (data) => { 
    const pagination = document.querySelector('.service_knhx_1_0_0__pagination');
    const length = data.length;
    let html = '';
    
    for(let i = 0; i < length; i++){
        html += `<div class="service_knhx_1_0_0__dot" data-id="${i}"></div>`;
    }
    
    pagination.innerHTML = html;
    
    const dots = document.querySelectorAll('.service_knhx_1_0_0__dot');
    dots[0].classList.add('active');
    
    let index = 0, myInter;
    const time = 3000;
    
    const renderSlide = data => {
        document.querySelector('.service_knhx_1_0_0__text').innerHTML = `<span class="tracking-in-contract">${data.text}</span>`;
        document.querySelector('.service_knhx_1_0_0__image').innerHTML = `<div class="flip-in-hor-bottom"><img src="${data.image}"></div>`;
    };
    
    const automaticLoop = () => {
        index++;
        if(index >= length) index = 0;
        renderSlide(data[index]);
        dots.forEach(dot => dot.classList.remove('active'));
        dots[index].classList.add('active');
    };
    
    myInter = setInterval(automaticLoop, time);
    
    const controlNav = () => {
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const id = dot.getAttribute('data-id');
                index = id;
                renderSlide(data[index]);
                dots.forEach(dot => dot.classList.remove('active'));
                dots[index].classList.add('active');
                clearInterval(myInter);
                myInter = setInterval(automaticLoop, time);
            })
        })
    };
    
    controlNav();
}
document.addEventListener("DOMContentLoaded", function() {
    renderService(data);
});