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
    }
};