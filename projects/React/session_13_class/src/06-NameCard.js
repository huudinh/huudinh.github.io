const NameCard = (props) => {
    return (
        <div>
            <div>Name: {props.name}</div>
            <div>Age: {props.age}</div>
        </div>
    );
};

export default NameCard;