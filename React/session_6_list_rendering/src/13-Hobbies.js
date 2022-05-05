import { useState } from "react";

const Hobbies = () => {

    const [hobbies, setHobbies] = useState([
        { id: 1, hobbies: 'meo' },
        { id: 2, hobbies: 'piao' },
    ]);

    return(
        <div>
            <h1>Rate your Hobbies</h1>
            <ul>
                {hobbies.map((item, idx) => {
                    return (
                        <li>
                            <span>I </span>
                            <select>
                                <option>like</option>
                                <option>love</option>
                            </select>
                            <span>{item.hobbies}</span>
                        </li>
                    );
                })}
            </ul>
        </div>
    );
};

export default Hobbies;