console.log("Bài Tập 8.7 : Selling your flock");

let sheepSizes = [5, 7, 300, 90, 24, 50, 75];
let index;

console.log('Hello, my name is Phuong Nam and here is my sheep sizes:');
console.log(...sheepSizes);
console.log('\n');

biggestSize = Math.max(...sheepSizes);

console.log("Now my biggest sheep has size " + biggestSize + " , let's shave it");
console.log('\n');

index = sheepSizes.indexOf(biggestSize)
sheepSizes[index] = 8;

console.log(`After shearing, here is my flock:`);
console.log(...sheepSizes);
console.log('\n');

for (let i = 0; i < sheepSizes.length; i++) {
    sheepSizes[i] += 50;
}

console.log("MONTH 1");
console.log("One month has, passed, my sheeps have grown, here are there sizes");
console.log(...sheepSizes);
console.log('\n');

biggestSize = Math.max(...sheepSizes);
console.log("Now my biggest sheep has size " + biggestSize + " , let's shave it");
console.log('\n');

index = sheepSizes.indexOf(biggestSize)
sheepSizes[index] = 8;

console.log(`After shearing, here is my flock:`);
console.log(...sheepSizes);
console.log('\n');

for (let i = 0; i < sheepSizes.length; i++) {
    sheepSizes[i] += 50;
}

console.log("MONTH 2");
console.log("One month has, passed, my sheeps have grown, here are there sizes");
console.log(...sheepSizes);
console.log('\n');

biggestSize = Math.max(...sheepSizes);
console.log("Now my biggest sheep has size " + biggestSize + " , let's shave it");
console.log('\n');

index = sheepSizes.indexOf(biggestSize)
sheepSizes[index] = 8;

console.log(`After shearing, here is my flock:`);
console.log(...sheepSizes);
console.log('\n');

for (let i = 0; i < sheepSizes.length; i++) {
    sheepSizes[i] += 50;
}

console.log("MONTH 3");
console.log("One month has, passed, my sheeps have grown, here are there sizes");
console.log(...sheepSizes);
console.log('\n');

res = 0;
for (let i = 0; i < sheepSizes.length; i++) {
    res += sheepSizes[i];
};
console.log(`My flock have total ${res}`);
console.log(`I would get ${res} * 2$ = ${res * 2}`);