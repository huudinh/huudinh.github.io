import { Route } from 'react-router-dom';
import Home from "./components/Home";
import Products from "./components/Products";
import Welcome from "./components/Welcome";


function App() {
  return (
    <div>
      <Route path='/' element={<Home />} />
      <Route path='/welcome' element={<Welcome />} />
      <Route path='/products' element={<Products />} />
    </div>
  );
}

export default App;
