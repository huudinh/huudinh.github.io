import { useState } from "react";

const useInput = () => {
    const [input, setInput] = useState('');

    const handleInputChange = (event) => {
        setInput(event.target.value);
    };

    return {
        value: input, 
        handleChange: handleInputChange
    };
};

export { useInput };

