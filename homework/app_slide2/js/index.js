let slider = [
    {
        name: 'Slider 1',
        url: 'images/1.jpg',
        text: '1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aperiam laudantium voluptatem totam animi alias ab molestiae possimus harum magnam iste repellendus cum eligendi, omnis tenetur! Adipisci repellat aperiam tempora.'
    },
    {
        name: 'Slider 2',
        url: 'images/2.jpg',
        text: '2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aperiam laudantium voluptatem totam animi alias ab molestiae possimus harum magnam iste repellendus cum eligendi, omnis tenetur! Adipisci repellat aperiam tempora.'
    },
    {
        name: 'Slider 3',
        url: 'images/3.jpg',
        text: '3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aperiam laudantium voluptatem totam animi alias ab molestiae possimus harum magnam iste repellendus cum eligendi, omnis tenetur! Adipisci repellat aperiam tempora.'

    },
    {
        name: 'Slider 4',
        url: 'images/4.jpg',
        text: '4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aperiam laudantium voluptatem totam animi alias ab molestiae possimus harum magnam iste repellendus cum eligendi, omnis tenetur! Adipisci repellat aperiam tempora.'
    },
    {
        name: 'Slider 5',
        url: 'images/5.jpg',
        text: '5. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aperiam laudantium voluptatem totam animi alias ab molestiae possimus harum magnam iste repellendus cum eligendi, omnis tenetur! Adipisci repellat aperiam tempora.'
    },
]
// console.log(slider);

let slideIndex = [0, 1];
let slideId = ["mySlides1", "mySlides2"];

function plusSlides(n, no) {
    if (n == 1){
        nextSlides(slideIndex[no] += n, no);
    } else{
        prevSlides(slideIndex[no] += n, no);
    }
}
function nextSlides(n, no) {
    let i;
    let x = document.getElementsByClassName(slideId[no]);
    let img = document.querySelectorAll('.mySlides1 img');
    let text = document.querySelectorAll('.mySlides1 .slider__text');
    console.log(n);
    console.log(img);
    if (n < 1) { slideIndex[no] = 3 }
    if (n < 3){
        for (i = 0; i < x.length; i++) {
            img[i].setAttribute('src', slider[i + n]['url']);
            text[i].innerHTML = slider[i + n]['text'];
            console.log(img[i]);
        }
    } else{
        slideIndex[no] = 0;
        alert('Bạn đã xem hết');
        for(let i = 0; i < x.length; i++){
            img[i].setAttribute('src', slider[i]['url']);
            text[i].innerHTML = slider[i + n]['text'];
        }
    }
   

}
function prevSlides(n, no) {
    let i;
    let x = document.getElementsByClassName(slideId[no]);
    let img = document.querySelectorAll('.mySlides1 img');
    let text = document.querySelectorAll('.mySlides1 .slider__text');
    // console.log(n);
    // console.log(img);
    if (n > -3){
        for (i = 0; i < x.length; i++) {
            img[i].setAttribute('src', slider[i - n]['url']);
            text[i].innerHTML = slider[i - n]['text'];
            console.log(img[i]);
        }
    } 
    else{
        slideIndex[no] = 0;
        alert('Bạn đã xem hết');
        for(let i = 0; i < x.length; i++){
            img[i].setAttribute('src', slider[i]['url']);
            text[i].innerHTML = slider[i + n]['text'];
        }
    }
}