console.log("Bài Tập 5: Write a program asking users their age, and then decide if they are old enough to view a 14+ content");
setTimeout(()=>{

    let ageUsers = prompt("Enter your age: ");
    if (ageUsers >= 14) {
        alert("Enjoy!!!!!!");
    } else {
        alert("You are not old enough to view this content!");
    }
    
},3000);