import { useHover } from "./hooks";

const UseHover = () => {
    const [elemRef, isHover] = useHover();

    return(
        <div style={{ width:100, height:100, border:'1px solid black' }} 
            ref={elemRef}
        >
            {isHover ? 'Hovering' : 'Not hovering'}
        </div>
    );
};

export default UseHover;

// View Output