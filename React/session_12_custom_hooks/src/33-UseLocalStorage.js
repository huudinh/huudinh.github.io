import { useLocalStorage } from "./hooks";

const UseLocalStorage = () => {
    const count = useLocalStorage('count1');
    const count2 = useLocalStorage('count2');

    return (
        <div>
            {count}
            <button onClick={handleIncrease}>Increase</button>
            <button onClick={handleDecrease}>Decrease</button>
            <br/><br/>
            {count2.value} 
            <button onClick={count2.increase}>Increase</button>
            <button onClick={count2.decrease}>Decrease</button>
        </div>
    );
};

export default UseLocalStorage;
// View Output