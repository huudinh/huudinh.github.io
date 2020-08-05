//1.1
let myPromise = new Promise(function (resolve, reject) {
    resolve(setTimeout(() => { console.log("Promise is the best 1") }, 2000));
    // reject(setTimeout(() => {console.log("Promise is the best")},2000));
});
console.log(myPromise);

//1.2
async function f() {

    let promise = new Promise((resolve, reject) => {
        setTimeout(() => resolve("Promise is the best 2"), 1000)
    });

    let result = await promise;

    alert(result);
}

f();


//1.3
let myPromise3 = new Promise(function (resolve, reject) {
    setTimeout(() => reject(new Error("Promise is the best")), 1000);
});

myPromise3.then(
    result => console.log(result),
    error => console.log(error)
);