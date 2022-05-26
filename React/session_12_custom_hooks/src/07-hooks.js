import { useState } from "react";

const useInput = () => {
    const [input, setInput] = useState('');

    return input;
};

export { useInput };

