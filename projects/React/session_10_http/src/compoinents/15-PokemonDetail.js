import  { useParams } from 'react-router-dom';
import { useEffect } from 'react';
import axios from 'axios';

const PokemonDetail = () => {
    const params = useParams();

    useEffect(() => {
        axios
            .get(`https://pokeapi.co/api/v2/pokemon/${params.name}`)
    }, [params.name]);

    return(
        <div></div>
    );
};

export default PokemonDetail;
// http://localhost:3001/pokemon/pikachu
