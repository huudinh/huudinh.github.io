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

// Post User
controller.postUser = () => {
    const formRegist = document.getElementById('formRegist');

    formRegist.addEventListener('submit', (e)=>{
        e.preventDefault();

        const userInfo = {
            
        }
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


// Chose Login & Regist
controller.login = () =>{
    let login = document.getElementById('login');

    document.getElementById('login-button').addEventListener('click', ()=>{
        login.innerHTML = components.formLogin;

        // View Regist
        function viewRegist(){
            document.getElementById('regist-text').addEventListener('click', ()=>{
                login.innerHTML = components.formRegist;
                addUser();
    
                document.getElementById('login-text').addEventListener('click', ()=>{
                    login.innerHTML = components.formLogin;
                    viewRegist();
                });
            });
        }
        viewRegist();
        

        
    });


    document.getElementById('regist-button').addEventListener('click', ()=>{
        login.innerHTML = components.formRegist;
        addUser();

         // View Login
        function viewLogin(){
            document.getElementById('login-text').addEventListener('click', ()=>{
                login.innerHTML = components.formLogin;
    
                document.getElementById('regist-text').addEventListener('click', ()=>{
                    login.innerHTML = components.formRegist;
                    viewLogin()
                });
            });
        }
        viewLogin();
    });

    // Add user to Data
    function addUser(){
        let formRegist = document.getElementById('formRegist');
        // console.log(formRegist);
        formRegist.addEventListener('submit', (e) => {
            e.preventDefault();
    
            const userInfo = {
                name: formRegist.name.value,
                email: formRegist.email.value,
                password: formRegist.password.value,
                repassword: formRegist.repassword.value,
            }
    
            if(!userInfo.name){
                alert('Bạn chưa nhập tên');
            }
            else if(!userInfo.email){
                alert('Bạn chưa nhập email');
            }
            else if(!userInfo.password){
                alert('Bạn chưa nhập password:');
            }
            else if(!userInfo.repassword){
                alert('Bạn chưa nhập lại mật khẩu:');
            }
            else if(userInfo.password != userInfo.repassword){
                alert('Mật khẩu nhập lại không đúng');
            }
            if(userInfo.name && userInfo.email && userInfo.password && userInfo.repassword && userInfo.password == userInfo.repassword){
                model.addUser(userInfo);
            }
            
        });
    }
}

// Show Song
// controller.showSong = (song) =>{
//     console.log(song);
//     document.getElementById('postSong').innerHTML = components.song;
// }