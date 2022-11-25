const view = {};

// view.setLogin = (elementId) => {
//     document.getElementById(elementId).addEventListener('click', ()=>{
//         document.getElementById('login').innerHTML = components.formLogin;
//     });
// }

// view.setRegist = (elementId) => {
//     document.getElementById(elementId).addEventListener('click', ()=>{
//         document.getElementById('login').innerHTML = components.formRegist;
//     });
// }

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

            controller.login();

            
        
            
           
           

    }
}