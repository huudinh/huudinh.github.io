import { Routes, Route } from 'react-router-dom';
import Home from "./components/Home";
import Products from "./components/Products";
import Welcome from "./components/Welcome";
import NavBar from './components/NavBar';


function App() {
  return (
    <div>
      <header>
        <NavBar />
      </header>
      <hr/>
      <Routes>
        <Route path='/' element={<Home />} />
        <Route path='/welcome' element={<Welcome />} />
        <Route path='/products' element={<Products />} />
      </Routes>
      <footer>Made by Mindx</footer>
    </div>
  );
}

export default App;
