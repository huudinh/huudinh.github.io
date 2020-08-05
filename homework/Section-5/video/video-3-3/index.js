console.log('3.3 C4EJSLab - Basic - part 3');
console.log('The above data is good to deal with all of the laptops equally, but when it comes to grouping the items by brand, it should be reshaped as below. Write a program to do the reshaping from inventory, from now, use the reshaped data to process \n\n');

let inventoryByBrand = {}

let dell = [];
let hp = [];
let asus = [];

for (let i = 0; i < inventory.length; i++) {
    if (inventory[i].brand == 'Dell') {
        dell.push(inventory[i]);
    } else if (inventory[i].brand == 'Asus') {
        asus.push(inventory[i]);
    } else if (inventory[i].brand == 'HP') {
        hp.push(inventory[i]);
    }
}

inventoryByBrand.asus = asus;
inventoryByBrand.dell = dell;
inventoryByBrand.hp = hp;

console.log(inventoryByBrand);