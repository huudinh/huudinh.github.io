console.log('reference-primitive');

// string
// number
// boolean
// null
// undefined
// symbol

//object

// primitive data type
let x = 1;
let y = x;
console.log(x === y); // true
let z = 1;
console.log(x === z); // true

x = 2;
console.log(x === y); // false

// reference data type
let foo = {};
let bar = foo;
console.log(foo === bar); // true

foo.name = 'Mindx';
console.log(bar);

foo = {};
bar = {};
console.log(foo === bar); // false

foo.name = 'Mindx';
console.log(foo, bar);