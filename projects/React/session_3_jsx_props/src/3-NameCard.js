import React from 'react';
import './NameCard.css';

const NameCard = () => {
    // const age = 20;
    const age = Math.floor(Math.random()*30);
    const arr = [1, 2, 3];
    const obj = {address: 'Hanoi'};
    const date = new Date().getDate();
    return (
        <div className="name-card">
            <div className="name">Name: Alice</div>
            <div className="age">Age: {age}</div>
            <div>{arr[1]}</div>
            <div>{obj.address}</div>
            <div>To day is {date}</div>
        </div>
    )
};

export default NameCard;