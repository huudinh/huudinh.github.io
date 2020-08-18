console.log("VD7: Change all items of movies array into lowercase");

setTimeout(() => {

    let phim = ['F&F', 'one piece', 'naruto', 'JAV', 'Mắt biếc'];

    console.log(phim);

    for (let i = 0; i < phim.length; i++) {
        phim[i] = phim[i].toLowerCase();
    }
    console.log(phim);


}, 3000);