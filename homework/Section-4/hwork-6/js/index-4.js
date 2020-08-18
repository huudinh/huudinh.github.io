console.log("6.4.");
console.log("Hi there,  This is your learning  task to Front-end developer career");
setTimeout(()=>{
    
    let userCommand = prompt("Enter your command ( New, Delete, Update, Complete");
    let index = 0;

    if (userCommand == "new") {

        let newValue = prompt("Enter new task");

        newValue = {
            name: newValue,
            complete: false,
        };

        task.push(newValue);

        
        for (let i = 0; i < task.length; i++) {
            console.log(i + 1 + ". " + task[i].name);
            console.log("   Complete: " + task[i].complete);
        }

    } else if (userCommand == "update") {

        let updateValue = Number(prompt("Enter position: "));
        let newTitles = prompt("Enter new title");
        task[updateValue].name = newTitles;
        
        for (let i = 0; i < task.length; i++) {
            console.log(i + 1 + ". " + task[i].name);
            console.log("   Complete: " + task[i].complete);
        }

    } else if (userCommand == "complete") {

        let updateValue = Number(prompt("Enter position: "));
        task[updateValue].complete = true;

        for (let i = 0; i < task.length; i++) {
            console.log(i + 1 + ". " + task[i].name);
            console.log("   Complete: " + task[i].complete);
        }
        
    } 

},3000);

