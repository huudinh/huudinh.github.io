function gallery_knhm_1_0_0(dataSlider) {    
    
    const positionSlider = document.querySelector('.gallery_knhm_1_0_0__slider');
    const paginationSlider = document.querySelector('.gallery_knhm_1_0_0__pagination');
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
        <a href="${data.url}" class="gallery_knhm_1_0_0__item" aria-label="url">
            <img src="${data.pc}" alt="" loading="lazy">
        </a>
        `;
        positionSlider.innerHTML = itemHtml;
        activePaginationSlider();
    };
    
    const activePaginationSlider = () => {
        const dataSliderLength = dataSlider.length;
        let paginationItemHtml = '';
        for(let i = 0; i < dataSliderLength; i++){
            paginationItemHtml += `<div class="gallery_knhm_1_0_0__paginationItem ${i === index ? 'active' : ''}" data-index="${i}"></div>`;
        };
        paginationSlider.innerHTML = paginationItemHtml;
    
        const paginationItems = document.querySelectorAll('.gallery_knhm_1_0_0__paginationItem');
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
    activePaginationSlider();
    
    const navigateSlider = () => {
        const controlBox = document.querySelector('.gallery_knhm_1_0_0__controls');
        const nextButton = document.createElement('div');
        const prevButton = document.createElement('div');
        nextButton.classList.add('gallery_knhm_1_0_0__btn', 'gallery_knhm_1_0_0__btn--next');
        prevButton.classList.add('gallery_knhm_1_0_0__btn', 'gallery_knhm_1_0_0__btn--prev');
        const iconNext = document.createElement('img');
        const iconPrev = document.createElement('img');
        iconNext.setAttribute('src', 'https://scigroup.com.vn/temp/cp/kn/tham-my-mat/bam-mi-han-quoc/slider_knbm_1_0_0/images/icon-next.png');
        iconPrev.setAttribute('src', 'https://scigroup.com.vn/temp/cp/kn/tham-my-mat/bam-mi-han-quoc/slider_knbm_1_0_0/images/icon-prev.png');
        nextButton.append(iconNext);
        prevButton.append(iconPrev);
        nextButton.addEventListener('click', () => {
            nextSlider();
            if(autoPlay){
                clearInterval(myInter);
                myInter = setInterval(nextSlider, time);
            }
        });
        prevButton.addEventListener('click', () => {
            prevSlider();
            if(autoPlay){
                clearInterval(myInter);
                myInter = setInterval(nextSlider, time);
            }
        });
        controlBox.append(nextButton);
        controlBox.append(prevButton);
    }
    navigateSlider();
}
