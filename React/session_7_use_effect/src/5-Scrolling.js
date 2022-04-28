import { useEffect, useState } from "react";

const Scrolling = () => {
    const [scrollTop, setScrollTop] = useState(0);
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

    return <div style={{ height:2000 }}>Scrolling {scrollTop}</div>;
};

export default Scrolling;