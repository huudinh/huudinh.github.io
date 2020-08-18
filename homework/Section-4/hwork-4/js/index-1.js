console.log('Bài 4.1: ');

setTimeout(()=>{
    
    alert('Hi there, this is dev dictionary');
    let word = prompt('Enter word to search: ');

    for (var x in dictionary) {
        if (word == x) {
            alert(word + '\n' + dictionary[x]);
            break;
        }
    
    }
    if (word != x) {
        alert('We could not find your word: ' + word);
    }

},3000);