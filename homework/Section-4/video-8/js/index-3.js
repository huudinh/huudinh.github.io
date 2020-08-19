console.log('3. Write script asking user which genre they like, then print out all of the movie in movies list with that genre');

setTimeout(() => {

    let genre = prompt('Enter genres of movies to search: ');
    let genreScript = Number(genre);
    let check = false;

    for (let i = 0; i < data.results.length; i++) {
        if (data.results[i].genres.includes(genreScript)) {
            console.log(i + 1 + '. ' + data.results[i].title);
            check = true;
        } 
    }
    if (check == false){
        alert(`${genreScript} Cannot find any genre that match in objects`);
    }

}, 3000);