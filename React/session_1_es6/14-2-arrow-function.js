// console.log('Arrow Function');

// function expression, hoisting supported
function sum(a, b) {
    console.log('adding 2 numbers');
    return a + b;
}

// anonumous function, no hoisting supported
const multi = function(a, b) {
    console.log('multi');
    return a * b;
}

// arrow function, no hoisting supported
const sub = (a, b) => {
    console.log('subtracting 2 numbers');
    return a - b;
}

const devideBy = (a, b) => a / b;
const getAddress = () => ({ city: 'Hanoi'});
console.log( getAddress() );