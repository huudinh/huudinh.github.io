console.log("Bài Tập 9: in L và H theo yêu cầu")

setTimeout(()=>{

    let n = prompt('Enter the total number of 1\'s and 0\'s');

    for(let i = 0; i < n; i++) {
        if(i % 2 == 0) {
            console.log('0');
        } else {
            console.log('1');
        }
    }

},3000);
