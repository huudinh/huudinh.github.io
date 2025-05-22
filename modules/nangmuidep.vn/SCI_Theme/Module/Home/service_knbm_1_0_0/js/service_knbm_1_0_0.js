const runFnGallery = (number = 4) => {
    const wrapperGallery = document.querySelector('.service_knbm_1_0_0__inner');
    const itemGallery = document.querySelectorAll('.service_knbm_1_0_0__item');
    const controlNext = document.querySelector('.service_knbm_1_0_0__next');
    const controlPrev = document.querySelector('.service_knbm_1_0_0__prev');
    let countGallery = number;
    const defaultWidthItem = 99.9999 / countGallery;
    const widthItemChild = 99.999 / itemGallery.length;
    let transformLeft = 0;
    const timeGallery = 3000;
    const autoPlayGallery = false;
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
    }
    
    const prevGallery = () => {
        if(transformLeft <= 0) transformLeft = (itemGallery.length - (countGallery - 1)) * widthItemChild;
        wrapperGallery.setAttribute('style', `width: ${defaultWidthItem*itemGallery.length}%; transform: translate3d(-${transformLeft -= widthItemChild}%, 0px, 0px)`);
    }
    
    if(autoPlayGallery){
        myInterGallery = setInterval(nextGallery, timeGallery);
    }
    
    controlNext.addEventListener('click', () => {
        nextGallery();
        if(autoPlayGallery){
            clearInterval(myInterGallery);
            myInterGallery = setInterval(nextGallery, timeGallery);
        }
    });
    controlPrev.addEventListener('click', () => {
        prevGallery();
        if(autoPlayGallery){
            clearInterval(myInterGallery);
            myInterGallery = setInterval(nextGallery, timeGallery);
        }
    });
}

document.addEventListener("DOMContentLoaded", function() {
    const windowWidth = window.innerWidth;
    if(windowWidth < 430) {
        runFnGallery(1);
    } else if(windowWidth < 768) {
        runFnGallery(2);
    } else if(windowWidth < 1024) {
        runFnGallery(3);
    } else {
        runFnGallery();
    }
});
