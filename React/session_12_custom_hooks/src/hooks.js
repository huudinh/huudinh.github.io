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

const useLocalStorage = (name) => {
    const [value, setValue] = useState(0);

    const handleIncrease = () => {
        setValue(value + 1);
    };
    const handleDecrease = () => {
        setValue(value - 1);
    };

    useEffect(() => {
        setValue(Number(localStorage.getItem(name)));
    }, [name]);

    useEffect(() => {
        localStorage.setItem(name, value);
    }, [value, name]);

    return {
        value: value,
        increase: handleIncrease,
        decrease: handleDecrease,
    };
}

const useHistory = (value) => {
    const [currentValue, setCurrentValue] = useState(value);
    const [history, setHistory] = useState([]);

    const undo = () => {
        if(history.length === 0){
            return;
        }
        const last  = history[history.length - 1];
        setCurrentValue(last);
        setHistory((prev) => {
            return prev.filter((item, idx) => {
                return idx < history.length - 1;
            });
        });
    };

    useEffect(() => {
        setHistory((prev) => {
            return [ ...prev, currentValue];
        });
    }, [currentValue]);

    return {
        value: currentValue, 
        setValue: setCurrentValue, 
        undo: undo,
        history: history,
    };
};

export { useInput, useHover, useLocalStorage, useHistory };

