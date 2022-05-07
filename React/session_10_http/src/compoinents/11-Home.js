import { useState } from 'react';
import axios from 'axios';

const Home = () => {
    const [pokemons, setPokemons] = useState([]);
    const [isLoading, setIsLoading] = useState(false);
    const [error, setError] = useState(null);

    const handleFetchPoke = async () => {
        try {
            setIsLoading(true);
            const response = await axios.get('https://pokeapi.co/api/v2/pokemon/');
            setPokemons(response.data.results);
            setIsLoading(false);
        } catch (err) {
            setError(err);
            setIsLoading(false);
        }
    };

    return (
        <div>
            <button onClick={handleFetchPoke}>Fetch Pokemon</button>
            {isLoading && <p>Loading ...</p>}
            {!isLoading && error && <p>Something went wrong</p>}
            {!isLoading && !error && pokemons.length > 0 && (
                <ul>
                    {pokemons.map((item) => {
                        return <li key={item.url}>{item.name}</li>;
                    })}
                </ul>
            )}
            {!isLoading &&  !error && pokemons.length === 0 && <p>No data</p>}
        </div>
    );
};

export default Home;