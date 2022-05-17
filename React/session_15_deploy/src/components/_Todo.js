import { useState, useEffect } from 'react'

const Todo = ({
    id,
    description,
    completed,
    handleDeleteTodo,
    handleToggleCheck,
  }) => {
    const [checked, setChecked] = useState(() => completed)
  
    useEffect(() => {
      setChecked(completed)
    }, [completed])
  
    return (
      <article>
        <div className="description-wrapper">
          <span className="circle" onClick={() => handleToggleCheck(id)}>
            {checked ? <span className="checked"></span> : null}
          </span>
  
          <h4 className={completed ? `completed` : ''}>{description}</h4>
        </div>
        <img
          src={require('./del.png')}
          alt="remove icon"
          className="remove"
          onClick={() => handleDeleteTodo(id)}
        />
      </article>
    )
  }

  export default Todo;