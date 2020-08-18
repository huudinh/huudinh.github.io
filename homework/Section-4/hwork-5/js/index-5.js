console.log('5.5. (Optional) Search the products based on the wanted provider entered by users, if you need more directions, find the hints at the end of this homework');

products[0].providers = ["Phukienzero", "Dientuccc"];
products[1].providers = ["Tgdd", "Ddghn", "VhStore"];
products[2].providers = ["Tgdd"];
products[3].providers = ["Tgdd"];


setTimeout(() => {

    let searchArr = [];
    let searchString = prompt('Enter providers to search: ');

    for (let i = 0; i < products.length; i++) {
        for (let x = 0; x < products[i].providers.length; x++) {
            if (products[i].providers[x].toLowerCase() == searchString.toLowerCase()) {
                searchArr.push(products[i]);
            }
        }
        // if(products[i].providers.indexOf(searchString) != -1)
        // {
        //     searchArr.push(products[i]);
        // }
    }

    for (let i = 0; i < searchArr.length; i++) {
        console.log('--------------------------------------');
        console.log('Name: ' + searchArr[i].name);
        console.log('Brand: ' + searchArr[i].brand);
        console.log('Price: ' + searchArr[i].price);
        console.log('Color: ' + searchArr[i].color);
        console.log('Category: ' + searchArr[i].category);
        console.log('Providers: ' + searchArr[i].providers);
    }

}, 3000);