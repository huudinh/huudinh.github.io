console.log("VD6: Read Array");

setTimeout(() => {

    let phim = ['F&F', 'one piece', 'naruto', 'JAV', 'Mắt biếc'];

    console.log(phim);
    console.log('1. Đọc tất cả mục trong mảng :')
    for (let i = 0; i < phim.length; i++) {
        console.log(phim[i]);
    }                   
    
    console.log('2. Đọc nửa mục đầu tiên trong mảng');
    for (let i = 0; i < phim.length / 2; i++) {
        console.log(phim[i]);
    }                  
    
    console.log('3. Đọc tất cả các mục đến vị trí n');
    let n = prompt('Nhap vao vi tri ');

    for (let i = 0; i < n; i++) {
        console.log(phim[i]);
    }                 
    

}, 3000);