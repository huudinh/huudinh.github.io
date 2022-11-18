import { useState } from "react";

const ListItem = (props) => {
    const [done, setDone] = useState(false);

    const handleClick = () => {
        setDone(true);
    };

    if (done) {
        return <div style={{ textDecoration: 'line-through', color: 'red' }}>{props.value}</div>;
    }

    return <div onClick={handleClick}>{props.value}</div>;
};

export default ListItem;