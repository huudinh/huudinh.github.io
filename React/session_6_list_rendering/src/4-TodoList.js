import { useState } from "react";

const TodoList = () => {
    const [todoItem, setTodoItem] = useState(['homework', 'shopping']);

    console.log(todoItem);

    const onAddClick = () => {
        setTodoItem([...todoItem, 'new todo item']);
    };

    const todoItemLi = [];

    todoItem.forEach((item) => {
        todoItemLi.push(<li>{item}</li>);
    });

    return (
        <div>
            <button onClick={onAddClick}>add</button>
            <ul>
                {todoItemLi}
            </ul>
        </div>
    );
};

export default TodoList;