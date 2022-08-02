console.log('destructing');

const obj = { 
    name: 'Mindx', 
    age: 20, 
    address: {
        city: 'Hanoi',
        street: 'Nguyen Chi Thanh',
    }
};
// const name = obj.name;
// const age = obj.age;
// const address = obj.address;
// console.log(name, age, address);

// ---------------------------------------------

const { name, age, address, dob } = obj;
// console.log(name, age, address);

const coordinate = [0, 1, 1];
const [x, y, z, alpha] = coordinate;
// console.log(x, y, z, alpha);