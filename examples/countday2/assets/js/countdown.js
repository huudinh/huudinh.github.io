function initializeClock(id, endtime) {
    let target_date = new Date(endtime).getTime(); // set the countdown date

    // get tag element
    const countdown = (id) => {
        getCountdown(id, target_date);
        setInterval(function() {
            getCountdown(id, target_date);
        }, 1000);
    }
    countdown(id);
}

function getCountdown(id, target_date) {
    // variables for time units
    let days, hours, minutes, seconds; 
    let countdown = document.getElementById(id);

    // find the amount of "seconds" between now and target
    let current_date = new Date().getTime();
    let seconds_left = (target_date - current_date) / 1000;

    if(target_date > current_date){
        days = pad(parseInt(seconds_left / 86400));
        seconds_left = seconds_left % 86400;
    
        hours = pad(parseInt(seconds_left / 3600));
        seconds_left = seconds_left % 3600;
    
        minutes = pad(parseInt(seconds_left / 60));
    
        seconds = pad(parseInt(seconds_left % 60));
    } else{
        days = pad(0);
        hours = pad(0);
        minutes = pad(0);
        seconds = pad(0);
    }

    // format countdown string + set tag value
    countdown.innerHTML = `
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

function pad(n) {
    return (n < 10 ? '0' : '') + n;
}

initializeClock('count', '01/11/2023')
initializeClock('count1', '01/13/2023')