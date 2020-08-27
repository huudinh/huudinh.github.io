console.log('Bài 7: ');

console.log('Bài 7 - 7.1');
let btn1 = document.getElementById("button1");
let btn2 = document.getElementById("button2");
btn1.addEventListener("click", (e) => {
    console.log(e.target);
});
btn2.addEventListener("click", (e) => {
    console.log(e.target);
});
console.log('e.target để đọc đọc button được click')

console.log('Bài 7 - 7.2');
document.getElementById('input').addEventListener('keydown', (e) => {
    console.log(e.key);
});