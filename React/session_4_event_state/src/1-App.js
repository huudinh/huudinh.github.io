const App = () => {
	return(
		<div>
			<Counter />
		</div>
	);
};

const Counter = () => {
	
	const onIncreaseClick = () => {
		console.log("Click me");
	}

	const onIncreaseMouseOver = () => {
		console.log('Mouse over');
	}
	
	return <button onClick={onIncreaseClick} onMouseOver={onIncreaseMouseOver}>Click me</button>
}

export default App;
