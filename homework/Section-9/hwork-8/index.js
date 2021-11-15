
async function getAPI() {
    const conn = await fetch('https://sheetdb.io/api/v1/0bw1giza56c1j?sheet=sheet2');
    const data = await conn.json();
    console.log(data);
    let prods = [];
    for (let item of data) {
        prods.push(item.name);
    }
    console.log(prods);
    update_list(prods);
}

async function searchAPI(name) {
    const conn = await fetch(`https://sheetdb.io/api/v1/0bw1giza56c1j/search?name=${name}&sheet=sheet2`);
    const data = await conn.json();
    let prods = [];
    for (let item of data) {
        prods.push(item.name);
    }
    console.log(prods);
    update_list(prods);
}
// searchAPI('Mobel');
getAPI();

function postAPI(name) {
    id = makeid(5);
    axios.post('https://sheetdb.io/api/v1/0bw1giza56c1j?sheet=sheet2', {
        "data": { "id": id, "name": name }
    }).then(response => {
        console.log(response.data);
        getAPI();
    });
}

function delAPI(name) {
    axios.delete(`https://sheetdb.io/api/v1/0bw1giza56c1j/name/${name}?sheet=sheet2`)
        .then(response => {
            console.log(response.data);
            getAPI();
        });    
}

function makeid(length) {
    var result = '';
    var characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}

const list = document.getElementById('item_list');

// function để cập nhật trang html theo danh sách items
function update_list(items) {
    list.innerHTML = '';
    for (let i = 0; i < items.length; i++) {
        list.insertAdjacentHTML("beforeend", `<li><span>${items[i]} </span><button class="remove_btns">x</button></li>`);
    };

    // gắn thêm eventlistener vào từng item
    const remove_btns = document.getElementsByClassName('remove_btns');
    for (let i = 0; i < remove_btns.length; i++) {
        remove_btns[i].addEventListener('click', () => {
            delAPI(items[i]);
        });
    };
}

// phần thêm vào list
const add_btn = document.getElementById('add_btn');
const item_input = document.getElementById('item_input');

add_btn.addEventListener('click', () => {
    let new_item = item_input.value;
    // kiểm tra nếu người dùng để trống thì ko cho vào list
    if (new_item == '') {
        alert('pls dont leave it blank');
    } else {
        postAPI(new_item)        
        item_input.value = '';
    };
});

item_input.addEventListener('keydown', (e) => {
    let new_item = item_input.value;
    if (new_item == '') {
        console.log('pls dont leave it blank');
    } else {
        let word = item_input.value;
        searchAPI(word);
    };
});