console.log("VD8: Object - Optional");

setTimeout(() => {
    console.log('1. Create a variable or a constant and assign the data to it');
    console.log(data);

    console.log('2.1 Print or log the movie count in there');
    console.log('Video Numbers: ' + data.results.length);

    console.log('2.2 Print or log out the data of the first movie');

    let movie = data.results[0];
    for (let item in movie) {
        console.log(`${item} : ${movie[item]}`);
    }

    console.log('2.3 Print or log out the title, vote_average and the genres of the first movie');

    console.log('Title: ' + data.results[0].title);
    console.log('Vote: ' + data.results[0].vote_average);
    console.log('Genres: ' + data.results[0].genres);

    console.log('2.4 Print or log out the title, vote_average and the genres of the first movie');

    for (let i = 0; i < data.results.length; i++) {
        console.log('-------------------------------');
        console.log('Title: ' + data.results[i].title);
        console.log('Vote: ' + data.results[i].vote_average);
        console.log('Genres: ' + data.results[i].genres);
    }

}, 3000);