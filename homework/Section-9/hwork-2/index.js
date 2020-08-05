const fetchProm = fetch('https://pokeapi.co/api/v2/pokemon/pikachu/');
fetchProm.then(connect => {
    console.log('connected');
    console.log(connect);
    const data = connect.json();
    console.log(data);
})