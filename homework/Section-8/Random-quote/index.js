const quote = document.getElementById('quote');
const author = document.getElementById('author');
const reload = document.getElementById('reload');

function show_quote() {
    random_quote = data[Math.floor(Math.random() * data.length)];
    quote.innerHTML = random_quote.quoteText;
    author.innerHTML = random_quote.quoteAuthor;
};

show_quote();
reload.addEventListener('click', show_quote);