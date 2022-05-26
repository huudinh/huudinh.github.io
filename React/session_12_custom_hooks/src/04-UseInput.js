import { useState } from "react";

const UseInpput = () => {
    const [input, setInput] = useState('');

    const handleInputChange = (event) => {
        setInput(event.target.value);   
    };

    return (
        <div>
            <input value={input} onChange={handleInputChange} />
            <button>Get value</button>
        </div>
    );
};

export default UseInpput;