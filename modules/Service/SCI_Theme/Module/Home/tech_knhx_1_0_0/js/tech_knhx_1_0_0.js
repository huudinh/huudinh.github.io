const renderTech = (data) => {   
    const render = data => {
        document.querySelector('.tech_knhx_1_0_0__image').innerHTML = `<img src="${data.image}">`;
        document.querySelector('.tech_knhx_1_0_0__description').innerHTML = data.description;
        document.querySelector('.tech_knhx_1_0_0__title').innerHTML = data.title;
        document.querySelector('.tech_knhx_1_0_0__info').classList.remove('ani')
        setTimeout(() => document.querySelector('.tech_knhx_1_0_0__info').classList.add('ani'), 0)
    };
    
    const elms = document.querySelectorAll('.tech_knhx_1_0_0__tab');
    elms.forEach(elm => {
        elm.addEventListener('click', () => {
            elms.forEach(item => item.classList.remove('active'));
            elm.classList.add('active');
            const id = elm.getAttribute('data-id');
            render(data[id]);
        });
    });
};