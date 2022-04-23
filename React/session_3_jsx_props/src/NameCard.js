// import React from "react";
import './NameCard.css';

const NameCard = (props) => {
    console.log(props);
    const age = Math.floor(Math.random()*30);
    const arr = [1, 2, 3];
    const obj = {address: 'Hanoi'};
    const date = new Date().getDate();
    const dateStye = {
        backgroundColor:'yellow',
        fontSize: 18,
        width: '80%',
    };

    // JSX
    return (
        <div className="name-card">
            <div className="name">Name: {props.name}</div>
            <div className="age">Age: {age}</div>
            {props.children}
            <div>{arr[1]}</div>
            <div>{obj.address}</div>
            <div style={dateStye}>To day is {date}</div>
        </div>
    )

    // return React.createElement('div', { className: 'name-card' }, [
    //     React.createElement('div', { className: 'name' }, 'Name: Alice'),
    //     // React.createElement('div', { className: 'age' }, 'Age: ' + age)
    //     React.createElement('div', { className: 'age' }, 
    //         React.createElement('p', {}, 
    //             React.createElement('span', {}, 'Age: ' + age)
    //         )
    //     )
    // ]);
};

export default NameCard;