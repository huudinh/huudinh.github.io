const Ref = () => {
    const handleFocus = () => {
        document.getElementById('myTxt').focus();
    };

    return (
        <div>
            <input type='text' id='myTxt'></input>
            <button onClick={handleFocus}>Focus</button>
        </div>
    );
};

export default Ref;