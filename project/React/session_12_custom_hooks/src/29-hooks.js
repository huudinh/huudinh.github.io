import { useState, useRef, useEffect } from "react";

const useInput = () => {
    const [input, setInput] = useState('');

    const handleInputChange = (event) => {
        setInput(event.target.value);
    };

    return {
        value: input,
        handleChange: handleInputChange,
    };
}

const useHover = () => {
    const [isHover, setHover] = useState(false);
    const elemRef = useRef(null);

    useEffect(() => {
        const node = elemRef.current;
        node.addEventListener('mouseenter', () => {
            setHover(true);
        });
        node.addEventListener('mouseleave', () => {
            setHover(false);
        });
    }, []);

    return [elemRef, isHover];
};

const useLocalStorage = () => {
    const [value, setValue] = useState(0);

    useEffect(() => {
        const items = Number(localStorage.getItem('count'));
        if (items) {
            setValue(items);
        }
    }, []);

    useEffect(() => {
        localStorage.setItem('count', value);
    }, [value]);

    return [value, setValue];
}

export { useInput, useHover, useLocalStorage };

