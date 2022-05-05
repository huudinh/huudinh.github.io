import { useState } from "react";

const Login = () => {
    const [isLoggedIn, setIsLoggedIn] = useState(false);

    let button = null;

    if (isLoggedIn){
        button = <button>Log out</button>;
    } else {
        button = <button>Log in</button>;
    }

    return <div>{button}</div>;
};

export default Login;