// Mỗi slide sẽ có một chỉ số của riêng nó, để đơn giản chúng ta sẽ gán chỉ số mảng cho các slide
let slideIndex = 0;
// Cho ta biết chúng ta đang ở slide nào
let currentSlideIndex = 0;

let slideArray = [
  {
    title : 'The Walking Dead',
    background : 'https://acollectivemind.files.wordpress.com/2013/12/season-4-complete-cast-poster-the-walking-dead-the-walking-dead-35777405-2528-670.png',
    link : '#',
  },
  {
    title : 'The Big Bang Theory',
    background : 'https://www.denofgeek.com/wp-content/uploads/2019/02/tbbt_12-15.jpg',
    link : '#',
  },
  {
    title : 'The Last Man on Earth',
    background : 'https://www.wired.com/wp-content/uploads/2015/02/LMOE-AliveInTuscon_scene44_0028_hires2.jpg',
    link : '#',
  },
];

function buildSlider() {
  let myHTML;

  for (let i = 0; i < slideArray.length; i++) {
    myHTML += `
      <a href="${slideArray[i].link}">
        <img id="slide${i}" class="singleSlide" src="${slideArray[i].background}" alt="${ slideArray[i].title}" />
      </a>
    `;
  }

  document.getElementById("mySlider").innerHTML = myHTML;
  document.getElementById("slide" + currentSlideIndex).style.left = 0;
}

buildSlider();

function prevSlide() {
  let nextSlideIndex;
  // Nếu chỉ số slide là 0, về slide cuối
  if (currentSlideIndex === 0) {
    nextSlideIndex = slideArray.length - 1;
  } else {
    // Nếu không thì giảm chỉ số đi 1
    nextSlideIndex = currentSlideIndex - 1;
  }

  // Ẩn slide hiện tại, hiện slide "currentSlideIndex"
  document.getElementById("slide" + nextSlideIndex).style.left = "-100%";
  document.getElementById("slide" + currentSlideIndex).style.left = 0;

  // Thêm class để chuyển slide có animation đã định nghĩa ở bước 3
    document
    .getElementById("slide" + nextSlideIndex)
    .setAttribute("class", "singleSlide slideInLeft");
  document
    .getElementById("slide" + currentSlideIndex)
    .setAttribute("class", "singleSlide slideOutRight");

  // Cập nhật giá trị slide hiện tại
  currentSlideIndex = nextSlideIndex;
}

function nextSlide() {
  let nextSlideIndex;
  if (currentSlideIndex === slideArray.length - 1) {
    nextSlideIndex = 0;
  } else {
    nextSlideIndex = currentSlideIndex + 1;
  }

  document.getElementById("slide" + nextSlideIndex).style.left = "100%";
  document.getElementById("slide" + currentSlideIndex).style.left = 0;

  document
    .getElementById("slide" + nextSlideIndex)
    .setAttribute("class", "singleSlide slideInRight");
  document
    .getElementById("slide" + currentSlideIndex)
    .setAttribute("class", "singleSlide slideOutLeft");

  currentSlideIndex = nextSlideIndex;
}
