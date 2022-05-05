import { useState } from "react";

const Login = () => {
    const [isLoggedIn, setIsLoggedIn] = useState(true);

    let button = isLoggedIn ? <button>Logout</button> : <button>Login</button>


    return <div>{button}</div>;

};

export default Login;