console.log('Bài 6: ');

console.log('1. Show single');
let y = document.getElementsByClassName('singer');
for (let i = 0; i < 4; i++) {
    console.log(y[i]);
}

console.log('2. Delete single index 1')
document.getElementsByClassName('singer')[1].remove();

for (let i = 0; i < 4; i++) {
    console.log(y[i]);
}
