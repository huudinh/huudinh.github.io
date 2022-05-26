import { useState, useEffect } from "react";

const UseLocalStorage = () => {
    const [count, setCount] = useState(0);

    const handleIncrease = () => {
        setCount(count + 1);
    };

    useEffect(() => {
        localStorage.setItem('count', count);
    }, [count]);

    return (
        <div>
            {count}
            <button onClick={handleIncrease}>Increase</button>
        </div>
    );
};

export default UseLocalStorage;
// View Output