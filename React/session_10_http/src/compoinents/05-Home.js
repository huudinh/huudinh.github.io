const Home = () => {
    const handleFetchPoke = () => {
        fetch('https://pokeapi.co/api/v2/pokemon/')
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                console.log(data);
            })
    };

    return (
        <div>
            <button onClick={handleFetchPoke}>Fetch Pokemon</button>
        </div>
    );
};

export default Home;