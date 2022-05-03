import {useState} from 'react'

function App(){
	return <div><Counter /></div>;
};

const Counter = () => {
	const countState = useState(0)
	// console.log('countState', countState);

	const count = countState[0]
	const setCount = countState[1]

	const onIncreaseClick = () => {
		setCount(count + 1)
	}	

	return (
		<div>
			<span>{count}</span>
			<button onClick={onIncreaseClick}>Increase</button>
		</div>
	)
}

export default App;