import { useRef, useState } from 'react';

const Ref = () => {
    const inputRef = useRef(null);

    let count = 0;
    const [countState, setCountState] = useState(0);
    const countRef = useRef(0);

    const handleFocus = () => {
        console.log(document.getElementById('myTxt'));
        console.log(inputRef.current);

        inputRef.current.focus();
    };

    console.log('count', count);
    console.log('countState', countState);
    console.log('countRef', countRef.current);

    const increaseCount = () => {
        count++;
        console.log(count);
    };

    const increaseCountState = () => {
        setCountState(countState + 1);
    };

    const increaseCountRef = () => {
        countRef.current++;
        console.log(countRef.current);
    }

    return (
        <div>
            <input type='text' id='myTxt' ref={inputRef}></input>
            <button onClick={handleFocus}>Focus</button>

            <div>
                <button onClick={increaseCount}>Increase count</button>
                <button onClick={increaseCountState}>Increase count State</button>
                <button onClick={increaseCountRef}>Increase count Ref</button>
                <div>Count: {count}</div>
                <div>CountSate: {countState}</div>
                <div>CountReft: {countRef.current}</div>
            </div>
        </div>
    );
};

export default Ref;