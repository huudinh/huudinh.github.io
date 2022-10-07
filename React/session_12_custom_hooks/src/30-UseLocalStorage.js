import { useLocalStorage } from "./hooks";

const UseLocalStorage = () => {
    const [count, setCount] = useLocalStorage();

    const handleIncrease = () => {
        setCount(count + 1);
    };
    const handleDecrease = () => {
        setCount(count - 1);
    };

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