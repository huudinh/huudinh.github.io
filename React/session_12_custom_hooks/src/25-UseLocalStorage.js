import { useState } from "react";

const UseLocalStorage = () => {
    const [count, setCount] = useState(0);

    const handleIncrease = () => {
        setCount(count + 1);
    };

    return (
        <div>
            {count}
            <button onClick={handleIncrease}>Increase</button>
        </div>
    );
};

export default UseLocalStorage;