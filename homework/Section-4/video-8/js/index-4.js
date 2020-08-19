console.log('4. Write a script asking user the minimum rate they want and then print out ALL of the movie above that rate');

setTimeout(() => {

    let minRate = Number(prompt('Enter minimum rate to search: '));
    let check = false;

    for (let i = 0; i < data.results.length; i++) {
        if (data.results[i].vote_average >= minRate) {
            console.log(data.results[i].title);
            console.log(data.results[i].vote_average);
            check = true;
        }
    }
 
    if (check == false){
        alert(`${minRate} Cannot find any movies that match requirement in objects`);
    }

}, 3000);