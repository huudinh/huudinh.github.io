const view = {};

view.setActiveScreen = (screenName) => {
    switch (screenName) {
        case 'login' :
            //mount login screen
            document.getElementById('app').innerHTML = components.login;

            //add form submit listeners
            const loginForm = document.getElementById('login-form');
            loginForm.addEventListener('submit', (e) => {
                e.preventDefault();

                const loginInfo = {
                    email: loginForm.email.value,
                    password: loginForm.password.value,
                }
                controller.login(loginInfo);
            });
            break;

        case 'mainScreen1' :
            //mount login screen
            document.getElementById('app').innerHTML = components.mainScreen1;
            document.getElementById('user').innerHTML = localStorage.getItem('user');
            document.getElementById('userLogout').addEventListener('click', ()=>{
                controller.logOut();
            });
            break;

        case 'mainScreen2' :
            //mount login screen
            document.getElementById('app').innerHTML = components.mainScreen2;
            document.getElementById('user').innerHTML = localStorage.getItem('user');
            document.getElementById('userLogout').addEventListener('click', ()=>{
                controller.logOut();
            });
            break;

        case 'mainScreen3' :
            //mount login screen
            document.getElementById('app').innerHTML = components.mainScreen3;
            document.getElementById('user').innerHTML = localStorage.getItem('user');
            document.getElementById('userLogout').addEventListener('click', ()=>{
                controller.logOut();
            });
            break;
        case 'mainScreen4' :
            //mount login screen
            document.getElementById('app').innerHTML = components.mainScreen4;
            document.getElementById('user').innerHTML = localStorage.getItem('user');
            document.getElementById('userLogout').addEventListener('click', ()=>{
                controller.logOut();
            });
            break;
    }
};