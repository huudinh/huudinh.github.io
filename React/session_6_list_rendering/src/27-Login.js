import { useState } from "react";

const Login = () => {
    const [isLoggedIn, setIsLoggedIn] = useState(true);

    // let button = isLoggedIn ? <button>Logout</button> : <button>Login</button>

    const handleClick = () => {
        setIsLoggedIn(!isLoggedIn);
    };

    return (
        <div>
            <button style={{backgroundColor: isLoggedIn ? 'yellow' : 'red'}} 
            onClick={handleClick}>{isLoggedIn ? 'Logout' : 'Login'}</button>

            {isLoggedIn && <p>Welcome</p>}
        </div>
    );
};

export default Login;