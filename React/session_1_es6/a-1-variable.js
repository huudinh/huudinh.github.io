let x = 1;
console.log('x ', x);
x = 2;
console.log('x ', x);

const g = 9.8;
const pi = 3.14;
console.log('g, pi: ', g, pi);
g = 10; // Error

// hoisting
// là hành vi của JS khi các câu lệnh khai báo được đẩy lên trên  đầu của scope hiện tại. 

console.log('foo: ', foo);
var foo = 'foo';

/*
    var foo;
    console.log('foo: ', foo);
    foo = 'foo';
*/

const arr = [];
arr.push(1);
console.log('arr: ', arr);