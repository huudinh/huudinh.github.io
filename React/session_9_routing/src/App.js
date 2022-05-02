import { Routes, Route } from 'react-router-dom';
import Home from "./components/Home";
import NavBar from './components/NavBar';
import Products from "./components/Products";
import Welcome from "./components/Welcome";
import Profile, { Courses, About } from './components/Profile';


function App() {
  return (
    <div>
      <header>
        <NavBar />
      </header>
      <Routes>
        <Route path='/' element={<Home />} />
        <Route path='/welcome' element={<Welcome />} />
        <Route path='/products' element={<Products />} />
        <Route path='/profile' element={<Profile />} />
      </Routes>
      <footer>Made by Mindx</footer>
    </div>
  );
}

export default App;
