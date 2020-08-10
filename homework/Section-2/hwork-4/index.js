console.log('4. Tính giai thừa đựa vào số nhập vào');
setTimeout(()=>{

    let a = Number(prompt('Enter factoriala number: '));
    let x = 1;
    for (var i = 1; i <= a; i++) {
        x = x * i;
    }
    alert(`The factorial of ${a} is ${x} `);5
    
},3000);