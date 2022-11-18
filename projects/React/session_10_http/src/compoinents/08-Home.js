import { useState } from 'react';
import axios from 'axios';
// npm install axios

const Home = () => {
    const [pokemons, setPokemons] = useState([]);

    const handleFetchPoke = async () => {
        const response = await axios.get('https://pokeapi.co/api/v2/pokemon/');
        console.log(response);
        setPokemons(response.data.results);
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