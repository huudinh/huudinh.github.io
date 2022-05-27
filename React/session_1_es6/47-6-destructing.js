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
const { name, age, address, dob } = obj;

const coordinate = [0, 1, 1];
const [x, y, z, alpha] = coordinate;