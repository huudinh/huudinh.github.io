const numberToArr = (number, width) => {
    const numberF = new Array(width + 2 - (number + '0').length).join('0') + number;
    return String(numberF).split("").map(num => Number(num));
}

const countDecrease = (timeleft, selector, width) => {
    var downloadTimer = setInterval(function() {
        if (timeleft == 1) {
            clearInterval(downloadTimer);
        }
        const number = timeleft - 1;
        countCard(number, selector, width)
        timeleft -= 1;
    }, 1000);
}

const countCard = (number, selector, width) => {
    const numArr = numberToArr(number, width)
    let spanGroup = ''
    for (let item of numArr) {
        spanGroup += `<span>${item}</span>`
    }
    document.querySelector(selector).innerHTML = spanGroup;
}

countCard(100, '.count__item1', 3);
countDecrease(100, '.count__item1', 3);

countCard(20, '.count__item2', 2);
countDecrease(10, '.count__item2', 2);