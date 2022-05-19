import { useState, useEffect } from "react";

const TodoItem = (props) => {
  const [checked, setChecked] = useState(() => props.completed);

  useEffect(() => {
    setChecked(props.completed);
  }, [props.completed]);

  const handleToggleCheck = () => {
    props.handleToggleCheck(props.id);
  }

  return (
    <ul>
      <li>
        <div className="description-wrapper">
          <span className="circle" onClick={() => handleToggleCheck()}>
            {checked ? <span className="checked"></span> : null}
          </span>
          <h4>{props.description}</h4>
        </div>
        <span className="remove">x</span>
      </li>
    </ul>
  )
}

export default TodoItem;