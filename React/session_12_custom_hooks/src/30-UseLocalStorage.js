import { useEffect } from "react";
import { useLocalStorage } from "./hooks";

const UseLocalStorage = () => {
    const [count, setCount] = useLocalStorage();

    const handleIncrease = () => {
        setCount(count + 1);
    };
    const handleDecrease = () => {
        setCount(count - 1);
    };

    useEffect(() => {
        setCount(Number(localStorage.getItem('count')));
    }, []);

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