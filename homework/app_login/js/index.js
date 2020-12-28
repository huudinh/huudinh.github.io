let checkLogin = localStorage.getItem('checkLogin');
// console.log(checkLogin);

window.onload = () => {
    if(checkLogin == 'true'){
        view.setActiveScreen('mainScreen1');
    } else{
        view.setActiveScreen('login');

    }
}