const box = document.getElementById('box');
const start = document.getElementById('start_btn');
const stop_btn = document.getElementById('stop_btn');
const result = document.getElementById('res');

let time = 0;

start.addEventListener('click', () => {
    if (box.value == '' || box.value <= 0) {
        alert('dont leave it blank or type an invalid number');
    } else {
        start.disabled = true;
        stop_btn.disabled = false;
        time = box.value;
        result.innerHTML = time;

        stop_btn.addEventListener('click', () => {
            start.disabled = false;
            stop_btn.disabled = true;
            clearInterval(inter);
            result.innerHTML = 'stopped';
        });
        
        let inter = setInterval(() => {
            time--;
            result.innerHTML = time;
            if (time == 0) {
                clearInterval(inter);
                result.innerHTML = 'Time up';
                start.disabled = false;
                stop_btn.disabled = true;
            };
        }, 1000);
    };
});