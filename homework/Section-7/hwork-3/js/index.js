console.log('Bài 3: ');
console.log(
  "3.1. Biến được khởi tạo bằng let trong 1 hàm sẽ không tồn tại khi hàm chạy xong"
);
function printAge() {
  let age = 18;
}
printAge();


console.log(
  "3.2. Biến được khởi tạo bằng var trong 1 hàm sẽ không tồn tại khi hàm chạy xong"
);
function setup() {
  var name = "Benjamin";
}
setup();

console.log(name);
console.log(age);