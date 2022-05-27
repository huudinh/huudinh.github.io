console.log('array function');

// map
const mapArr = [1, 2, 3];

const mapArr2 = mapArr.map((item) => {
    return item * 2;
});

console.log(mapArr, mapArr2);

// filter
const filterArr = [1, 2, 3, 4, 5, 6];
const filterArr2 = filterArr.filter((item) => {
    return false;
});

console.log(filterArr2);