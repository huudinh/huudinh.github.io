// Components Template search title
function templateResult(){
    let items = data;
    for(item of items){
        document.getElementById("searchResult").insertAdjacentHTML('beforeend', `
            <li><a href="#">${item}</a></li>
        `) 
    }
}
templateResult();

//Filter data
function filterSearch() {
    let input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("searchInput");
    filter = removeAccents(input.value.toUpperCase());
    ul = document.getElementById("searchResult");
    li = ul.getElementsByTagName("li");
    ul.style.display = 'block';
    // Loop li
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (removeAccents(txtValue).toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
    
}

// Display searchResult
document.addEventListener('click', ()=>{
    document.getElementById("searchResult").style.display = 'none';
});

// Remove tieng viet
function removeAccents(str) {
    return str.normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '')
        .replace(/đ/g, 'd').replace(/Đ/g, 'D');
}

// Insert Search Input
function insertSearch(){
    let input = document.getElementById("searchInput");
    let a = document.querySelectorAll('.searchResult a')
    for (let i = 0; i < a.length; i++) {
        a[i].addEventListener('click', ()=>{
            input.value = a[i].textContent;
        });

    }
}
insertSearch();