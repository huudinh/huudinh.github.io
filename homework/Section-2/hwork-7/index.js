console.log("Bài Tập 7: Write a program asking user to enter two numbers, x and n, then check if x is in lower half or higher half of n");
setTimeout(()=>{

    let n = prompt("Enter n = ");
    let x = prompt("Enter x = ");
    if (x < n / 2) {
        alert(x + " is in lower half of " + n)
    } else if (x > n / 2) {
        alert(x + " is in higher half of " + n)
    } else {
        alert(x + " equals half of " + n)
    }
    
},3000);