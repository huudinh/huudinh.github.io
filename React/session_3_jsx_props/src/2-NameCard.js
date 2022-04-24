import React from 'react';
import './NameCard.css';

const NameCard = () => {
    // return (
    //     <div className="name-card">
    //         <div className="name">Name: Alice</div>
    //         <div className="age">Age: 20</div>
    //     </div>
    // )

    return React.createElement('div', { className: 'name-card' }, [
        React.createElement('div', { className: 'name' }, 'Name: Alice'),
        // React.createElement('div', { className: 'age' }, 'Age: 20')
        React.createElement('div', { className: 'age' }, 
            React.createElement('p', {}, 
                React.createElement('span', {}, 'Age: 20')
            )
        )
    ]);
};

export default NameCard;