console.log('A sequence of numbers, starting from c, ending before n, stepping by 3, c and n entered by user:');
setTimeout(()=>{

    var n = Number(prompt('Ending before n: '));
    var c = Number(prompt('Starting from c: '));
    for(let i = c; i < n; i += 3){
        console.log(i);
    }
    
},3000);
