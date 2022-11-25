
let slides = [
    {
        link:'https://pikwizard.com//photos/3eec72e82ad39fd6b513123f18e4f89d-m.jpg',
        text:'Luxury Scandinavian 1',
    },
    {
        link:'https://pikwizard.com/photos/593ff0454ff3cbccab684b4da9bb536d-m.jpg',
        text:'Luxury Scandinavian 2',
    },
    {
        link:'https://pikwizard.com/photos/f0f8c7eaf185accd8f734b6abe58a024-m.jpg',
        text:'Luxury Scandinavian 3',
    },
    {
        link:'https://pikwizard.com/photos/1df11708377d86678dc1b57c6d49b073-m.jpg',
        text:'Luxury Scandinavian 4',
    },
    {
        link:'https://pikwizard.com/photos/43e3751180fb558a037ad40581195e2d-m.jpg',
        text:'Luxury Scandinavian 5',
    },
    {
        link:'https://pikwizard.com/photos/8ba03e56a46b42b9af3a2aaa9dc432e8-m.jpg',
        text:'Luxury Scandinavian 6',
    },
    {
        link:'https://pikwizard.com/photos/861a431bd77259f30ac47321b0deac5c-m.jpg',
        text:'Luxury Scandinavian 7',
    },
];
let slideIndex = 0;

start();

function start() {
    showSlider(slides);
    changeSlide(0);
}

function showSlider(slides) {
    let sliderContent = document.querySelector('.slider__content');
    let slider = document.querySelector('.slider__control');

    /* display/slides holder */
    let display = document.createElement("div");
    display.setAttribute('class', 'display');

    /* dots/indicators controls holder */
    let dots = document.createElement("div");
    dots.setAttribute('class', 'slider__dots');

    for (let i = 0; i < slides.length; i++) {
        let slide = `
            <div class="slider__item" style="background-image:url(${slides[i].link});">
                <div class="slider__text">${slides[i].text}</div>
            </div>
        `;
        let dot = `<span class="slider__dot" onclick="showDirect(${i})"></span>`;
        display.innerHTML += slide;
        dots.innerHTML += dot;
    }
    slider.appendChild(display);
    sliderContent.appendChild(dots);
}


function changeSlide(n) {
    showDirect(slideIndex += n);
}

function showDirect(n) {
    slideIndex = n;
    let i, x = document.getElementsByClassName("slider__item");
    let dots = document.getElementsByClassName("slider__dot");

    if (n > x.length - 1) slideIndex = 0;
    if (n < 0) slideIndex = x.length - 1;
    for (i = 0; i <= x.length - 1; i++) {
        x[i].style.display = "none";
        slideIndex === i ? dots[slideIndex].style.backgroundColor = "#aaa" : dots[i].style.backgroundColor = "rgba(0,0,0,0)"
    }
    x[slideIndex].style.display = "block";
}