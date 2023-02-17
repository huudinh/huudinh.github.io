function imgTheme(path, tag) {
    let x = document.querySelectorAll(tag);
    for (let item of x) {
        let src = item.getAttribute('src');
        src = path + src;
        item.setAttribute('src', src);
    }
}
function sourceTheme(path, tag) {
    let x = document.querySelectorAll(tag);
    for (let item of x) {
        let srcset = item.getAttribute('srcset');
        srcset = path + srcset;
        item.setAttribute('srcset', srcset);
    }
}
document.addEventListener("scroll", function () {
    myLazy('img.lazy', 'src');
    myLazy('source.lazy', 'srcset');
    myLazy('.lazy-bg', 'img-bg');
    myLazy('.load', 'loaded');
});
LazyShowScreen('img.lazy', 'src')
LazyShowScreen('.load', 'loaded')

// Lazy load
function myLazy(sec, attr) {
    const section_loads = document.querySelectorAll(sec);
    let winTop = window.innerHeight;

    for (let i = 0; i < section_loads.length; i++) {
        let pos_top = section_loads[i].getBoundingClientRect().top;
        let pos_bottom = section_loads[i].getBoundingClientRect().bottom;
        let delay = section_loads[i].getAttribute('delay-time');
        if (pos_top <= winTop && pos_bottom >= 0) {
            switch (attr) {
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
                case 'loaded':
                    setTimeout(() => {
                        section_loads[i].classList.remove('load');
                        section_loads[i].classList.add('loaded');
                    }, delay)
                    break;
                case 'slide':
                    section_loads[i].classList.add('slide');
                    break;
                default:
                    console.log(`Sorry, we are out of ${attr}.`);
            }
        }
    }
}

function LazyShowScreen(sec, attr) {
    const section_loads = document.querySelectorAll(sec);
    let win_height = screen.height;
    for (let i = 0; i < section_loads.length; i++) {
        let delay = section_loads[i].getAttribute('delay-time');

        if (section_loads[i].getBoundingClientRect().top < win_height) {
            switch (attr) {
                case 'loaded':
                    setTimeout(() => {
                        section_loads[i].classList.add('loaded');
                    }, delay)
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
                case 'slide':
                    section_loads[i].classList.remove('slide');
                    section_loads[i].classList.add('slide');
                    break;
                default:
                    console.log(`Sorry, we are out of ${attr}.`);
            }
        }
    }
}
// Ajaxload
function loadDoc(url, cFunction) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {cFunction(this);}
    xhttp.open("GET", url);
    xhttp.send();
}

// Render Module
function renderModule (type, module, data, logic){

    // Khai baos Module
    let url = `${type}/${module}/`;
    loadDoc(`${url}code.html`, insertLayout);
    
    // Function xu ly
    function insertLayout(xhttp) {
        document.getElementById(`${module}`).innerHTML = xhttp.responseText;
        imgTheme(`${url}`, `.${module} img`);
    }

    // Khai bao api
    if (data == 'data'){
        var script = document.createElement('script');
        script.type = "text/javascript";
        script.src = `${url}js/${module}_dataHome.js`;
        var t=document.getElementsByTagName('script')[0];t.parentNode.insertBefore(script,t);   
    }

    // Khai bao js
    if (logic == 'logic'){
        var script = document.createElement('script');
        script.type = "text/javascript";
        script.src = `${url}js/${module}.js`;
        var t=document.getElementsByTagName('script')[0];t.parentNode.insertBefore(script,t);   
    }

    // Khai bao css
    var link = document.createElement('link');
    link.rel = "stylesheet";
    link.href = `${url}/sass/${module}.min.css`;
    var t=document.getElementsByTagName('link')[0];t.parentNode.insertBefore(link,t);   
}