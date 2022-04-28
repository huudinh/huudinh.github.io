import { useEffect } from "react";

const Scrolling = () => {
    useEffect(() => {
        const handleScrolling = () => {
            console.log(document.documentElement.scrollTop);
        }
        document.addEventListener('scroll', handleScrolling);
    });

    return <div style={{ height:2000 }}>Scrolling</div>;
};

export default Scrolling;