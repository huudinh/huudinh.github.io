import { useEffect } from "react";

const Scrolling = () => {
    useEffect(() => {
        console.log('start effect');
        const handleScrolling = () => {
            console.log(document.documentElement.scrollTop);
        };
        document.addEventListener('scroll', handleScrolling);
        return () => {
            // cleanup
            console.log('cleanup');
            document.removeEventListener('scroll', handleScrolling);
        }
    });

    return <div style={{ height:2000 }}>Scrolling</div>;
};

export default Scrolling;