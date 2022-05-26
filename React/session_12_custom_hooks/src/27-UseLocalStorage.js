import { useState, useEffect } from "react";

const UseLocalStorage = () => {
    const [count, setCount] = useState(0);

    const handleIncrease = () => {
        setCount(count + 1);
    };
    const handleDecrease = () => {
        setCount(count - 1);
    };

    useEffect(() => {
        localStorage.setItem('count', count);
    }, [count]);

    return (
        <div>
            {count}
            <button onClick={handleIncrease}>Increase</button>
            <button onClick={handleDecrease}>Decrease</button>
        </div>
    );
};

export default UseLocalStorage;
// View Output