import { useLocalStorage } from "./hooks";

const UseLocalStorage = () => {
    const [count, setCount] = useLocalStorage('count1');
    const [count2, setCount2] = useLocalStorage('count2');

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
// Stop localstorage