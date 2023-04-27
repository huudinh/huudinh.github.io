const ytCard = (id) => {
    return `
        <iframe src="//www.youtube.com/embed/${id}?rel=0&autoplay=1&mute=1" name="youtube embed" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    `;
}

let clips = document.getElementsByClassName('popupyt_1_0_0');
for(let i = 0; i < clips.length; i++){
    clips[i].addEventListener('click', () => {
        const id = clips[i].getAttribute('data-video');
        clips[i].innerHTML = ytCard(id);
        clips[i].classList.add('active');
    })
}