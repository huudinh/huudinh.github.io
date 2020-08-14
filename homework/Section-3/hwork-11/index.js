console.log("Bài Tập 11");

setTimeout(()=>{
    
    let numbers = prompt('Enter a squence of numbers');
    
    let oddNumbers = numbers.split(",").filter(num => num % 2 == 1 );
    
    alert(`${numbers} => ${oddNumbers}`); 

},3000);
