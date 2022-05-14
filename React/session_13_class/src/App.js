import { Component } from "react";

class Counter extends Component {
    state = {
        value: 0
    }

    handleClick = () => {
        this.setState({
            value: this.state.value + 1
        });
    };

    render(){
        return (
            <div>
                <span>{this.state.value}</span>
                <button onClick={this.handleClick}>Increase</button>
            </div>
        )
    }
    
}

export default Counter;