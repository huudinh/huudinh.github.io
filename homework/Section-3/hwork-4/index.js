console.log('Bai 4: Clothes shop');
setTimeout(() => {

    let listItem = ["Jeans", "T-shirt", "Socks"];
    let choiceSystem = ["c", "r", "u", "d"];

    while (true) {

        let userChoice = prompt("Hi there, welcome to shop admin panel!, what do you want (C, R, U, D)");

        if (userChoice === null) {
            alert('Goodbye!')
            break;
        }

        if (userChoice == choiceSystem[1]) {

            console.log("The current item are: ");
            for (let i = 0; i < listItem.length; i++) {
                console.log(i + 1 + ". " + listItem[i]);
            }

        } else if (userChoice == choiceSystem[0]) {

            let newItem = prompt("Enter the name of new item");
            lisItem = listItem.push(newItem);
            alert("Done");
            console.log(listItem);

        } else if (userChoice == choiceSystem[2]) {

            let positionItem = prompt("Enter the position you want you want to update \n 1. Jeans \n 2. T-shirt \n 3. Socks");

            let newName = prompt("Enter the new name");

            listItem[positionItem] = newName;
            alert("Done");
            console.log(listItem);

        } else if (userChoice == choiceSystem[3]) {

            let positionDelete = prompt("Enter the position you want to delete \n 1. Jeans \n 2. T-shirt \n 3. Socks");
            listItem.splice(positionDelete, 1);
            alert("Done");
            console.log(listItem);

        } else {
            alert("This command is not supported");
        }
    }

}, 3000);