const TodoItem = () => {
  return (
    <ul>
      <li>
        <div className="description-wrapper">
          <span className="circle">
            <span className="checked"></span>
          </span>
          <h4>HTML</h4>
        </div>
        <span className="remove">x</span>
      </li>
      <li>
        <div className="description-wrapper">
          <span className="circle">
            <span className=""></span>
          </span>
          <h4>JS</h4>
        </div>
        <span className="remove">x</span>
      </li>
    </ul>
  )
}

export default TodoItem;