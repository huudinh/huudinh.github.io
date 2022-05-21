import Todo from "./TodoItem";

const Todos = () => {
  return (
    <>
      <h1>todos</h1>
      <section className="todos-container">
        <form>
          <input type="text" name="add" id="add" placeholder="What needs to be done?" />
        </form>
        <Todo />
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