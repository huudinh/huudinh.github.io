function calculateFunction(x1, y1, x2, y2) {
    let result = Math.sqrt((x1 - x2) * (x1 - x2) + (y1 - y2) * (y1 - y2))
    return result;
}
const x = calculateFunction(3, 10, 0, 6);
console.log(x);
if (x !== 5) {
    console.log('Failed: the calculation is wrong');
} else {
    console.log('Passed, bravo');
}