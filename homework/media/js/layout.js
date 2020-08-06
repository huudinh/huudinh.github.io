/* SIDEBAR NAV */
const menuBox = document.querySelectorAll('.accordions_lv');
let menu = '';
let nav = data.navMenu;

function getMenuC1 (){
    let menu = "";   
    for(let i = 0; i < nav.length; i++){     
        let menu_1 = `<button class="accordions_lv-title active">${nav[i].name}</button>`;
        let menu_2 = `
            <div class="accordions_lv-content">
                <div class="accordions_lv">
                    ${getMenuC2(i)}
                </div>
            </div>
        `
        menu += menu_1 + menu_2;
    }
    return menu;
}
function getMenuC2(x){
    let menu = "";   
    let subs = nav[x].sub;
    for(let i = 0; i < subs.length; i++){       
        let menu_1 = `<button class="accordions_lv-title active">${subs[i].name}</button>`;
        let menu_2 = `
            <div class="accordions_lv-content">
                <ul>
                    ${getMenuC3(i)}
                </ul>
            </div>
        `;
        menu += menu_1 + menu_2;
    }
    
    return menu;
}
function getMenuC3(x){
    let menu = "";   
    let subs = nav[x].sub[x].sub;
    for(let i = 0; i < subs.length; i++){
        let link = `
            <li><a onclick="loadSection('${subs[i].link}')" href="#">${subs[i].name}</a></li>
        `;
        menu += link;
    }
    
    return menu;
}

menu =`${getMenuC1()}`;

menuBox[0].insertAdjacentHTML('beforeEnd',`${menu}`);

// add Homework Section
function loadSection(link){
    const main = document.getElementById('myframe');
    main.setAttribute('src', link);

}

