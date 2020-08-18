console.log("6.2.");
console.log("Hi there,  This is your learning  task to Front-end developer career");
setTimeout(()=>{
    
    let userCommand = prompt("Enter your command ( New, Delete, Update, Complete");

    if (userCommand == "new") {

        let newValue = prompt("Enter new task");

        let newValues = {
            name: newValue,
            complete: false,
        };

        task.push(newValues);

        let index = 0;

        for (let i = 0; i < task.length; i++) {
            console.log(i + 1 + ". " + task[i].name);
            console.log("   Complete: " + task[i].complete);
        }

    } 

},3000);

