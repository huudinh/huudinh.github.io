import {useState} from 'react'

const App = () => {
	return (
		<div>
			<Counter />
		</div>
	);
};

const Counter = () => {
	const countState = useState(10)
	const count = countState[0]
	const setCount = countState[1]
	// const [count, setCount] = useState(10)


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