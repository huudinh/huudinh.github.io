import { useState } from "react";

const UseInpput = () => {
    const [input, setInput] = useState('');
    const [input2, setInput2] = useState('');

    const handleInputChange = (event) => {
        setInput(event.target.value);   
    };
    const handleInput2Change = (event) => {
        setInput2(event.target.value);   
    };

    const handleGetValue = () => {
        console.log(input);
        console.log(input2);
    };

    return (
        <div>
            <input value={input} onChange={handleInputChange} />
            <input value={input2} onChange={handleInput2Change} />
            <button onClick={handleGetValue}>Get value</button>
        </div>
    );
};

export default UseInpput;