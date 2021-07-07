const view = {};
view.setActiveScreen = (screenName) => {
    switch (screenName) {
        case 'main':
            // mount Main screen
            document.getElementById('app').innerHTML = components.main;

            // Read Song
            model.loadListSong();

            // Show top Song
            document.getElementById('topSong').innerHTML = components.topSong;

            // Create Song
            document.getElementById('btnPost').addEventListener('click', ()=>{
                document.getElementById('postSong').innerHTML = components.postSong;
                controller.postSong();
            });

            // View Login Regist
            document.getElementById('login').innerHTML = components.formInfo;

            document.getElementById('login-button').addEventListener('click', ()=>{
                document.getElementById('login').innerHTML = components.formLogin;
                // View Regist
                document.getElementById('regist-text').addEventListener('click', ()=>{
                    document.getElementById('login').innerHTML = components.formRegist;
                });
            });
            document.getElementById('regist-button').addEventListener('click', ()=>{
                document.getElementById('login').innerHTML = components.formRegist;
            });
        
            
           
           

    }
}