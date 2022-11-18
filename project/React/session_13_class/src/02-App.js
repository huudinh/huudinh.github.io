function App() {
  class Person {
    constructor(name) {
      this.name = name;
    }
    sayHello() {
      console.log(`Hello, my name is ${this.name}`);
    }
  }
  
  class Student extends Person {
    constructor(name, grade) {
      super(name);
      this.grade = grade;
    }
  
    sayHello() {
      super.sayHello();
      console.log("I am grade " + this.grade);
    }
  }
  
  const studentA = new Student("Alice", 10);
  studentA.sayHello();

  return (
    <div>
      Hello world!
    </div>
  );
}

export default App;
