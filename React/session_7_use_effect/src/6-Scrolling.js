import { useEffect, useState } from "react";

const Scrolling = () => {
    const [scrollTop, setScrollTop] = useState(0);
    const [count, setCount] = useState(0);

    useEffect(() => {
        console.log('start effect');
        const handleScrolling = () => {
            setScrollTop(document.documentElement.scrollTop);
        }
        document.addEventListener('scroll', handleScrolling);
        return () => {
            // cleanup
            console.log('cleanup');
            document.removeEventListener('scroll', handleScrolling);
        }
    });

    useEffect(() => {
        document.title = `You have click ${count} times`;
    })

    return (
        <div style={{ height:2000 }}>
            Scrolling {scrollTop}<br></br>
            {count}{' '}
            <button
                onClick={()=>{
                    setCount(count + 1);
                }}
            >
                Increase
            </button>
        </div>
    );
};

export default Scrolling;