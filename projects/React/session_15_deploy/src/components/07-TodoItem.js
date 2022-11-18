const TodoItem = (props) => {
  return (
    <ul>
      <li>
        <div className="description-wrapper">
          <span className="circle">
            <span className="checked"></span>
          </span>
          <h4>{props.description}</h4>
        </div>
        <span className="remove">x</span>
      </li>
    </ul>
  )
}

export default TodoItem;