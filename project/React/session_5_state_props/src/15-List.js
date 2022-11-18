import { useState } from "react";
import ListItem from "./ListItem";

const List = () => {
    const [task1, setTask1] = useState({value: 'Home Work', done: false});
    const [task2, setTask2] = useState({value: 'Buy milk', done: false});

    const setDoneTask1 = () => {
        setTask1({
            ...task1,
            done:true,
        });
    };

    const setDoneTask2 = () => {
        setTask2({
            ...task2,
            done:true,
        });
    };

    return (
        <div>
            <ListItem value={task1.value} done={task1.done} onClick={setDoneTask1} />
            <ListItem value={task2.value} done={task2.done} onClick={setDoneTask2} />
            <div>Total done: 2</div>
        </div>
    );
}

export default List;