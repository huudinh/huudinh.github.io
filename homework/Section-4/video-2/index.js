console.log("VD2: Add new item named newMovie into the end of the movies array you initialized, newMovie entered by users");

setTimeout(()=>{
    
    let phim = [ 'F&F' , 'one piece' , 'naruto' , 'JAV', 'Mắt biếc'];
    let newMovie = prompt('Enter new movie');
    phim.push(newMovie);
    console.log(phim);   

},3000);