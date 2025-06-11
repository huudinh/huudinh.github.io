const funcControlDoctorSlide = () => {
    let myInter, index = 0;
    const time = 3000;
    
    const items = document.querySelectorAll('.doctor_knhx_1_0_0__item');
    
    const automaticLoop = () => {
        index++;
        if(index >= items.length) index = 0;
        items.forEach(item => item.classList.add('hidden'));
        items[index].classList.remove('hidden');
    };
    
    const automaticLoopPrev = () => {
        index--;
        if(index < 0) index = items.length - 1;
        items.forEach(item => item.classList.add('hidden'));
        items[index].classList.remove('hidden');
    }
    
    myInter = setInterval(automaticLoop, time);
    
    const next = document.querySelector('.doctor_knhx_1_0_0__next');
    const prev = document.querySelector('.doctor_knhx_1_0_0__prev');
    
    next.addEventListener('click', () => {
        automaticLoop();
        clearInterval(myInter);
        myInter = setInterval(automaticLoop, time);
    });
    
    prev.addEventListener('click', () => {
        automaticLoopPrev();
        clearInterval(myInter);
        myInter = setInterval(automaticLoop, time);
    });

    automaticLoop();
};

const funcRenderModalDoctor = (data) => {   
    const renderModalDoctor = data => {
        const box = document.getElementById('box-render');
        const template = document.getElementById('template-doctor');
        const clone = template.content.cloneNode(true);
        clone.querySelector('.modal-title').innerHTML = data.name;
        clone.querySelector('.modal__content').innerHTML = data.description;
        clone.querySelector('.modal-close').addEventListener('click', () => document.getElementById('modal-doctor').remove());
        clone.querySelector('.modal-bg').addEventListener('click', () => document.getElementById('modal-doctor').remove());
        box.appendChild(clone);
    };

    const items = document.querySelectorAll('.doctor_knhx_1_0_0__item');
    items.forEach(item => {
        item.addEventListener('click', () => {
            const id = item.getAttribute('data-id');
            renderModalDoctor(data[id]);
        })
    })
};

document.addEventListener("DOMContentLoaded", function() {
    funcControlDoctorSlide();
});