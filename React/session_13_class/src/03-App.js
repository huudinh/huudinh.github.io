function App() {
  class Person{
    name;
    
    constructor(name) {
        this.name = name;
    }
    sayHello = () => {
        console.log(`Hello, my name is ${this.name}`);
    }
  }
  
  const personA = new Person("Alice");
  personA.sayHello();

  return (
    <div>
      Hello world!
    </div>
  );
}

export default App;
