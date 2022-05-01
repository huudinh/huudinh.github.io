import Header from "./Header";
import Content from "./Content";
import Sidebar from "./Sidebar";
import Footer from "./Footer";

function App() {
  return (
    <div>
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
