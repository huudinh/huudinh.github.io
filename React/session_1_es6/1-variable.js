// console.log('Hello, world!');

/*
    let
*/

// let x = 1;
// console.log('x ', x);
// x = 2;
// console.log('x ', x);



/*
    const
*/

// const g = 9.8;
// const pi = 3.14;
// console.log('g, pi: ',g, pi);
// g = 10; // Error


// const arr = [];
// arr.push(1);
// console.log('arr: ', arr);


/* 
    hoisting là hành vi của JS khi các câu lệnh khai báo 
    được đẩy lên trên  đầu của scope hiện tại. 
*/

// console.log('foo: ', foo);
// var foo = 'foo';

/*
    var foo;
    console.log('foo: ', foo);
    foo = 'foo';
*/



/* 
    scope
*/

// {
//     var a = "Foo";
//     let b = "Bar";
//     console.log(a, b); // Foo Bar
//     {
//         var c = "Fooz"
//         let d = "Bazz";
//         console.log(c, d); // Fooz Bazz
//     }
//     console.log(c); // Fooz
//     console.log(d); // ReferenceError
// }