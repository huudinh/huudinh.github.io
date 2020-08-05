console.log('3.4 C4EJSLab - Basic - part 4');
console.log('From inventoryByBrand, write a program to count the generations of a certain brand in the inventory \n\n');

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

let brand = prompt('which brand');
let brandList = inventoryByBrand[brand.toLocaleLowerCase()];

alert(`there are ${brandList.length} generation of '${brand.toUpperCase()}' in inventory `)