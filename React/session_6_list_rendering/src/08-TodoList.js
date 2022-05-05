import { useState } from "react";

const TodoList = () => {
    const [todoItems, setTodoItems] = useState(['homework', 'shopping']);

    console.log(todoItems);

    const onAddClick = () => {
        setTodoItems([...todoItems, 'new todo item']);
    };

    const todoItemLi = todoItems.map((item)=>{
        return <li>{item}</li>
    });

    return (
        <div>
            <button onClick={onAddClick}>add</button>
            <ul>{todoItemLi}</ul>
        </div>
    );
};

export default TodoList;