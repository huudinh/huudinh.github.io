
let currentSlideIndex = 0;

function buildSlider(slideArray, sliderContainer) {
  let myHTML = '', myStyle, slide = sliderContainer;

  for (let i = 0; i < slideArray.length; i++) {

    if(i == 0){
        myStyle = `style="left:0"`;
    } else {
        myStyle = '';
    }

    myHTML += `
      <a href="${slideArray[i].link}">
        <img id="${slide}${i}" class="singleSlide" ${myStyle} src="${slideArray[i].background}" alt="${ slideArray[i].title}" />
      </a>
    `;
  }

  document.getElementById(sliderContainer).innerHTML = myHTML;
}

buildSlider(slider1, 'slider1'); // Array, ID
buildSlider(slider2, 'slider2'); // Array, ID

setInterval(()=>{
    nextSlide(slider1, 'slider1');
}, 3000);

function prevSlide(slideArray, slide) {
  let nextSlideIndex;
  // Nếu chỉ số slide là 0, về slide cuối
  if (currentSlideIndex === 0) {
    nextSlideIndex = slideArray.length - 1;
  } else {
    // Nếu không thì giảm chỉ số đi 1
    nextSlideIndex = currentSlideIndex - 1;
  }

  // Ẩn slide hiện tại, hiện slide "currentSlideIndex"
  document.getElementById(slide + nextSlideIndex).style.left = "-100%";
  document.getElementById(slide + currentSlideIndex).style.left = 0;

  // Thêm class để chuyển slide có animation đã định nghĩa ở bước 3
    document
    .getElementById(slide + nextSlideIndex)
    .setAttribute("class", "singleSlide slideInLeft");
  document
    .getElementById(slide + currentSlideIndex)
    .setAttribute("class", "singleSlide slideOutRight");

  // Cập nhật giá trị slide hiện tại
  currentSlideIndex = nextSlideIndex;
}

function nextSlide(slideArray, slide) {
  let nextSlideIndex;
  if (currentSlideIndex === slideArray.length - 1) {
    nextSlideIndex = 0;
  } else {
    nextSlideIndex = currentSlideIndex + 1;
  }

  document.getElementById(slide + nextSlideIndex).style.left = "100%";
  document.getElementById(slide + currentSlideIndex).style.left = 0;

  document
    .getElementById(slide + nextSlideIndex)
    .setAttribute("class", "singleSlide slideInRight");
  document
    .getElementById(slide + currentSlideIndex)
    .setAttribute("class", "singleSlide slideOutLeft");

  currentSlideIndex = nextSlideIndex;
}
