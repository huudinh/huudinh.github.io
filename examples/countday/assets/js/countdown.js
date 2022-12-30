function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

const countCard = (days, hours, minutes, seconds ) => {
    return `
        <div class="count__text">
            <span class="days">${days}</span>ngày
        </div>
        <p>:</p>
        <div class="count__text">
            <span class="hours">${hours}</span>giờ
        </div>
        <p>:</p>
        <div class="count__text">
            <span class="minutes">${minutes}</span>phút
        </div>
        <p>:</p>
        <div class="count__text">
            <span class="seconds">${seconds}</span>giây
        </div>
    `;
}

function initializeClock(id, endtime) {
    const updateClock = () => {
        var t = getTimeRemaining(endtime);
        let days = ('0' + t.days).slice(-2);
        let hours = ('0' + t.hours).slice(-2);
        let minutes = ('0' + t.minutes).slice(-2);
        let seconds = ('0' + t.seconds).slice(-2);
        if (t.total <= 0) {
            clearInterval(timeinterval);
            days = 0
            hours = 0
            minutes = 0
            seconds = 0
        }
        document.getElementById(id).innerHTML = countCard(days, hours, minutes, seconds);
    }
    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}

function endtime(day){
    var startDate = new Date(new Date(day) - new Date())
    var days = startDate.getDate()
    var hours = startDate.getHours();
    var minutes = startDate.getMinutes();
    var seconds = startDate.getSeconds();
    return new Date(Date.parse(new Date()) + days * 24 * 60 * 60 * 1000 + hours * 60 * 60 * 1000 + minutes * 60 * 1000 + seconds * 1000);
}

initializeClock('count', endtime('12/31/2022'));
initializeClock('count1', endtime('01/05/2023'));