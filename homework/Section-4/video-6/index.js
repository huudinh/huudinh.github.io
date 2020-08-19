console.log("VD6: Object containing Array");
console.log('1. Create an object named movie, with title, year and rate and characters. The characters contain at least 3 characters of the movie');
let movie = {
    title: 'Attack on titans',
    year: 2013,
    rate: 8.8,
    casts: ['Eren', 'Armin', 'Mikasa']
};
console.log(movie);

console.log('2. Print or log out the movie data in the following format');
for (let item in movie) {
    if (item == 'title') {
        console.log(movie[item]);
    } else if (item == 'character') {
        console.log(...movie[item]);
    } else {
        console.log(`${item}: ${movie[item]}`);
    }
}
console.log('3. Add new cast to the movie and then log it back')

movie.casts = ['Eren', 'Armin', 'Mikasa','Levi'];

for (let item in movie) {
    if (item == 'title') {
        console.log(movie[item]);
    } else if (item == 'character') {
        console.log(...movie[item]);
    } else {
        console.log(`${item}: ${movie[item]}`);
    }
}
