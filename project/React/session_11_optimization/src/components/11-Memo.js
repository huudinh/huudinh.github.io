import { useState } from 'react';

const Memo = () => {
    const [value, setValue] = useState({ name: 'Mindx', age: 20 });

    const updateValue = () => {
        setValue({ ...value });
    };

    return (
        <div>
            <button onClick={updateValue}>Change value</button>
            <Normal name={value.name} age={value.age} />
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

export default Memo;