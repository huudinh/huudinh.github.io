import { useState } from 'react'

function App(){
	return <div><Person /></div>;
};

const Person = () => {
	const [person, setPerson] = useState({ name: 'Mindx', age: 7 });
  
	const onIncreaseAge = () => {
	  setPerson({ ...person, age: person.age + 1 });
	};
  
	const onDecreaseAge = () => {
	  setPerson((prev) => {
		if(prev.age === 0){ return prev; }
		return { ...prev, age: prev.age - 1 };
	  });
	}
  
	return (
	  <div>
		<p>Hello, Myname is {person.name}. I'm {person.age} year old</p>
		<button onClick={onIncreaseAge}>Increase Age</button>
		<button onClick={onDecreaseAge}>Decrease Age</button>
	  </div>
	);
};

export default App;