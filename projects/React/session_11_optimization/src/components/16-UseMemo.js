import { useState } from "react";

const UseMemo = () => {
    const [items, setItems] = useState([1, 2, 3]);

    return (
        <div>
            <p>{items.join(', ')}</p>
        </div>
    );

};
export default UseMemo;