about_kntm_1_0_0();
function about_kntm_1_0_0(){
    const numbers = document.querySelectorAll('.about_kntm_1_0_0__number');
    
    const running = (number) => {
        let counterInter;
        let init = 0;
        const initNumber = Number(number.textContent);
        const step = Math.ceil(initNumber/10);
        counterInter = setInterval(() => {
            if(init <= initNumber){
                number.innerText = init;
                init += step;
            } else {
                clearInterval(counterInter);
            }
        }, 100);
    };
    
    numbers.forEach(item => {
        const number = item.querySelector('span');
        running(number);
    });
}
