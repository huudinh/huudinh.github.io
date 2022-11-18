import { useState } from "react";

const Counter = () => {
    const [value, setValue] = useState(0);

    const handleClick = () => {
        setValue(value + 1);
    };

    return (
        <div>
            <span>{value}</span>
            <button onClick={ handleClick }>Increase</button>
        </div>
    );
};

export default Counter;