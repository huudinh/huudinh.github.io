console.log('3.1 C4EJSLab - Basic - part 1');
console.log('Write a program to count the occurrences of the words \n\n');

console.log('Cách 1: Tư duy thông thường');
{

    let arr = [];
    for (let i = 0; i < word.length; i++) {
        arr.push(word[i]);
    }

    for (let i = 0; i < arr.length; i++) {
        let count = 0;

        for (let x = 0; x < word.length; x++) {
            if (word[x] == arr[i]) {
                count++;
            }
        }
        console.log(arr[i] + ': ' + count);
    }

}
///////////////////////////////////////////////////////////////////
console.log('Cách 2: Dùng Object');
{

    let count = {};
    for(let i = 0; i < word.length; i++){
        let c = word[i];
        if(!count[c]){
            count[c] = 1;
        } else {
            count[c]++;
        }
    }
    console.log(count);

}
///////////////////////////////////////////////////////////////////
console.log('Cách 3: Dùng Array');
{

    let count = [];
    for(let i = 0; i < word.length; i++){
        let c = word[i];
        if(!count[c]){
            count[c] = 1;
        } else {
            count[c]++;
        }
    }
    console.log(count);

}
///////////////////////////////////////////////////////////////////
console.log('Cách 4: Foreach Object');
{

    let count = {};
    word.forEach((x) => {count[x] = (count[x] || 0) + 1;});
    console.log(count);

}