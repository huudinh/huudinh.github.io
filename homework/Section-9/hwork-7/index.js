async function load() {
    const conn = await fetch('https://tobitheme.net/api/qod.json');
    const data = await conn.json();
    show(data);
}
load();

function show(data){
    let quote = data.contents.quotes[0].quote;
    let author = data.contents.quotes[0].author
    console.log(quote);
    console.log(author);
    const main = document.getElementById('main');
    main.insertAdjacentHTML('beforeend',`
        <p><b>${quote}</b></p>
        <p>${author}</p>
    `);

}


  