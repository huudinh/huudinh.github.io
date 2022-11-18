import  { useParams } from 'react-router-dom';
import { useEffect, useState } from 'react';
import axios from 'axios';
// http://localhost:3001/pokemon/pikachu

const PokemonDetail = () => {
    const [pokemon, setPokemon] = useState();
    const params = useParams();

    console.log(pokemon);
     
    useEffect(() => {
        axios
            .get(`https://pokeapi.co/api/v2/pokemon/${params.name}`)
            .then((response) => {
                setPokemon(response.data);
            })
    }, [params.name]);

    return(
        <div>
            {pokemon && (
                <div>
                    <p>Name: {pokemon.name}</p>
                    <p>Image: <img src={pokemon.sprites.front_default} /></p>
                </div>
            )}
        </div>
    );
};

export default PokemonDetail;