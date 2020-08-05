const counter_span = document.getElementById('counter_value');
const up = document.getElementById('counter_up');
const down = document.getElementById('counter_down');
let count = 0;

counter_span.innerHTML = count;

up.addEventListener('click', () => {
    count++;
    counter_span.innerHTML = count;
});

down.addEventListener('click', () => {
    count--;
    counter_span.innerHTML = count;
});