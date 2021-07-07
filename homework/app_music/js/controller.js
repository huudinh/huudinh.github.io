const controller = {};

// Post Song
controller.postSong = () => {

    //add form submit listeners
    const songForm = document.getElementById('songForm');
    songForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const songInfo = {
            name: songForm.name.value,
            singer: songForm.singer.value,
            genre: songForm.genre.value,
            author: songForm.author.value,
            url: songForm.url.value,
            lyrics: songForm.lyrics.value,
        }

        if(!songInfo.name){
            alert('Bạn chưa nhập tên bài hát:');
        }
        else if(!songInfo.singer){
            alert('Bạn chưa nhập ca sĩ:');
        }
        else if(!songInfo.genre){
            alert('Bạn chưa nhập thể loại:');
        }
        else if(!songInfo.url){
            alert('Bạn chưa nhập link Youtube:');
        }
        if(songInfo.name && songInfo.singer && songInfo.genre && songInfo.url){
            model.addSong(songInfo);
        }
        songForm.name.value = '';
        songForm.singer.value = '';
        songForm.genre.value = '';
        songForm.author.value = '';
        songForm.url.value = '';
        songForm.lyrics.value = '';
    });
}

// Vote
controller.btnLike = (song) =>{
    let like = document.getElementById('like');
    // let likeNum = document.querySelector('#like span').textContent;
    let likeNum = Number(like.getElementsByTagName('span')[0].innerHTML);
    console.log(song);
    console.log(likeNum);
    like.addEventListener('click', ()=>{
        if (like.hasAttribute('class')){
            like.removeAttribute('class');
            alert('Bạn đã bỏ thích ~^~)!');
            likeNum -= 1;
        } else {
            like.setAttribute('class', 'active');
            alert('Bạn đã thêm vào danh sách yêu thích ^_^)!');
            likeNum += 1;
        }
        like.getElementsByTagName('span')[0].innerHTML = likeNum;
    });
}

// Show Song
// controller.showSong = (song) =>{
//     console.log(song);
//     document.getElementById('postSong').innerHTML = components.song;
// }