import { useState } from "react";

const UseHover = () => {
    const [isHover, setHover] = useState(false);

    const handleMouseEnter = () => {
        setHover(true);
    };

    const handleMouseLeave = () => {
        setHover(false);
    };

    return(
        <div style={{ width:100, height:100, border:'1px solid black' }} 
            onMouseEnter={handleMouseEnter}
            onMouseLeave={handleMouseLeave}
        >
            {isHover ? 'Hovering' : 'Not hovering'}
        </div>
    );
};

export default UseHover;