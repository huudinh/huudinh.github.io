console.log('Bai 3:');
console.log('C. In số do người dùng nhâp và bắt đầu đến từ 3:')

setTimeout(()=>{

    let m = prompt('A sequence of numbers, starting from 3, ending before n, n entered by user: ')
    for (let x = 3; x < m; x++) {
        console.log(x);
    }

},3000);