import { useState } from "react";

const UseMemo = () => {
    const [items, setItems] = useState([1, 2, 3]);

    const doubleItems = items.map((item) => item * 2);

    return (
        <div>
            <p>{items.join(', ')}</p>
            <p>{doubleItems.join(', ')}</p>
        </div>
    );

};
export default UseMemo;