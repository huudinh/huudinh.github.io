import { useState, useEffect } from 'react';
import TodoItem from "./TodoItem";
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

  const handleToggleCheck = (id) => {
    const todo = todos.find((todo) => todo.id === id)
    todo.completed = !todo.completed
    setTodos([...todos])
  }

  const handleDeleteTodo = (id) => {
    setTodos(todos.filter((todo) => todo.id !== id))
  }  

  const handleClearCompleted = () => {
    setTodos(todos.filter((todo) => todo.completed === false))
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
            <TodoItem
              key={todo.id}
              {...todo}
              handleToggleCheck={handleToggleCheck}
              handleDeleteTodo={handleDeleteTodo}
            />
          )
        })}
        <div className="filters-container">
          <div className="remaining">
            {`${todos.filter((todo) => todo.completed === false).length} todos left`}
          </div>
          <div className="filters-wrapper">
            <button id="All" className="filter active">All</button>
            <button id="Active" className="filter">Active</button>
            <button id="Completed" className="filter">Completed</button>
          </div>
          <div>
            <button className="clear-completed" onClick={handleClearCompleted}>Clear completed</button>
          </div>
        </div>
      </section>
    </>
  )
}

export default Todos;