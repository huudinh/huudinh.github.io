import { useInput } from "./hooks";

const UseInpput = () => {
    const input = useInput()

    const handleGetValue = () => {
        console.log(input.value);
    };

    return (
        <div>
            <input value={input.value} onChange={input.handleChange} />
            <button onClick={handleGetValue}>Get value</button>
        </div>
    );
};

export default UseInpput;