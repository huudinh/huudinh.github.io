import { useState, useEffect } from 'react';
import Todo from "./TodoItem";
let id = 0

const Todos = () => {
  const [todos, setTodos] = useState(() => [])
  const [filteredTodos, setFilteredTodos] = useState(() => todos)
  const [addInput, setAddInput] = useState(() => '');

  const handleAddTodo = (event) => {
    event.preventDefault()
    if (!addInput) return;
    const todo = {
      id,
      description: addInput,
      completed: false,
    }
    setTodos(todos.concat(todo))
    setAddInput('')
    id++
  }

  useEffect(() => {
    setFilteredTodos(todos)
  }, [todos]);

  return (
    <>
      <h1>todos</h1>
      <section className="todos-container">
        <form onSubmit={handleAddTodo} >
          <input 
            type="text" 
            name="add" 
            id="add" 
            placeholder="What needs to be done?" 
            value={addInput}
            onChange={(event) => setAddInput(event.target.value)}
          />
        </form>
        {filteredTodos.map((todo) => {
          return (
            <Todo
              key={todo.id}
              {...todo}
            />
          )
        })}
        <div className="filters-container">
          <div className="remaining">
            0 todos left
          </div>
          <div className="filters-wrapper">
            <button id="All" className="filter active">All</button>
            <button id="Active" className="filter">Active</button>
            <button id="Completed" className="filter">Completed</button>
          </div>
          <div>
            <button className="clear-completed">Clear completed</button>
          </div>
        </div>
      </section>
    </>
  )
}

export default Todos;