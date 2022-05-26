import { useState } from "react";
import { useInput } from "./hooks";

const UseInpput = () => {
    const [input, setInput] = useState('');

    const [value, setValue] = useInput()

    const handleInputChange = (event) => {
        setInput(event.target.value);   
    };

    const handleGetValue = () => {
        console.log(input);
    };

    return (
        <div>
            <input value={value} onChange={handleInputChange} />
            <button onClick={handleGetValue}>Get value</button>
        </div>
    );
};

export default UseInpput;