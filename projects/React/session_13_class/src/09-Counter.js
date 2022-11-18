import { useState } from "react";

const Counter = () => {
    const [value, setValue] = useState(0);

    return (
        <div>
            <span>{value}</span>
            <button>Increase</button>
        </div>
    );
};

export default Counter;