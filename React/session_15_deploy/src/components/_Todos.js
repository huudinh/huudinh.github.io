import { useState, useEffect } from 'react';
import Todo from './Todo';
let id = 0

const Todos = () => {
  const [todos, setTodos] = useState(() => [])
  const [filteredTodos, setFilteredTodos] = useState(() => todos)
  const [addInput, setAddInput] = useState(() => '')
  const [activeFilter, setActiveFilter] = useState(() => 'All')

  const handleAddTodo = (e) => {
    e.preventDefault()
    if (!addInput) return
    const todo = {
      id,
      description: addInput,
      completed: false,
    }
    setTodos(todos.concat(todo))
    setAddInput('')
    id++
  }

  const handleDeleteTodo = (id) => {
    setTodos(todos.filter((t) => t.id !== +id))
  }

  const handleToggleCheck = (id) => {
    const todo = todos.find((todo) => todo.id === +id)
    todo.completed = !todo.completed
    setTodos([...todos])
  }

  const handleClearCompleted = () => {
    setTodos(todos.filter((todo) => todo.completed === false))
  }

  const handleFilterChange = (filter) => {
    setActiveFilter(filter.id)
  }

  useEffect(() => {
    if (activeFilter === 'All') {
      setFilteredTodos(todos)
    } else if (activeFilter === 'Active') {
      setFilteredTodos(todos.filter((t) => t.completed === false))
    } else if (activeFilter === 'Completed') {
      setFilteredTodos(todos.filter((t) => t.completed === true))
    }
  }, [activeFilter, todos])

  return (
    <>
      <h1>todos</h1>
      <section className="todos-container">
        <form onSubmit={handleAddTodo} autoComplete="off">
          <input
            type="text"
            name="add"
            id="add"
            placeholder="What needs to be done?"
            value={addInput}
            onChange={(e) => setAddInput(e.target.value)}
          />
        </form>
        {filteredTodos.map((todo) => {
          return (
            <Todo
              key={todo.id}
              {...todo}
              handleDeleteTodo={handleDeleteTodo}
              handleToggleCheck={handleToggleCheck}
            />
          )
        })}
        <div className="filters-container">
          <div className="remaining">
            {`${todos.filter((t) => t.completed === false).length} todos left`}
          </div>
          <div className="filters-wrapper">
            <button
              id="All"
              className={`filter ${activeFilter === 'All' ? 'active' : ''}`}
              onClick={(e) => handleFilterChange(e.target)}
            >
              All
            </button>
            <button
              id="Active"
              className={`filter ${activeFilter === 'Active' ? 'active' : ''}`}
              onClick={(e) => handleFilterChange(e.target)}
            >
              Active
            </button>
            <button
              id="Completed"
              className={`filter ${
                activeFilter === 'Completed' ? 'active' : ''
              }`}
              onClick={(e) => handleFilterChange(e.target)}
            >
              Completed
            </button>
          </div>
          <div>
            <button className="clear-completed" onClick={handleClearCompleted}>
              Clear completed
            </button>
          </div>
        </div>
      </section>
    </>
  )
}

export default Todos;