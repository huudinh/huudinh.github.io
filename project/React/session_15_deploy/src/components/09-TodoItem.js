const TodoItem = (props) => {

  const handleToggleCheck = () => {
    props.handleToggleCheck(props.id);
  }

  return (
    <ul>
      <li>
        <div className="description-wrapper">
          <span className="circle" onClick={() => handleToggleCheck()}>
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