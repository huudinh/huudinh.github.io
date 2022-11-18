import { useState, useEffect } from "react";

const TodoItem = (props) => {
  const [checked, setChecked] = useState(() => props.completed);

  useEffect(() => {
    setChecked(props.completed);
  }, [props.completed]);

  return (
    <ul>
      <li>
        <div className="description-wrapper">
          <span className="circle" onClick={() => props.handleToggleCheck(props.id)}>
            {checked ? <span className="checked"></span> : null}
          </span>
          <h4 className={props.completed ? `completed` : ''}>{props.description}</h4>
        </div>
        <span className="remove" onClick={() => props.handleDeleteTodo(props.id)}>x</span>
      </li>
    </ul>
  )
}

export default TodoItem;