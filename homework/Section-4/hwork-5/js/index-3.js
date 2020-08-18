console.log("5.3. ======= Tìm kiếm");

setTimeout(() => {

    let categoryValues = prompt('Enter your category');
    for (let product of products) {
        if (product.category.toLowerCase() == categoryValues.toLowerCase()) {
            console.log("==================");
            console.log("Name: " + product.name);
            console.log("Price: " + product.price);
        }
    }

}, 3000);