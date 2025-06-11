var menuItems = document.getElementById("menuItems");
var imageContainer = document.querySelector(".screen1__inner");
var currentServiceId = 0; // Biến để lưu trữ ID của dịch vụ hiện tại

// Hàm lấy ID video từ Url
const getIdYoutube = (url) => {
  let video_id = url.split("v=")[1];
  const ampersandPosition = video_id.indexOf("&");
  if (ampersandPosition != -1) {
    video_id = video_id.substring(0, ampersandPosition);
  }
  return video_id;
};

// Hàm hiển thị video
function showImage(serviceId, element, getIdYoutube) {
  if (document.querySelector('.screen1__ani.ani')) {
    document.querySelector('.screen1__ani').classList.remove('ani');
  }
  var serviceImages = services[serviceId].images;
  window.location.hash = services[serviceId].link;
  var imageElements = "";
  for (let i = 0; i < serviceImages.length; i++) {
    if (serviceImages[i]['linkVideo']) {
      id = getIdYoutube(serviceImages[i]['linkVideo']);
      imageElements += `
        <div class="screen1__item" onclick="playVideo('${id}')" style="position: relative">
          <img width="327" height="259" src="${serviceImages[i]['link']}" alt="${serviceImages[i]['alt']}">
          <button class="screen1__play" style="width: 70px;">
            <img width="100" height="100" src="https://benhvienthammykangnam.vn/wp-content/uploads/2024/06/icon-play.png" alt="${serviceImages[i]['alt']}">
          </button>
        </div>
      `;
    }
  }

  setTimeout(() => {
    imageContainer.innerHTML = `
        <div class="screen1__des">${services[serviceId].desc ? services[serviceId].desc : ""}</div>
        <div class="screen1__pic">${imageElements}</div>`;
    document.querySelector('.screen1__ani').classList.add('ani');
  }, 300)
  for (var i = 0; i < menuItems.children.length; i++) {
    menuItems.children[i].classList.remove("active");
  }
  element.classList.add("active");
  currentServiceId = serviceId; // Cập nhật ID của dịch vụ hiện tại
}

for (var i = 0; i < services.length; i++) {
  var menuItem = document.createElement("li");
  menuItem.classList.add("menu__item");
  menuItem.innerText = services[i].name;
  menuItem.setAttribute("onclick", "showImage(" + i + ", this, getIdYoutube)");
  menuItems.appendChild(menuItem);
}

if (window.location.hash === "") window.location.hash = services[0].link;
const functionChangeHash = () => {
  services.forEach((item) => {
    if (window.location.hash === item.link) {
      const index = services.findIndex((x) => x.link === item.link);
      showImage(index, document.querySelectorAll(".menu__item")[index], getIdYoutube);
    }
  });
};
functionChangeHash();

window.addEventListener("hashchange", functionChangeHash);

const removeModal = (id) => {
  document.getElementById(id).remove();
};
const playVideo = (id) => {
  const html = `
        <div class="modal modal-clipBox"style="display: flex;" id="modal-clip">
            <div class="modal-closePic" onclick="removeModal('modal-clip')">×</div>
            <div class="modal-box modal-box-video animate-zoom">
                <div class="modal-video">
                    <iframe id="youtube" src="//www.youtube-nocookie.com/embed/${id}?rel=0&amp;controls=1&amp;autoplay=1&amp;nocookie=true&amp;mute=true" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="modal-bg" onclick="removeModal('modal-clip')"></div>
        </div>
        `;
  document.body.insertAdjacentHTML("beforeend", html);
};