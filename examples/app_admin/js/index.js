//dinh nghia du lieu manufacturer name & category name
var manufacturerList = {
    "Apple": ["Iphone 5", "Iphone 5s", "Iphone 6", "Iphone 12"],
    "Samsung": ["Samsung galaxy 5s", "Samsung galaxy 6"],
    "LG": ["LG01", "LG02"],
    "Sony": ["Sony 01", "Sony 02"],
    "Google": ["GG01", "GG02"]
}

//Hien thi danh sach nsx len tag: manufacturer_name
//xoa cac phan tu trong tag: manufacturer_name
var manufacturerTag = document.getElementById('manufacturer_name');
manufacturerTag.innerHTML = '<option value="">-- Chon --</option>';
for (var key in manufacturerList) {
    manufacturerTag.innerHTML += `<option value="${key}">${key}</option>`
}

// Data Demo
let dataLists = [{
    "product_name": "A",
    "manufacturer_name": "Samsung",
    "category_name": "Samsung galaxy 5s",
    "price": "10",
    "quantity": "25",
    "total_price": "250"
}, {
    "product_name": "b",
    "manufacturer_name": "Samsung",
    "category_name": "",
    "price": "10",
    "quantity": "25",
    "total_price": "250"
}];

let t = localStorage.getItem('dataList');
if (t == null) {
    // console.log('ko ton tai t');
    x = JSON.stringify(dataLists);
    localStorage.setItem('dataList', x);
}


json = localStorage.getItem('dataList');
dataList = JSON.parse(json);
// console.log(dataList);

showData();

function changeManufacturer() {
    // console.log(manufacturerTag.value)
    categoryList = manufacturerList[manufacturerTag.value]
        // console.log(categoryList)
        //Hien thi du lieu ra tag: caregory_name
    categoryTag = document.getElementById('category_name')
    categoryTag.innerHTML = ''

    if (categoryList != null && categoryList.length > 0) {
        //hien thi
        categoryTag.innerHTML = '<option value="">-- Chon --</option>';
        for (var i = 0; i < categoryList.length; i++) {
            categoryTag.innerHTML += `<option value="${categoryList[i]}">${categoryList[i]}</option>`
        }
    }
}

function updateTotalPrice() {
    price = document.getElementById('price').value
    quantity = document.getElementById('quantity').value
    total = price * quantity

    document.getElementById('total_price').value = total
}

function addProduct() {
    product_name = document.getElementById('product_name').value
    manufacturer_name = document.getElementById('manufacturer_name').value
    category_name = document.getElementById('category_name').value
    price = document.getElementById('price').value
    quantity = document.getElementById('quantity').value
    total_price = document.getElementById('total_price').value

    product = {
        'product_name': product_name,
        'manufacturer_name': manufacturer_name,
        'category_name': category_name,
        'price': price,
        'quantity': quantity,
        'total_price': total_price
    }
    console.log(product);
    console.log(currentIndex);
    if (currentIndex >= 0) {
        //update
        dataList[currentIndex] = product
        currentIndex = -1
    } else {
        //them moi
        dataList.push(product)
        json = JSON.stringify(dataList)
        localStorage.setItem('dataList', json)
    }

    showData();

    document.getElementById('reset_btn').click()
}

function showData() {
    var bodytableTag = document.getElementById('bodytable')
    bodytableTag.innerHTML = ''

    for (var i = 0; i < dataList.length; i++) {
        bodytableTag.innerHTML += `<tr>
                                        <td>${i+1}</td>
                                        <td>${dataList[i].product_name}</td>
                                        <td>${dataList[i].manufacturer_name}</td>
                                        <td>${dataList[i].category_name}</td>
                                        <td>${dataList[i].price}</td>
                                        <td>${dataList[i].quantity}</td>
                                        <td>${dataList[i].total_price}</td>
                                        <td><button onclick="editProduct(${i})">Edit</button></td>
                                        <td><button onclick="deleteProduct(${i})">Delete</button></td>
                                    </tr>`
    }

    //luu du lieu vao localStorage
    console.log(dataList)

    //chuyen array -> string
    json = JSON.stringify(dataList)
    localStorage.setItem('dataList', json)
}

var currentIndex = -1

function editProduct(index) {
    currentIndex = index

    product = dataList[index]
    document.getElementById('product_name').value = product.product_name
    document.getElementById('manufacturer_name').value = product.manufacturer_name
        //update select > category name
    changeManufacturer()

    document.getElementById('category_name').value = product.category_name
    document.getElementById('price').value = product.price
    document.getElementById('quantity').value = product.quantity
    document.getElementById('total_price').value = product.total_price
}

function deleteProduct(index) {
    var option = confirm("Ban co chac chan muon xoa san pham nay khong?")
    if (!option) {
        return
    }

    dataList.splice(index, 1)

    showData();
}