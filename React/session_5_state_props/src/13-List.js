import { useState } from "react";
import ListItem from "./ListItem";

const List = () => {
    const [task1, setTask1] = useState({value: 'Home Work', done: false});
    const [task2, setTask2] = useState({value: 'Buy milk', done: false});

    return (
        <div>
            <ListItem value={task1.value} done={task1.done} />
            <ListItem value={task2.value} done={task2.done} />
            <div>Total done: 2</div>
        </div>
    );
}

export default List;