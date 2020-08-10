console.log("Bài Tập 9: in L và H theo yêu cầu")
setTimeout(() => {

    let n = prompt('Enter the total number of L\'s and H\'s');
    for (let i = 0; i < Math.ceil((n / 2)); i++) {
        console.log('L');
    }
    for (let i = 0; i < Math.floor((n / 2)); i++) {
        console.log('H');
    }

}, 3000);