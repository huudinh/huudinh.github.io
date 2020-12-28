const controller = {};

controller.login = async (loginInfo) => {
    if(!loginInfo.email){
        alert('Nhap Email:');
    }else if(!loginInfo.password){
        alert('Nhap Password:');
    }
    if(loginInfo.email && loginInfo.password){
        let checkLogin = false;
        for(let user of users ){
            //Check data.js
            if((loginInfo.email == user.email) && (loginInfo.password == user.password)){
                view.setActiveScreen('mainScreen1');
                localStorage.setItem("checkLogin", 'true');
                localStorage.setItem("user", 'user.email');
                checkLogin = true;
                break;
            } 
        }
        if(!checkLogin) {
            alert('Bạn nhập sai thông tin');
            view.setActiveScreen('login');
        }
      
    }
    
}