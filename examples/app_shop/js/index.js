async function load() {
    const conn = await fetch('https://tobitheme.net/api/characters.json');
    const data = await conn.json();
    console.log(data);
}
load();