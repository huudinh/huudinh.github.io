console.log('Bài 4: ');
let x = document.getElementsByTagName("li");
console.log(x[0]);
console.log('------------');
function myFunction() {
    for (let i = 0; i < 3; i++) {
        console.log(x[i].innerHTML);
    }
}
myFunction();
