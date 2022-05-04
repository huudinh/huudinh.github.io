const ListItem = (props) => {
    const handleClick = () => {};

    const done = props.done;

    if (done) {
        return <div style={{ textDecoration: 'line-through', color: 'red' }}>
            {props.value}
        </div>;
    }

    return <div onClick={handleClick}>{props.value}</div>;
};

export default ListItem;