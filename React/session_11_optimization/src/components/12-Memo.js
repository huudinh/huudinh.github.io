import { useState } from 'react';

const Memo = () => {
    const [value, setValue] = useState({ name: 'Mindx', age: 20 });

    return (
        <div>
            <Normal name={value.name} age={value.age} />
        </div>
    )
};

const Normal = (props) => {
    return (
        <div>
            Normal: { props.name } { props.age }
        </div>
    );
};

export default Memo;