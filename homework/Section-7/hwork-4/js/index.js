console.log('Bài 1: ');
const container = document.getElementById('list');
const btn1 = document.getElementById('btn1');
const btn2 = document.getElementById('btn2');
const btn3 = document.getElementById('btn3');
const btn4 = document.getElementById('btn4');
const result = document.getElementById('result');

btn1.addEventListener('click',()=>{
    result.insertAdjacentHTML('beforeEnd','<li>Result Position: beforeBegin -> d</li>')
    for (let i = 0; i < 3; i++) {
        container.insertAdjacentHTML('beforeBegin', `<li>${i}</li>`);
    }
});

btn2.addEventListener('click',()=>{
    result.insertAdjacentHTML('beforeEnd','<li>Result Position: afterBegin -> a</li>')
    for (let i = 0; i < 3; i++) {
        container.insertAdjacentHTML('afterBegin', `<li>${i}</li>`);
    }
});

btn3.addEventListener('click',()=>{
    result.insertAdjacentHTML('beforeEnd','<li>Result Position: beforeEnd -> c</li>')
    for (let i = 0; i < 3; i++) {
        container.insertAdjacentHTML('beforeEnd', `<li>${i}</li>`);
    }
});

btn4.addEventListener('click',()=>{
    result.insertAdjacentHTML('beforeEnd','<li>Result Position: afterEnd -> b</li>')
    for (let i = 0; i < 3; i++) {
        container.insertAdjacentHTML('afterEnd', `<li>${i}</li>`);
    }
});
