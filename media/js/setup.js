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
    // Add Lazy Screen LDP
    myLoad('section','loaded');
    myLoad('.slide_run','slide');
    myLazy('img.lazy','src');
    myLazy('source.lazy','srcset');
    myLazy('.lazy-bg','img-bg');
}); 

// autoLazy('section','loaded');
// autoLazy('img.lazy','src');
// autoLazy('source.lazy','srcset');
// autoLazy('.lazy-bg','img-bg');
LazyShowScreen('img.lazy','src');

// Lazy load
function addImgDefault(sec, attr){
    const section_loads = document.querySelectorAll(sec);
    let data = 'data:image/gif;base64,R0lGODlhAQABAPAAAMzMzAAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==';

    for (let i = 0; i < section_loads.length; i++) {
        // add src default
        switch(attr){
            case 'src':
                section_loads[i].src = data;
                break;
            case 'srcset':
                section_loads[i].srcset = data;
                break;
            default:
                console.log(`Sorry, we are out of ${attr}.`);
        }
    }    
}

function myLazy(sec, attr) {
    const section_loads = document.querySelectorAll(sec);
    let winTop = window.innerHeight;

    for (let i = 0; i < section_loads.length; i++) {
        let pos_top = section_loads[i].getBoundingClientRect().top;
        let pos_bottom = section_loads[i].getBoundingClientRect().bottom;       
        if (pos_top <= winTop && pos_bottom >= 0) {
            switch(attr){
                case 'src':
                    section_loads[i].src = section_loads[i].dataset.src;
                    section_loads[i].classList.remove('lazy');
                    break;
                case 'srcset':
                    section_loads[i].srcset = section_loads[i].dataset.srcset;
                    section_loads[i].classList.remove('lazy');
                    break;
                case 'img-bg':
                    section_loads[i].classList.remove('lazy-bg');
                    section_loads[i].classList.add('img-bg');
                    break;
                default:
                    console.log(`Sorry, we are out of ${attr}.`);
            }
            
        }
    }
}
function autoLazy(sec, attr) {
    const section_loads = document.querySelectorAll(sec);
    for (let i = 0; i < section_loads.length; i++) {
    setTimeout(()=>{
        switch(attr){
            case 'loaded':
                section_loads[i].classList.add('loaded');
                break;
            case 'src':
                section_loads[i].src = section_loads[i].dataset.src;
                section_loads[i].classList.remove('lazy');
                break;
            case 'srcset':
                section_loads[i].srcset = section_loads[i].dataset.srcset;
                section_loads[i].classList.remove('lazy');
                break;
            case 'img-bg':
                section_loads[i].classList.remove('lazy-bg');
                section_loads[i].classList.add('img-bg');
                break;
            default:
                console.log(`Sorry, we are out of ${attr}.`);
        }
    },5000);
    }
}
function LazyShowScreen(sec, attr) {
    const section_loads = document.querySelectorAll(sec);
    let win_height = screen.height;

    for (let i = 0; i < section_loads.length; i++) {
        if(section_loads[i].getBoundingClientRect().top < win_height){
            switch(attr){
                case 'loaded':
                section_loads[i].classList.add('loaded');
                    break;
                case 'src':
                    section_loads[i].src = section_loads[i].dataset.src;
                    section_loads[i].classList.remove('lazy');
                    break;
                case 'srcset':
                    section_loads[i].srcset = section_loads[i].dataset.srcset;
                    section_loads[i].classList.remove('lazy');
                    break;
                case 'img-bg':
                    section_loads[i].classList.remove('lazy-bg');
                    section_loads[i].classList.add('img-bg');
                    break;
                default:
                    console.log(`Sorry, we are out of ${attr}.`);
            }
        }
    }
}



// Add Class : 1. Name Button / 2. Name Object / 3. Name Class Add
addClass('.siteHeaderNav','.siteHeaderMain','active');
addClass('.siteHeaderNav','.siteHeader-bg','active');

// Remove Class : 1. Name Button / 2. Name Object / 3. Name Class Add
removeClass('.siteHeader-bg','.siteHeaderMain','active');
removeClass('.siteHeader-bg','.siteHeader-bg','active');
removeClass('.siteHeader a','.siteHeaderMain','active');
removeClass('.siteHeader a','.siteHeader-bg','active');