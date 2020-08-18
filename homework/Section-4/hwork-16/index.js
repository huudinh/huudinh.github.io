console.log("Bài Tập 16");

let oldData = {
    firedRice: {
        Price: 30,
        vnName: 'Com rang dua bo',
    },
    noddle: {
        price: 20,
        vnName: 'My tom chanh',
    },
    pho: {
        price: 35,
        vnName: 'Pho bo tai chin',
    },
};

let newData = {}

for (let item in oldData) {
    if ( (item == 'firedRice') || (item == 'pho') ){
        newData[item] = oldData[item];
    }
}
console.log(newData);

