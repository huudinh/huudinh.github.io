function App() {
  class Person{
    constructor(name) {
        this.name = name;
    }

    sayHello() {
        console.log(`Hello, my name is ${this.name}`);
    }
  }

  const personA = new Person("Alice");
  const personB = new Person("Bob");

  personA.sayHello();
  personB.sayHello(); 

  return (
    <div>
      Hello world!
    </div>
  );
}

export default App;
