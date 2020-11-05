console.log("Bài Tập 6: Find the smallest number");
setTimeout(() => {

    n = prompt('enter a sequence of number sep by com');
    num = n.split(',');
    let min = num[0];
    for (let i = 0; i < num.length; i++) {
        if (Number(min) > Number(num[i])) {
            min = num[i];
        };
    };
    alert(`the smallest number is ${min}`);

}, 3000);