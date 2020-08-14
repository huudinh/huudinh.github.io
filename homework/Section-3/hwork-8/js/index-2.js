console.log("Bài Tập 8.2 : Tìm sheep size lớn nhất ");

let sheepSizes = [5, 7, 300, 90, 24, 50, 75];
console.log('Hello, my name is Phuong Nam and here is my sheep sizes:');
console.log(...sheepSizes);

let max = sheepSizes[0];

for (let i = 0; i < sheepSizes.length; i++) {
    if (Number(max) < Number(sheepSizes[i])) {
        max = sheepSizes[i];
    };
};

console.log("Now my biggest sheep has size " + max + " , let's shave it");
