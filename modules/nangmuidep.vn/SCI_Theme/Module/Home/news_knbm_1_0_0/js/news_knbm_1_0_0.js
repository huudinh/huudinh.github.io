const runFnGalleryNew = () => {
    const wrapperGallery = document.querySelector('.news_knbm_1_0_0__box');
    const itemGallery = document.querySelectorAll('.news_knbm_1_0_0__item');
    let countGallery = 1;
    const defaultWidthItem = 99.9999 / countGallery;
    const widthItemChild = 99.999 / itemGallery.length;
    let transformLeft = 0;
    const timeGallery = 3000;
    const autoPlayGallery = true;
    let myInterGallery;
    
    // set width to wrapper
    wrapperGallery.style.width = `${defaultWidthItem*itemGallery.length}%`;
    
    // set width to item
    itemGallery.forEach(item => {
        item.style.width = `${widthItemChild}%`;
    });
    
    const nextGallery = () => {
        wrapperGallery.setAttribute('style', `width: ${defaultWidthItem*itemGallery.length}%; transform: translate3d(-${transformLeft += widthItemChild}%, 0px, 0px)`);
        if(transformLeft >= (itemGallery.length - countGallery) * widthItemChild) transformLeft = -widthItemChild;
        fnPagination();
    }

    
    if(autoPlayGallery){
        myInterGallery = setInterval(nextGallery, timeGallery);
    }

    const paginationLength = itemGallery.length;
    const paginationSlider = document.querySelector('.news_knbm_1_0_0__pagination');
    let paginationItemHtml = '';
    for(let i = 0; i < paginationLength; i++){
        paginationItemHtml += `<div class="news_knbm_1_0_0__paginationItem ${i === 0 ? 'active' : ''}" data-index="${i}"></div>`;
    };
    paginationSlider.innerHTML = paginationItemHtml;
    const paginationItems = document.querySelectorAll('.news_knbm_1_0_0__paginationItem');
    paginationItems.forEach(item => {
        item.addEventListener('click', () => {
            const id = item.getAttribute('data-index');
            let index = Number(id - 1);
            transformLeft = (index*widthItemChild);
            nextGallery();
            clearInterval(myInterGallery);
            myInterGallery = setInterval(nextGallery, timeGallery);
        })
    });

    const fnPagination = () => {
        let active = (transformLeft/widthItemChild);
        if(active === -1){
            active = paginationItems.length - 1;
        }
        paginationItems.forEach(item => {
            item.classList.remove('active')
        });
        paginationItems[active].classList.add('active');
    }
}

document.addEventListener("DOMContentLoaded", function() {
    runFnGalleryNew();
});