// Add Smooth Scrolling Link
const links = document.querySelectorAll(".menu a, a[href='#pageReg']");

for (const link of links) {
    link.addEventListener("click", clickHandler);
}

function clickHandler(e) {
    e.preventDefault();
    const href = this.getAttribute("href");
    
    if(href != '#'){
        const offsetTop = document.querySelector(href).offsetTop;
        scroll({
            top: offsetTop - 70,
            behavior: "smooth"
        });
    }
}
// add Img Lazy Demo
// addImgDefault('img.lazy','src');
// addImgDefault('source.lazy','srcset');

window.addEventListener("scroll", function () { 
    // Add Onscroll .menu a
    onScroll();   
}); 
LazyShowScreen('img.lazy','src');




// Add Class : 1. Name Button / 2. Name Object / 3. Name Class Add
addClass('.siteHeaderNav','.siteHeaderMain','active');
addClass('.siteHeaderNav','.siteHeader-bg','active');

// Remove Class : 1. Name Button / 2. Name Object / 3. Name Class Add
removeClass('.siteHeader-bg','.siteHeaderMain','active');
removeClass('.siteHeader-bg','.siteHeader-bg','active');
removeClass('.siteHeader a','.siteHeaderMain','active');
removeClass('.siteHeader a','.siteHeader-bg','active');