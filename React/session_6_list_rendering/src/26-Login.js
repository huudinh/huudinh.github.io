import { useState } from "react";

const Login = () => {
    const [isLoggedIn, setIsLoggedIn] = useState(true);

    const handleClick = () => {
        setIsLoggedIn(!isLoggedIn);
    };

    return (
        <div>
            <button 
                style={{backgroundColor: isLoggedIn ? 'yellow' : 'red'}} 
                onClick={handleClick}
            >
                {isLoggedIn ? 'Logout' : 'Login'}
            </button>
        </div>
    );
};

export default Login;