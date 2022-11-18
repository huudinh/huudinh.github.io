import { useState } from "react";

function App(){
	return <div><Counter /></div>;
};

const Counter = () => {
	
	let count = 0;
	const countState = useState(0);

	console.log('countState', countState)

	const onIncreaseClick = () => {
		count = count + 1;
		console.log("count: ", count)
	}

	return (
		<div>
			<span>{count}</span>
			<button onClick={onIncreaseClick}>Increase</button>
		</div>
	)
}

export default App;