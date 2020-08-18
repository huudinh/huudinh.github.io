console.log("5.4. ======= Thêm provider vào các sản phẩm");

products[0].providers = ["Phukienzero", "Dientuccc"];
products[1].providers = ["Tgdd", "Ddghn", "VhStore"];
products[2].providers = ["Tgdd"];
products[3].providers = ["Tgdd"];

let index = 1;

for (let productValue of products) {
    console.log(`#${index++}. ${productValue.name}`);
    console.log("    Price: " + productValue.price);
    console.log("    Provider: " + productValue.providers);
}