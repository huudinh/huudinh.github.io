const view = {};
view.setActiveScreen = (screenName) => {
    switch (screenName) {
        case 'register':
            // mount register screen
            document.getElementById('app').innerHTML = components.register;

            // add register button listeners
            document.getElementById('already-have-account').addEventListener('click', () => {
                view.setActiveScreen('login');
            });

            const registerForm = document.getElementById('register-form');
            registerForm.addEventListener('submit', (e) => {
                e.preventDefault();

                const registerInfo = {
                    firstName: registerForm.firstName.value,
                    lastName: registerForm.lastName.value,
                    email: registerForm.email.value,
                    password: registerForm.password.value,
                    confirmPassword: registerForm.confirmPassword.value,
                };

                controller.register(registerInfo);
            });
            
        case 'login':
            // mount login screen
            document.getElementById('app').innerHTML = components.login;

            // add register button listeners
            document.getElementById('create-account-button').addEventListener('click', () => view.setActiveScreen('register'));

            // add form submit listeners
            const loginForm = document.getElementById('login-form');
            loginForm.addEventListener('submit', (e) => {
                e.preventDefault();

                const loginInfo = {
                    email: loginForm.email.value,
                    password: loginForm.password.value,
                };

                controller.login(loginInfo);
            });
            break;

        case 'chat':
            // mount chat screen
            document.getElementById('app').innerHTML = `
                  <div>UID: ${model.authUser.uid}</div>
                  <div>Email: ${model.authUser.email}</div>
                  <div>Display Name: ${model.authUser.displayName}</div>
                `;
            break;
    }
};
view.setMessage = (elementId, message = '') => {
    document.getElementById(elementId).innerText = message;
}