console.log("VD3.2:");

setTimeout(() => {

    let movie = {
        title: 'The dark night rises',
        year: 2012,
        rate: 8.4
    };
    
    console.log('Movie trước Update :');
    console.log(movie);

    let check;

    let x = prompt('What you want to update: ');
    if (x == null || x == undefined) {
        alert('GoodBye!');
    } else {
        for (let item in movie) {
            if (item == x) {
                let y = prompt('What is the update: ');
                movie[item] = y;
                break;
            } 
            else {
                check = false;
            }
        }
        if (check == false){
            alert(`${x} does not exist in our data`)
        }
    }
    console.log('Movie sau Update :');
    console.log(movie);

}, 3000);