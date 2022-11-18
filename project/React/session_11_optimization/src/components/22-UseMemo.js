import { useState, useEffect, useMemo } from "react";

const UseMemo = () => {
    const [items, setItems] = useState([1, 2, 3]);
    const [visible, setVisible] = useState(true);

    const doubleItems = items.map((item) => item * 2);

    const memoziedDoubleItems = useMemo(() => {
        return items.map((item) => item * 2);
    }, [items]);

    const addToItems = () => {
        setItems([...items, 1]);
    }

    const changeVisible = () => {
        setVisible(!visible);
    }

    useEffect(() => {
        console.log('doubleItems changed');
    }, [doubleItems]);

    useEffect(() => {
        console.log('memoizedDouble Item Change');
    }, [memoziedDoubleItems]);

    return (
        <div>
            <button onClick={addToItems}>Push</button>
            <button onClick={changeVisible}>Change visible</button>
            {visible && (
                <div>
                    <p>{items.join(', ')}</p>
                    <p>{doubleItems.join(', ')}</p>
                    <p>{memoziedDoubleItems.join(', ')}</p>
                </div>
            )}
            
        </div>
    );

};
export default UseMemo;