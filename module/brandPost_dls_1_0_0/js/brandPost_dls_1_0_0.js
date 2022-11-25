// compoinent bài viết
const recruitCard = (data) => {
  return `
    <div class="brandPost_dls_1_0_0__item">
        <div class="brandPost_dls_1_0_0__pic">
            <img src="${data.pic}" class="modal-btn" data-modal="modal-pic" alt="">
        </div>
        <div class="brandPost_dls_1_0_0__name">${data.name}</div>
        <div class="brandPost_dls_1_0_0__des">${data.des}</div>
    </div>
  `;
};

// compoinent phân trang
const pageItem = (num) => {
  let act = (num == 1) ? 'act' : '';
  return `<li class='${act}' onclick="showPage(${num})">${num}</li>`;
}

// Render dữ liệu bài viết
const render = (list, count) => {
  document.querySelector(".brandPost_dls_1_0_0__photo").innerHTML = "";
  for (let i = 0; i < list.length; i++) {
    if (i <= count) {
      document.querySelector(".brandPost_dls_1_0_0__photo").innerHTML +=
        recruitCard(list[i]);
    }
  }
};

// Khai báo số bài viết trên trang
let count = 5

// Gọi data ban đầu khi load trang
render(data, count);

// Render giao diện Phân trang
const pageSplit = () => {
  let numberPage = data.length / count;
  for (let i = 1; i < numberPage; i++) {
    document.querySelector('.brandPost_dls_1_0_0__pages').innerHTML += pageItem(i);
  }
}
pageSplit();

// Thuật toán phân Trang
const getPagenavi = (pageNum) => {
  let newData = [];
  const paginationLimit = 5
  const pageCount = Math.ceil(data.length / paginationLimit);
  let currentPage;
  currentPage = pageNum;

  const prevRange = (pageNum - 1) * paginationLimit;
  const currRange = pageNum * paginationLimit;
  data.forEach((item, index) => {
    if (index >= prevRange && index < currRange) {
      newData.push(item)
    }
  });
  return {
    render: newData,
    pageCount: pageCount
  }
}

// Gọi dữ liệu Phân Trang
function showPage(num){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
  render(getPagenavi(num).render, count);
  let li = document.querySelectorAll('.brandPost_dls_1_0_0__pages li');
  for(let i = 0; i < li.length; i++){
    li[i].classList.remove('act');
  }
  li[num-1].classList.add('act');
}