console.log("VD5: Array of Object");

let movies = [
    {
        title: 'Attack on titans',
        year: 2013,
        rate: 8.8
    },
    {
        title: 'My bos my hero',
        year: 2006,
        rate: 8.2
    },
    {
        title: 'hunter',
        year: 2017,
        rate: 8.6
    },
    {
        title: 'Unabomber',
        year: 2017,
        rate: 8.1
    }
];
console.log('1. Create an array called movies, containing at least 3 movie data with the same structure all have title, year and rate (you can add more property if you like)');
console.log(movies);

console.log('2. Print or log out the first movie from movie list');
console.log(movies[0]);

console.log('3. Print or log out the title of the last movie from movie list');
console.log(movies[movies.length - 1].title);

console.log('4. Use a loop to print or log out all of the movie in the movie list');

for (let movie of movies) {
    console.log('-----------------');
    for (let item in movie) {
        if (item == 'title') {
            console.log(movie[item]);
        } else {
            console.log(`${item}: ${movie[item]}`);
        }
    }
}

console.log('5. Use a loop to print or log out all of the movie in the movie list, the data is prettified as follow')
for (let movie of movies) {
    movie.rate = (movie.rate + 0.7).toFixed(2);
}
console.log(movies);
