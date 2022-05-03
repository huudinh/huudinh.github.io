function App(){
	return <div><Counter /></div>;
};

const Counter = () => {
	
	const onIncreaseClick = () => {
		console.log("Click me");
	}

	const onIncreaseMouseOver = () => {
		console.log('Mouse over');
	}
	
	return (
		<div>
			<span>0</span>
			<button onClick={onIncreaseClick} onMouseOver={onIncreaseMouseOver}>Click me</button>
		</div>
	);
}

export default App;
