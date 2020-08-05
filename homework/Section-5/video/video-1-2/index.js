console.log('1.2. Learn how to randomly pick an item from an array [2, 5, 6, 9, 10]');

let n = Math.random();

n = Math.round(n * 10);

let arr = [2, 5, 6, 9, 10];

while (n >= arr.length) {
    n = Math.round(Math.random() * 10);
};

console.log(arr[n]);