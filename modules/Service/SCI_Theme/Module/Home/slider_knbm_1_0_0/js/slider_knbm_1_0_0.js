document.addEventListener("DOMContentLoaded", function() {
    const positionSlider = document.querySelector('.slider_knbm_1_0_0 .slider_knbm_1_0_0__inner');
    const paginationSlider = document.querySelector('.slider_knbm_1_0_0__pagination');
    const time = 3000;
    const autoPlay = false;
    let index = 0, myInter;
    
    const nextSlider = () => {
        index++;
        if(index >= dataSlider.length){
            index = 0;
        }
        domSlider(index);
    }
    
    const prevSlider = () => {
        index--;
        if(index < 0){
            index = dataSlider.length - 1;
        }
        domSlider(index);
    }
    
    if(autoPlay) myInter = setInterval(nextSlider, time);
    
    const domSlider = (id) => {
        const data = dataSlider[id];
        const itemHtml =  `
        <a href="${data.url}" class="slider_knbm_1_0_0__item" aria-label="url">
            <picture>
                <source media="(max-width: 767px)" srcset="${data.mb}" loading="lazy">
                <img src="${data.pc}" alt="" loading="lazy">
            </picture>
        </a>
        `;
        positionSlider.innerHTML = itemHtml;
        activePaginationSlider();
    };
    
    const activePaginationSlider = () => {
        const dataSliderLength = dataSlider.length;
        
        if(dataSliderLength > 1){
            let paginationItemHtml = '';
            for(let i = 0; i < dataSliderLength; i++){
                paginationItemHtml += `<div class="slider_knbm_1_0_0__paginationItem ${i === index ? 'active' : ''}" data-index="${i}"></div>`;
            };
            paginationSlider.innerHTML = paginationItemHtml;
        
            const paginationItems = document.querySelectorAll('.slider_knbm_1_0_0__paginationItem');
            paginationItems.forEach(item => {
                item.addEventListener('click', () => {
                    const id = item.getAttribute('data-index');
                    index = Number(id);
                    domSlider(index);
                    if(autoPlay){
                        clearInterval(myInter);
                        myInter = setInterval(nextSlider, time);
                    }
                })
            })
        }
    }
    activePaginationSlider();
    
    const navigateSlider = () => {
        if(dataSlider.length > 1){
            document.querySelector('.slider_knbm_1_0_0__btn--next').addEventListener('click', () => {
                nextSlider();
                if(autoPlay){
                    clearInterval(myInter);
                    myInter = setInterval(nextSlider, time);
                }
            });
            document.querySelector('.slider_knbm_1_0_0__btn--prev').addEventListener('click', () => {
                prevSlider();
                if(autoPlay){
                    clearInterval(myInter);
                    myInter = setInterval(nextSlider, time);
                }
            });
        } else{
            document.querySelector('.slider_knbm_1_0_0__controls').style.display = 'none';
        }
    }
    navigateSlider();
});