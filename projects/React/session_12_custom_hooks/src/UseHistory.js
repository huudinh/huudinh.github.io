import { useHistory } from "./hooks";

const UseHistory = () => {
    const history = useHistory(0);

    return (
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
    );
};

export default UseHistory;