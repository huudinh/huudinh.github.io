import { useState } from "react";

const TodoList = () => {
    const [todoItems, setTodoItems] = useState(['homework', 'shopping']);

    return (
        <div>
            <button>add</button>
            <ul>
                <li>{todoItems[0]}</li>
                <li>{todoItems[1]}</li>
            </ul>
        </div>
    );
};

export default TodoList;