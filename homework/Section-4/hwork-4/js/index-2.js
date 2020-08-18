console.log('Bài 4.2: ');

setTimeout(() => {

    alert("Hi there, this is dev dictionary");
    while (true) {
        let userKey = prompt("Enter a keyword");

        if(userKey === null){
            return;
        }

        for (var dicValue in dictionary) {
            if (userKey == dicValue) {
                alert(userKey + "\n" + dictionary[dicValue]);
                break;
            }
        }
        if (userKey != dicValue) {
            let updateValue = prompt(
                "We could not find your word: " + userKey + " leave your explanation"
            );
            alert("Done");
            dictionary[userKey] = updateValue;
        }
    }

}, 3000);