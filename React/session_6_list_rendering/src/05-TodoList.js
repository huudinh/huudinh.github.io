import { useState } from "react";

const TodoList = () => {
    const [todoItems, setTodoItems] = useState(['homework', 'shopping']);

    console.log(todoItems);

    const onAddClick = () => {
        setTodoItems([...todoItems, 'new todo item']);
    };

    return (
        <div>
            <button onClick={onAddClick}>add</button>
            <ul>{[<li>{todoItems[0]}</li>, <li>{todoItems[1]}</li>]}</ul>
        </div>
    );
};

export default TodoList;