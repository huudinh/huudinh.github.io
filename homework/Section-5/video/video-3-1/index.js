console.log('3.1 C4EJSLab - Basic - part 1');
console.log('Write a program to count the occurrences of the words \n\n');

let wordArr = [];
for (let i = 0; i < word.length; i++) {
    wordArr.push(word[i]);
}
// console.log(wordArr);

for (let i = 0; i < wordArr.length; i++) {
    let count = 0;

    for (let x = 0; x < word.length; x++) {
        if (word[x] == wordArr[i]) {
            count++;
        }
    }
    console.log(wordArr[i] + ': ' + count);
}