setTimeout(() => {

    {   
        let seqNumbers = prompt('Enter sequence of Number, separated by space');
        let tempArr = seqNumbers.split(' ');
        let arr = tempArr.map(x => Number(x));

        // simple bubble sort algorithm
        for(let i = 0; i < arr.length - 1; i++) {
            for(let j = 0; j < arr.length - 1 - i; j++) {
                if(arr[j] > arr[j + 1]) {
                    [arr[j], arr[j+1]] = [arr[j+1], arr[j]];
                }
            }
        }

        // arr.sort((a,b) => a - b); quicksort algorithm in library
        alert(arr);

        // filter the array into 2 smaller arrays contain odd or even numbers.
        let oddArr = arr.filter(x => Number(x) % 2 != 0);
        let evenArr = arr.filter(x => Number(x) % 2 == 0);

        // remove duplicate numbers in odd arrays not using temporary array
        let length = oddArr.length;
        for(let i = 1; i < length; ) {
            if(oddArr[i] == oddArr[i - 1]) {
                oddArr.splice(i,1);
                length--;
            }
            else {
                i++;
            }
        }

        // remove all duplicate numbers in even arrays using a temporary array
        let tempEvenArr = [];
        tempEvenArr.push(evenArr[0]);
        for(let i = 1; i < evenArr.length; i++) {
            if(evenArr[i] != evenArr[i - 1]) {
                tempEvenArr.push(evenArr[i]);
            }
        }
        alert(oddArr);
        alert(tempEvenArr)
    }

}, 3000);