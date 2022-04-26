import { useState } from "react";

const TodoList = () => {
    const [todoItem, setTodoItem] = useState(['homework', 'shopping']);

    console.log(todoItem);

    const onAddClick = () => {
        setTodoItem([...todoItem, 'new todo item']);
    };

    return (
        <div>
            <button onClick={onAddClick}>add</button>
            <ul>
                {todoItem.map((item, idx)=>{
                    return <li key={idx}>{item}</li>
                })}
            </ul>
        </div>
    );
};

export default TodoList;