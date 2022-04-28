import { useEffect } from "react";

const Scrolling = () => {
    useEffect(() => {
        document.addEventListener('scroll', () => {
            console.log(document.documentElement.scrollTop);
        });
    });

    return <div style={{ height:2000 }}>Scrolling</div>;
};

export default Scrolling;