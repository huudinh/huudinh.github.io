import { useState } from "react";

const UseInpput = () => {
    const [input, setInput] = useState('');

    const handleInputChange = (event) => {
        setInput(event.target.value);   
    };

    const handleGetValue = () => {
        console.log(input);
    };

    return (
        <div>
            <input value={input} onChange={handleInputChange} />
            <button onClick={handleGetValue}>Get value</button>
        </div>
    );
};

export default UseInpput;