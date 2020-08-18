console.log("VD4: Update Array");

setTimeout(() => {

    let phim = ['F&F', 'one piece', 'naruto', 'JAV', 'Mắt biếc'];

    console.log(phim);
    let movieTitle = prompt('nhap vao ten phim');
    phim[0] = movieTitle;
    console.log(phim[0]);
    console.log(phim);   // cập nhật mục đầu tiên

    movieTitle = prompt('nhap vao ten phim');
    i = prompt('nhap vao vi tri');
    phim[i] = movieTitle;
    console.log(phim[i]);
    console.log(phim);   // cập nhật mục ở vị trí i

}, 3000);