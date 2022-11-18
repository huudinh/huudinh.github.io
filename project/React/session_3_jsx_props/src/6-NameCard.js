import React from 'react';
import './NameCard.css';

const NameCard = (props) => {
    const date = new Date().getDate();
    const dateStye = {
        backgroundColor:'yellow',
        fontSize: 18,
        width: '80%',
    };

    return (
        <div className="name-card">
            <div className="name">Name: {props.name}</div>
            <div className="age">Age: {props.age}</div>
            {props.children}
            <div style={dateStye}>To day is {date}</div>
        </div>
    )
};

export default NameCard;