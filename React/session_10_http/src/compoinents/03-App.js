import { Routes, Route } from 'react-router-dom';
import Home from './compoinents/Home';

function App() {
  return (
    <div>
      <Routes>
          <Route path='/' element={<Home />} />
      </Routes>
      <footer>Made by Mindx</footer>
    </div>
  );
}

export default App;