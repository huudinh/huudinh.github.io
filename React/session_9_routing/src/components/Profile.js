import { NavLink } from "react-router-dom";

const Profile = () => {
    return (
        <div>
            <h1>Profile</h1>
            <ul>
                <li>
                    <NavLink to='/aboutme'>About</NavLink>
                </li>
                <li>
                    <NavLink to='/courses'>Courses</NavLink>
                </li>
            </ul>
        </div>
    );
};

const About = () => {
    return (
        <h1>About</h1>
    )
}

const Courses = () => {
    return (
        <h1>Courses</h1>
    )
}

export { About, Courses };

export default Profile;