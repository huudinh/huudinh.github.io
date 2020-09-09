async function getAPI() {
    const conn = await fetch('https://itunes.apple.com/us/rss/topsongs/all/limit=15/json');
    const data = await conn.json();
    showData(data.feed);
}
getAPI();

//fnc Main
function showData(data){
    showTitle(data);
    showList(data);
}

//fnc title
function showTitle(data){
    let titlePage = data.title.label;
    const mainTitle = document.getElementById('main-title');
    mainTitle.insertAdjacentText('beforeEnd',titlePage);
}

//fnc list
function showList(data){
    let entry = data.entry;
    console.log(entry);
    for(let prod of entry){
        let link = prod['im:image'][2].label;
        let title = prod['im:name'].label;
        let author = prod['im:artist'].label;
        product(link,title,author);
    }
}
const mainProd = document.getElementById('main-content');

//fnc prod
function product(link,title,author){
    mainProd.insertAdjacentHTML('beforeend',`
        <div class="main-item">
            <div class="main-pic">
                <img src="${link}" alt="${title}"/>
            </div>
            <div class="title">
                <b>${title}</b><br/>
                <span>${author}</span>
            </div>
        </div>
    `);
}

//Select song
function songNumber(num){
    const showsong = document.getElementById('number');
    console.log(num);
}
songNumber(10);