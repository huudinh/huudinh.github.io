import { NavLink } from "react-router-dom";

const activeClass = (params) => {
    return params.isActive ? 'active-menu-item' : '';
};

const NavBar = () => {
    return (
        <ul>
            <li>
                <NavLink className={activeClass} to="/">Home</NavLink>
            </li>
            <li>
                <NavLink className={activeClass} to="/welcome">Welcome</NavLink>
            </li>
            <li>
                <NavLink className={activeClass} to="/products">Products</NavLink>
            </li>
        </ul>
    );
};

export default NavBar;