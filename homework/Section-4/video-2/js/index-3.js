console.log("VD3: Search Object");

setTimeout(() => {

    let movie = {
        title: 'Attack on titans',
        year: 2012,
        rate: 8.4
    };
    let check;

    let x = prompt('What you want to know?: ');
    if (x == null || x == undefined) {
        alert('GoodBye!');
    } else {
        for (let item in movie) {
            if (item == x) {
                alert(movie[item]);
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

}, 3000);