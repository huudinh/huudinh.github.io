import { Link, useNavigate } from "react-router-dom";

const Home = () => {
    const navigate = useNavigate();
    const handleLoginClick = () => {
        navigate('/welcome');
    };

    return (
        <div>
            <h1>Home</h1>
            <button onClick={handleLoginClick}>Login</button>
            <br />
            <Link to="/products">View Products</Link>
        </div>
    );
};

export default Home;