console.log("5.2. ======= In sản phẩm theo index nhập");
setTimeout(() => {

    let positionProduct = Number(prompt("Enter product position"));
    positionProduct = positionProduct - 1;
    for (let i = 0; i < products.length; i++) {
        if (positionProduct == i) {
            console.log("Name: " + products[i].name);
            console.log("Brand: " + products[i].brand);
            console.log("Price: " + products[i].price);
            console.log("Color:  " + products[i].color);
            console.log("Category: " + products[i].category);
            console.log("-----------------------------------");
        }
    }

}, 3000);