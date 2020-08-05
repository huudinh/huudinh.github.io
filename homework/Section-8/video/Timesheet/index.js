const table_body = document.getElementById('body');
const new_project = document.getElementById('new_project');
const new_task = document.getElementById('new_task');
const new_time = document.getElementById('new_time');
const add_btn = document.getElementById('add_btn');
const clear_btn = document.getElementById('clear_btn');

let update_num = 0;
let update_state = false;

console.log(table_body);

function update_table() {

    table_body.innerHTML = '';

    for (let data of timeSheetData) {
        table_body.insertAdjacentHTML('beforeend', `<tr><td>${data.project}</td><td>${data.task}</td><td>${data.time_spent}</td><td><button class="remove_btn">X</button><button class="update_btn">U</button></td></tr>`);
    };

    const remove_btns = document.getElementsByClassName('remove_btn');
    const update_btns = document.getElementsByClassName('update_btn');

    for (let i = 0; i < remove_btns.length; i++) {
        remove_btns[i].addEventListener('click', () => {
            timeSheetData.splice(i, 1);
            update_table();
        });
    };
    
    for (let i = 0; i < update_btns.length; i++) {
        update_btns[i].addEventListener('click', () => {
            update_state = true;
            update_num = i;
            new_project.value = timeSheetData[i].project;
            new_task.value = timeSheetData[i].task;
            new_time.value = timeSheetData[i].time_spent;
        });
    };
};

update_table();

add_btn.addEventListener('click', () => {
    if (new_project.value == '' || new_task.value == '' || new_time.value == '') {
        alert('dont leave stuff blank')
    } else if (update_state) {
        timeSheetData[update_num] = { project: new_project.value, task: new_task.value, time_spent: new_time.value };
        update_state = false;
        console.log(timeSheetData);
        update_table();
        new_project.value = '';
        new_task.value = '';
        new_time.value = '';
    } else {
        timeSheetData.push({ project: new_project.value, task: new_task.value, time_spent: new_time.value });
        console.log(timeSheetData);
        update_table();
        new_project.value = '';
        new_task.value = '';
        new_time.value = '';
    };
});
clear_btn.addEventListener('click', () => {
    new_project.value = '';
    new_task.value = '';
    new_time.value = '';
    update_state = false;
})