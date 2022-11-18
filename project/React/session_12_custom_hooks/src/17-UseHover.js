import { useState, useRef, useEffect } from "react";

const UseHover = () => {
    const [isHover, setHover] = useState(false);
    const elemRef = useRef(null);

    useEffect(() => {
        const node = elemRef.current;
        node.addEventListener('mouseenter', () => {
            setHover(true);
        });
        node.addEventListener('mouseleave', () => {
            setHover(false);
        });
    }, []);

    return(
        <div style={{ width:100, height:100, border:'1px solid black' }} 
            ref={elemRef}
        >
            {isHover ? 'Hovering' : 'Not hovering'}
        </div>
    );
};

export default UseHover;
// view ouput