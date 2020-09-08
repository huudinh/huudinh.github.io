function random1_10() {
    return Math.floor(Math.random() * 12);
};
const x = random1_10();
console.log(x);
if (x < 0) {
    console.log('Failed: the number is smaller than 0');
} else if (x > 10) {
    console.log('Failed: the number is bigger than 10');
} else {
    console.log('Passed, bravo');
};
  