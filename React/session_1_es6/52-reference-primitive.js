console.log('reference-primitive');

// string
// number
// boolean
// null
// undefined
// symbol

//object

let x = 1;
let y = x;
console.log(x === y); // true
let z = 1;
console.log(x === z); // true

x = 2;
console.log(x === y); // false