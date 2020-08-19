console.log('3.2 C4EJSLab - Basic - part 2');
console.log('Create and array to store a list of laptops in inventory, the data is as follow \n\n');

for(let items of inventory){
    for (let x in items) {
        console.log(`- ${x}: ${items[x]}`);
    }
    console.log('---------------------------------------');
}