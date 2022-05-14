import { Component } from "react";
// Mounting - constructor()

class Header extends Component {
  constructor(props) {
    super(props);
    this.state = {favoritecolor: "red"};
  }
  render() {
    return (
      <h1>My Favorite Color is {this.state.favoritecolor}</h1>
    );
  }
}

function App(){
	return (
		<Header />
	)
}

export default App;
