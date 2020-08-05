
    // Get all data
    axios.get('https://sheetdb.io/api/v1/58f61be4dda40')
    .then( response => {
        console.log(response.data);
    });

    // Get 10 results starting from 20
    axios.get('https://sheetdb.io/api/v1/58f61be4dda40?limit=10&offset=20')
    .then( response => {
        console.log(response.data);
    });

    // Get all data sorted by name in ascending order
    axios.get('https://sheetdb.io/api/v1/58f61be4dda40?sort_by=name&sort_order=asc')
    .then( response => {
        console.log(response.data);
    });

    axios.get('https://sheetdb.io/api/v1/58f61be4dda40/keys')
    .then( response => {
        console.log(response.data);
    });

    axios.get('https://sheetdb.io/api/v1/58f61be4dda40/name')
    .then( response => {
        console.log(response.data);
    });

    axios.get('https://sheetdb.io/api/v1/58f61be4dda40/sheets')
    .then( response => {
        console.log(response.data);
    });

    axios.get('https://sheetdb.io/api/v1/58f61be4dda40/count')
    .then( response => {
        console.log(response.data);
    });

    axios.get('https://sheetdb.io/api/v1/58f61be4dda40/search?name=Steve&age=22&casesensitive=true')
    .then( response => {
        console.log(response.data);
    });

    axios.get('https://sheetdb.io/api/v1/58f61be4dda40/search_or?name=Steve&age=19&casesensitive=true')
    .then( response => {
        console.log(response.data);
    });

    axios.post('https://sheetdb.io/api/v1/58f61be4dda40',{
        "data": {"name": "Scott", "age": 25}
    }).then( response => {
        console.log(response.data);
    });

    axios.patch('https://sheetdb.io/api/v1/58f61be4dda40/id/61',{
        "data": {"name": "Scott", "age": 25}
    }).then( response => {
        console.log(response.data);
    });

    axios.patch('https://sheetdb.io/api/v1/58f61be4dda40/batch_update', {
        data: [
            {
                "query":"id=1",
                "name":"qwes",
                "age":20
            },
            {
                "query":"id=2",
                "age":25,
            }
        ]
    }).then( response => {
        console.log(response.data);
    });

  
  