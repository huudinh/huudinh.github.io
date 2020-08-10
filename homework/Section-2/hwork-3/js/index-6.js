console.log('A sequence of numbers, starting from c, ending before n, stepping by s. c, n and  s entered by use:')

setTimeout(()=>{

    var n = Number(prompt('Ending before n: '));
    var c = Number(prompt('Starting from c: '));
    var s = Number(prompt('Stepping by s:'));
    do {
        console.log(c);
        c += s;
    } while (c < n);
    
},3000);