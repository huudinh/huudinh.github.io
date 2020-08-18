console.log("Bài 6.6");

for (let i = 0; i < task.length; i++) {
    console.log(`[ ] ${i + 1}. ${task[i].name}`);
}

console.log("==================");

task[2].complete = true;

for (let i = 0; i < task.length; i++) {
    if (task[i].complete == true) {
        console.log(`[X] ${i+1}. ${task[i].name}`);
    } else {
        console.log(`[ ] ${i+1}. ${task[i].name}`);
    }
}