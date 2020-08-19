console.log("VD2.1:");

let movie = {
    title: 'The dark night rises',
    year: 2012,
    rate: 8.4
};

console.log('1. Read Object Ways 1')

console.log('Title : ' + movie.title);
console.log('Year : ' + movie.year);
console.log('Rate : ' + movie.rate);

console.log('2. Read Object Ways 2')
for(let prop in movie) {
    console.log(`${prop} : ${movie[prop]}`);
}