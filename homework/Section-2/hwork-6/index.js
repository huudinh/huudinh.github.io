console.log("Bài Tập 6: Write a program asking user to enter a number, x, then check if x is in the lower half or higher half of 0 - 9 range");
setTimeout(()=>{

    let x = prompt("Enter a number:");
    
    if (x > 9 / 2) {
        alert("Higher half of 9");
    } else if (x < 9 / 2) {
        alert("Lower half of 9");
    } else {
        alert("Your number equals half of 9")
    }
    
},3000);