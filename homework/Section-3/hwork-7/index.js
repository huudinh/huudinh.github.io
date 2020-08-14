console.log("Bài Tập 7: Search to look for the number in the array");
setTimeout(() => {

    const arr = [3, 4, 6, -9, 10, -88, 2];
    let userChoice = prompt("Enter a number");
    let count = 0;
    let index = 0;

    for (let i = 0; i < arr.length; i++) {
        if (userChoice == arr[i]) {
            count++;
            index = i;
        }
    }

    if (count == 0) {
        alert(userChoice + " is NOT found in array");
    } else {
        alert(userChoice + " is FOUND in array at index " + index);
    }

}, 3000);