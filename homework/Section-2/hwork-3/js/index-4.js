console.log('D. In dãy số do người dùng nhập số đầu và cuối (n và c):')

setTimeout(()=>{

    let n = prompt('Enter n: ')
    let c = prompt('Enter c: ')
    for (let i = c; i < n; i++) {
        console.log(i);
    }

},3000);
