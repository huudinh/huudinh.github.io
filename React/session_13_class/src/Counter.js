import { Component } from "react";

class Counter extends Component {
    state = {
        value: 0
    }
    render(){
        return (
            <div>
                <span>{this.state.value}</span>
                <button>Increase</button>
            </div>
        )
    }
    
}

export default Counter;