import { useState, memo } from 'react';

const Memo = () => {
    const [value, setValue] = useState({ name: 'Mindx', age: 20 });

    const updateValue = () => {
        setValue({ ...value });
    };

    return (
        <div>
            <button onClick={updateValue}>Change value</button>
            <Normal name={value.name} age={value.age} />
            <Memoized name={value.name} age={value.age} />
        </div>
    )
};

const Normal = (props) => {
    console.log('Normal, Re-render');
    return (
        <div>
            Normal: { props.name } { props.age }
        </div>
    );
};

const Pure = (props) => {
    // shallow compare
    console.log('Pure, Re-render');
    return (
        <div>
            Pure: { props.name } { props.age }
        </div>
    );
};

const Memoized = memo(Pure);

export default Memo;