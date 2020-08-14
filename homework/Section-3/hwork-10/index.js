console.log("Bài Tập 10");
setTimeout(() => {

    let names = prompt('Enter a sequence of names');

    let changedName = names.split(",").map((name) => {
        return `<${name}>`;
    });

    alert(`${names} => ${changedName}`);

}, 3000);