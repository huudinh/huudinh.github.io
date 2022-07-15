const list = document.querySelector('.booksList ul');
const forms = document.forms;

// delete books
list.addEventListener('click', (e) => {
    if (e.target.className == 'booksList__delete') {
        const li = e.target.parentElement;
        li.parentNode.removeChild(li);
    }
});

// add books

const addForm = forms['booksAdd'];
addForm.addEventListener('submit', (e) => {
    e.preventDefault();

    // create element
    const input = addForm.querySelector('input[type="text"]');
    const li = document.createElement('li');
    const bookName = document.createElement('span');
    const deleteBtn = document.createElement('span');

    if (input.value == '') {
        alert('Please enter the book');
        return;
    }

    // add text content
    bookName.textContent = input.value;
    deleteBtn.textContent = 'delete';

    // add class
    bookName.classList.add('booksList__name');
    deleteBtn.classList.add('booksList__delete');

    // addend to DOM
    li.appendChild(bookName);
    li.appendChild(deleteBtn);
    list.appendChild(li);

    // reset input
    input.value = '';
});

// filter

const searchBook = forms['books__search'];
searchBook.addEventListener('keyup', (e) => {
    e.preventDefault();

    const input = searchBook.querySelector('input');
    const filter = input.value.toUpperCase();
    const ul = document.querySelector('.booksList ul');
    const li = ul.querySelectorAll('li');

    for (let i = 0; i < li.length; i++) {
        const span = li[i].querySelector('.booksList__name');
        const name = span.textContent;
        if (name.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = '';
        } else {
            li[i].style.display = 'none';
        }
        console.log(name);

    }


})