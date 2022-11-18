import { useRef } from 'react';

const Ref = () => {
    const inputRef = useRef(null);

    const handleFocus = () => {
        console.log(document.getElementById('myTxt'));
        console.log(inputRef.current);

        inputRef.current.focus();
    };

    return (
        <div>
            <input type='text' id='myTxt' ref={inputRef}></input>
            <button onClick={handleFocus}>Focus</button>
        </div>
    );
};

export default Ref;