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
                {[<li>{todoItem[0]}</li>,<li>{todoItem[1]}</li>]}
            </ul>
        </div>
    );
};

export default TodoList;