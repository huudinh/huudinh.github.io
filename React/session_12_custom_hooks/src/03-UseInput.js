import { useState } from "react";

const UseInpput = () => {
    const [input, setInput] = useState('');

    return (
        <div>
            <input value={input} />
            <button>Get value</button>
        </div>
    );
};

export default UseInpput;