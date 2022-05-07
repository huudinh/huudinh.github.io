import { useState } from 'react';
import axios from 'axios';

const Home = () => {
    const [pokemons, setPokemons] = useState([]);
    const [isLoading, setIsLoading] = useState(false);

    const handleFetchPoke = async () => {
        setIsLoading(true);
        const response = await axios.get('https://pokeapi.co/api/v2/pokemon/');
        setPokemons(response.data.results);
        setIsLoading(false);
    };

    return (
        <div>
            <button onClick={handleFetchPoke}>Fetch Pokemon</button>
            {isLoading && <p>Loading ...</p>}
            <ul>
                {pokemons.map((item) => {
                    return <li key={item.url}>{item.name}</li>;
                })}
            </ul>
        </div>
    );
};

export default Home;