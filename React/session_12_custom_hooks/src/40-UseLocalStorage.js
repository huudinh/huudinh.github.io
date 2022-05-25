import { useHistory, useLocalStorage } from "./hooks";

const UseLocalStorage = () => {
    const [count, setCount] = useLocalStorage('count1');

    const history = useHistory(0);

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
            <div>
                {history.value} {' '}
                <button 
                    onClick={() => {
                        history.setValue(Math.floor(Math.random() * 100));
                    }}
                >
                    Random
                </button>
                <button
                    onClick={() => {
                        history.undo();
                    }}
                >
                    Undo
                </button>
                {history.history.join(', ')}
            </div>

        </div>
    );
};

export default UseLocalStorage;