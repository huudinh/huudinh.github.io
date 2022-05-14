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
const Red = () => (
  <div className="red">
    <AppContext.Consumer>{context => context.number}</AppContext.Consumer>
  </div>
);

const App = () => (
  <AppProvider>
    <Red />
  </AppProvider>
);

export default App;