import {useState} from 'react'

function App(){
	return <div><Counter /></div>;
};

const Counter = () => {
	const [count, setCount] = useState(10)

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