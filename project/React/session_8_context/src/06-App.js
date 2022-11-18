import Header from "./Header";
import Content from "./Content";
import Sidebar from "./Sidebar";
import Footer from "./Footer";

function App() {
  return (
    <div style={{height: '100vh', display: 'flex', flexDirection: 'column'}}>
      <Header />
      <div>
        <Sidebar />
        <Content />
      </div>
      <Footer />
    </div>
  );
}

export default App;
