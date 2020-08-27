console.log('Bài 10: ');

function goalOfTheYear(name, wish) {
    if (wish == undefined) {
        alert("Name: " + name);
    } else {
        alert("Name: " + name + "~~ My goal: " + wish);
    }
}
goalOfTheYear("Manh", "my goal is bla bla...");
goalOfTheYear("Mike");