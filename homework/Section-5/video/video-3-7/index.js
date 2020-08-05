console.log('3.6 C4EJSLab - Basic - part 5');
console.log('Add more++ details in the statistics (30000 + 9300 * 12 + 8600 * 2 => 158800) \n\n');

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

let extend = '';
let total = 0;

for (let i = 0; i < brandList.length; i++) {
    extend += brandList[i].name + '\n';
    total += brandList[i].price * brandList[i].quantity;
};
total *= 1000;
alert(`there are ${brandList.length} generation of '${brand.toUpperCase()}' in inventory :\n\n${extend} \nWith total value: ${total.toLocaleString('vi', {style : 'currency', currency : 'VND'})}`)