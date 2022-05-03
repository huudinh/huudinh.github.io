import {useState} from 'react'

function App(){
	return <div><Person /></div>;
};

const Person = () => {
	const [person, setPerson] = useState({name: "MindX", age: 10});

	return (
		<div>
			<p>Hello! I'm {person.name}. I'm {person.age} years old.</p>
		</div>
	)	
}

export default App;