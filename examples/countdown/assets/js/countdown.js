const numberToArr = (number) => {
    return String(number).split("").map(num => Number(num));
}

const countDecrease = (timeleft, selector) => {
    var downloadTimer = setInterval(function() {
        if (timeleft == 1) {
            clearInterval(downloadTimer);
        }
        const number = timeleft - 1;
        countCard(number, selector)
        timeleft -= 1;
    }, 1000);
}

const countCard = (number, selector) => {
    const numArr = numberToArr(number)
    let spanGroup = ''
    for (let item of numArr) {
        spanGroup += `<span>${item}</span>`
    }
    document.querySelector(selector).innerHTML = spanGroup;
}

countCard(300, '.count__item1');
countDecrease(300, '.count__item1');

countCard(200, '.count__item2');
countDecrease(10, '.count__item2');