import { useState } from "react";

const UseMemo = () => {
    const [items, setItems] = useState([1, 2, 3]);

    const doubleItems = items.map((item) => item * 2);

    const addToItems = () => {
        setItems([...items, 1]);
    }

    return (
        <div>
            <button onClick={addToItems}>Push</button>
            <p>{items.join(', ')}</p>
            <p>{doubleItems.join(', ')}</p>
        </div>
    );

};
export default UseMemo;