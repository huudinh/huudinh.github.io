console.log("Bài Tập 1: Variable swap:");
let a,b,c;

console.log("Cách 1:=======================");
a = 5;
b = 6;
console.log("a = " + a + "; b = " + b);

c = a;
a = b;
b = c;
console.log("a = " + a + "; b = " + b);

console.log("Cách 2:=======================");
a = 5;
b = 6;
console.log("a = " + a + "; b = " + b);

a = a + b;
b = a - b;
a = a - b;
console.log("a = " + a + "; b = " + b);