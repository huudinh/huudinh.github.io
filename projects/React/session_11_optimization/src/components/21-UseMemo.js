import { useState, useEffect } from "react";

const UseMemo = () => {
    const [items, setItems] = useState([1, 2, 3]);
    const [visible, setVisible] = useState(true);

    const doubleItems = items.map((item) => item * 2);

    const addToItems = () => {
        setItems([...items, 1]);
    }

    const changeVisible = () => {
        setVisible(!visible);
    }

    useEffect(() => {
        console.log('doubleItems changed');
    }, [doubleItems]);

    return (
        <div>
            <button onClick={addToItems}>Push</button>
            <button onClick={changeVisible}>Change visible</button>
            {visible && (
                <div>
                    <p>{items.join(', ')}</p>
                    <p>{doubleItems.join(', ')}</p>
                </div>
            )}
            
        </div>
    );

};
export default UseMemo;