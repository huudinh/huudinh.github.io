import { useState } from 'react';

const Home = () => {
    const [pokemons, setPokemons] = useState([]);

    const handleFetchPoke = async () => {
        const response = await fetch('https://pokeapi.co/api/v2/pokemon/');
        const data = await response.json();
        console.log(data);
        setPokemons(data.results);
    };

    return (
        <div>
            <button onClick={handleFetchPoke}>Fetch Pokemon</button>
            <ul>
                {pokemons.map((item) => {
                    return <li key={item.url}>{item.name}</li>;
                })}
            </ul>
        </div>
    );
};

export default Home;