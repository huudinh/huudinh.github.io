import { useState } from "react";

const Login = () => {
    const [isLoggedIn, setIsLoggedIn] = useState(true);

    let button = null;

    if (isLoggedIn){
        button = <button onClick={() => {
            setIsLoggedIn(false);
        }}>Log out</button>;
    } else {
        button = <button onClick={() => {
            setIsLoggedIn(true);
        }}>Log in</button>;
    }

    return <div>{button}</div>;

};

export default Login;