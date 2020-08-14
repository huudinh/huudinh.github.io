console.log("VD5: Delete Array");

setTimeout(() => {

    let phim = ['F&F', 'one piece', 'naruto', 'JAV', 'Mắt biếc'];

    console.log(phim);
    let i = prompt('nhap vao vi tri can xoa');
    phim.splice(i, 1);
    console.log(phim);   // xóa 1 mục ở vị trí i

    i = prompt('nhap vao vi tri can xoa');
    let n = prompt('nhap vao so phan tu');
    phim.splice(i, n);
    console.log(phim);   // xóa n mục ở vị trí i

}, 3000);