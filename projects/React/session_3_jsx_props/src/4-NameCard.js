import React from 'react';
import './NameCard.css';

const NameCard = () => {
    const age = Math.floor(Math.random()*30);
    const arr = [1, 2, 3];
    const obj = {address: 'Hanoi'};
    const date = new Date().getDate();
    const dateStye = {
        backgroundColor:'yellow',
        fontSize: 18,
        width: '80%',
    };

    return (
        <div className="name-card">
            <div className="name">Name: Alice</div>
            <div className="age">Age: {age}</div>
            <div>{arr[1]}</div>
            <div>{obj.address}</div>
            <div style={dateStye}>To day is {date}</div>
        </div>
    )
};

export default NameCard;