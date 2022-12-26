import Login from "./components/Login.js";
import Home from "./components/Home.js";

const app = document.getElementById("root");
const login = new Login();
const home = new Home();

let currentScreen = null;

export const setScreen = (component) => {
    if (currentScreen) {
        app.removeChild(currentScreen);
    }
    currentScreen = app.appendChild(component.render());
};

export const getScreen = () => {
    if (!localStorage.getItem("isLogin")) {
        setScreen(login);
        return;
    } 
    if (localStorage.getItem("isLogin")) {
        setScreen(home);
        return;
    } 
    return;
};