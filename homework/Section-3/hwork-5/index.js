console.log("Bài Tập 5: Calculate the sum of the numbers");
setTimeout(()=>{

    let sequence = prompt('Enter a sequence of Numbers, separated by commas \(,\)');
    let numbers = sequence.split(",");
    let sum = 0;

    for(let item of numbers){
        sum += Number(item);
    }
    
    alert(`The sum of them is ${sum}`);
    
},3000);