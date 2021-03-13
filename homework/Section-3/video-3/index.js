console.log("VD3: Read the item at position i in the movies array, i entered by users");

setTimeout(()=>{
    
    let phim = [ 'F&F' , 'one piece' , 'naruto' , 'JAV', 'Mắt biếc'];
    
    console.log(phim);   

    let i = prompt(`Nhap vao vi tri can xem tu 1 den ${phim.length}`);

    console.log('Phim ban chon co ten la: ' + phim[i-1]); 

},3000);