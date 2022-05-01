import Header from "./Header";
import Content from "./Content";
import Sidebar from "./Sidebar";
import Footer from "./Footer";
import ThemeContext from "./ThemeContext";

function App() {
  return (
    <ThemeContext.Provider value={{ theme: 'light' }}>
      <div style={{height: '100vh', display: 'flex', flexDirection: 'column'}}>
        <Header />
        <div style={{ display: 'flex', flex: 1, alignItems: 'stretch' }}>
          <Sidebar />
          <Content />
        </div>
        <Footer />
      </div>
    </ThemeContext.Provider>
  );
}

export default App;
