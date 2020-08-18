console.log('Bài 1: ');
const product = {
    name: "Xiaomi rice cooker",
    price: 1700,
    brand: "Xiaomi",
    color: "white"
};

for (let x in product) {
    console.log(x);
}
console.log('Bài 1.1: ');
console.log('x nhận Property từ product');

console.log('\nBài 1.2: Use the for loop to print/log out the following output');

for (let x in product) {
    console.log(x + ": " + product[x]);
}