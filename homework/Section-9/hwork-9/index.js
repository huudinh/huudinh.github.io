async function getAPI(type,num) {
    const conn = await fetch(`https://itunes.apple.com/us/rss/${type}/all/limit=${num}/json`);
    const data = await conn.json();
    showData(data.feed);
}


//fnc Main
function showData(data){   
    showTitle(data);
    showList(data);
}

//fnc title
const mainTitle = document.getElementById('main-title');
function showTitle(data){
    let titlePage = data.title.label;
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
        // let more = prod['link'][0].attributes.href;
        product(link,title,author);
    }
}
const mainProd = document.getElementById('main-content');

//fnc prod
function product(link,title,author,more){
    mainProd.insertAdjacentHTML('beforeend',`
        <div class="main-item">
            <div class="main-pic">
                <img src="${link}" alt="${title}"/>
            </div>
            <div class="title">
                <b>${title}</b><br/>
                <span>${author}</span>
                <a href="${more}" target="_blank">Preview</a>
            </div>
        </div>
    `);
}

(()=>{
    //Read Song
    getAPI('topsongs',15);

    //Select More Song
    const showMore = document.getElementById('showMore');
    showMore.addEventListener('change', ()=>{
        mainProd.innerHTML = '';
        mainTitle.innerHTML = '';
        console.log(mainProd);
        let moreProd = showMore.value;
        getAPI('topsongs',moreProd);
    });

    //Select Type
    const showType = document.getElementById('showType');
    showType.addEventListener('change',()=>{
        mainProd.innerHTML = '';
        mainTitle.innerHTML = '';
        let typeProd = showType.value;
        console.log(typeProd);
        getAPI(typeProd,15);
    });
})();


