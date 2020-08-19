console.log("VD7: Object - Array");

console.log('1. Create an array named movies, containing at least three movies, all have title, year, rate and characters properties');

let movie1 = {
    title: 'The dark knight rise',
    year: 2012,
    rate: 8.4,
    casts: ['Christian Bale', 'Tom Hardy', 'Anne Hathaway'],
}

let movie2 = {
    title: 'Fast and Furious',
    year: 2015,
    rate: 8.0,
    casts: ['Vin Diesel', 'Paul Walker', 'Michelle Rodriguez'],
}
let movie3 = {
    title: 'Home Before Dark',
    year: 2019,
    rate: 8.9,
    casts: ['Brooklyn Prince', 'Jim Sturgess', 'Kylie Rogers'],
}

let movies = [];

movies.push(movie1);
movies.push(movie2);
movies.push(movie3);
console.log(movies);

console.log('2. Log or print all the movies in the movies array, for example');

for (let i = 0; i < movies.length; i++) {
    console.log('----------------');
    console.log(movies[i].title);
    console.log('Year: ' + movies[i].year);
    console.log('Rate: ' + movies[i].rate);
    console.log('Casts: ' + movies[i].casts);
}