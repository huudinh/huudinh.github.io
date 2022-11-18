import  { useParams } from 'react-router-dom';
import { useEffect, useState } from 'react';
import axios from 'axios';

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
        <div></div>
    );
};

export default PokemonDetail;
// http://localhost:3001/pokemon/pikachu
