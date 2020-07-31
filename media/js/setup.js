// Add Smooth Scrolling Link
const links = document.querySelectorAll(".menu a, a[href='#pageReg'], header a");

for (const link of links) {
    link.addEventListener("click", clickHandler);
}

function clickHandler(e) {
    e.preventDefault();
    const href = this.getAttribute("href");
    const offsetTop = document.querySelector(href).offsetTop;

    scroll({
        top: offsetTop - 70,
        behavior: "smooth"
    });
}

// onScroll Active Menu
const menu = document.querySelectorAll('.menu a');
window.onscroll = function () { myFunction() };

function myFunction() {
    let y = document.documentElement.scrollTop;
    let sections = document.querySelectorAll('.temp');
    let i = 0;
    sections.forEach(function (section){
        let z = section.offsetTop - 70;
        let active = document.querySelectorAll('.menu a.active');
        if ( z <= y ){
            active[0].classList.remove('active');
            menu[i].classList.add('active');
        }
        if(i < menu.length - 1){
            i++;
        }
    });
}
