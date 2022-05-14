import React from "react";

// Provider
const AppContext = React.createContext();

class AppProvider extends React.Component {
  state = {
    number: 10
  };

  render() {
    return (
      <AppContext.Provider value={this.state}>
        {this.props.children}
      </AppContext.Provider>
    );
  }
}

// Components
class Red extends React.Component {
  //static contextType = AppContext;

  render() {
    const value = this.context;

    return <div className="red">{value.number}</div>;
  }
}

Red.contextType = AppContext;

const App = () => (
  <AppProvider>
    <Red />
  </AppProvider>
);

export default App;
