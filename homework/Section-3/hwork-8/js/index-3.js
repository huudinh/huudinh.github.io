console.log("Bài Tập 8.3 : Chuyển sheep size lớn nhất về mặc định bằng 8 ");

let  sheepSizes = [5, 7, 300, 90, 24, 50, 75];
let index;

console.log('Hello, my name is Phuong Nam and here is my sheep sizes:');
console.log(...sheepSizes);

biggestSize = Math.max(...sheepSizes);

console.log("Now my biggest sheep has size " + biggestSize + " , let's shave it");

index = sheepSizes.indexOf(biggestSize)
sheepSizes[index] = 8;

console.log(`After shearing, here is my flock:`);
console.log(...sheepSizes);