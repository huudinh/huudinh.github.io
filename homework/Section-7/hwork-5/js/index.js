console.log('Bài 5: ');

let x = document.getElementsByTagName('div');
for (let i = 0; i <= 4; i++) {
    console.log(x[i]);
}
console.log('=====');
console.log(x[1]);

let y = document.getElementsByClassName('singer');
for (let i = 0; i < 4; i++) {
    console.log(y[i].innerHTML);
}