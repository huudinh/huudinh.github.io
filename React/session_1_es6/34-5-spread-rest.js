console.log('Spread operator');

const arr = [1, 2, 3];

console.log(arr);

console.log(...arr);

const arr2 = [0,...arr, 4];
console.log(arr2);

const concatedArr = [...arr, ...arr, 8, ...arr2];
console.log('concatedArr', concatedArr);