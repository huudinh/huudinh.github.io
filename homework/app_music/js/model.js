const model = {};

// Read All Song
model.loadListSong = async () => {

    // Read Song Data
    songs.on("value", function (snapshot) {

        document.getElementById('listSong').innerHTML = '';
        let listSong = snapshot.val();
        console.log(listSong);
        let count = 0;
        for(let item in listSong){
            count ++;
            // console.log(data[item].check);
            // let cs;
            // if (data[item].check == 'checked'){
            //     cs = 'class="checked"';
            // }

            document.getElementById('listSong').insertAdjacentHTML('beforeend',`
                <tr>
                    <td>${count}.</td>
                    <td>
                        <b id="${item}">${listSong[item].name}</b>
                        <i>${listSong[item].singer}</i>
                    </td>
                    <td>
                        <i class="icon-heart-empty"></i><br><i class="icon-headphones"></i>
                        ${listSong[item].like}
                    </td>
                </tr>
            `);

            //View Song
            document.getElementById(item).addEventListener('click', ()=>{
                // console.log(item);
                model.showSong(item);
            })
            document.getElementById(item).addEventListener('click', TopscrollTo);
        }

    }, function (error) {
        console.log("Error: " + error.code);
    });
}

//Show Song
model.showSong = (song) =>{

    // Read Song Data
    songs.on("value", function (snapshot) {
        document.getElementById('postSong').innerHTML = '';
        let listSong = snapshot.val();
        for(let item in listSong){
            if (item == song){
                document.getElementById('postSong').insertAdjacentHTML('beforeend',`
                    <div class="msSong">
                        <div class="msSongTitle">
                            <b>Bài hát : ${listSong[item].name}</b>
                            <i>- ${listSong[item].singer}</i>                            
                        </div>
                        <div class="msSongView">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/${videoId(listSong[item].url)}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="msSongDetail">
                            <div class="msSongDetail__title">
                                <div>
                                    <b>Sáng tác :</b> ${listSong[item].author} <br>
                                    <b>Lời bài hát:</b>
                                </div>
                                <div class="msSongDetail__like">
                                    Bình chọn  <button id="like"><i class="icon-heart-empty"></i> <span>${listSong[item].like}</span></button> 
                                </div>
                            </div>
                            <div class="msSongDetail__content">
                                <pre>${listSong[item].lyrics}</pre>
                            </div>
                        </div>
                    </div>
                `);
            }
        }
    }, function (error) {
        console.log("Error: " + error.code);
    });

    // Binh chon
    controller.btnLike(song);    
}

//Create Song
model.addSong = async (songInfo) => {
    console.log(songInfo);
    // Add data to DB
    songs.push ({
        name: songInfo.name,
        singer: songInfo.singer,
        author: songInfo.author,
        genre: songInfo.genre,
        url: songInfo.url,
        lyrics: songInfo.lyrics,
        like: 0,
    });
    alert('Bạn đã đăng bài hát thành công');
}

//Create UserMusic
model.addUser = async (userInfo) => {
    // console.log(songInfo);
    // Add data to DB
    userMusic.push ({
        userName: userInfo.name,
        email: userInfo.email,
        password: userInfo.password,
        role: 'member'

    });
    alert('Bạn đã đăng ký thành công');
}