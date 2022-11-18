const ListItem = (props) => {
    const handleClick = () => {
        console.log(props.value);
    };

    return <div onClick={handleClick}>{props.value}</div>;
};

export default ListItem;