const slideCard = (data) => {
    return `
        <a href="${data.link}" target="_blank" class="slider_da_1_0_0_item" rel="nofollow">
            <picture>
                <source media="(min-width:465px)" srcset="${data.imgPc}">
                <img src="${data.imgMb}" alt="${data.title}" >
            </picture>
        </a>
    `
}

const slideBuild = (data) => {
    document.querySelector(".slider_da_1_0_0").innerHTML = slideCard(data);
}

const slideNext = (data) => {
    let count = 1
    const time = setInterval(() => {
        if (data.length == 1) {
            clearInterval(time);
        }
        if(count < data.length){
            slideBuild(data[count])
            count++; 
        } else {
            count = 0;
        }
        
    }, 3000);
}

slideBuild(slider_da_1_0_0__data[0])
slideNext(slider_da_1_0_0__data);