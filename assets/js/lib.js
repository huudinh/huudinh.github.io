document.addEventListener("DOMContentLoaded", function() {

    // Accrodion Multil
    var acc = document.getElementsByClassName("accordions-title");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }

    // Accrodions Level 
    var acc = document.getElementsByClassName("accordions_lv-title");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }

    //Tabs
    let tab_navs = document.querySelectorAll("ul.tabs li");
    let tab_links = document.querySelectorAll('ul.tabs li.tab-link');
    // let tab_contents = document.querySelectorAll('.tab-content');

    for (let tab_nav of tab_navs) {
        tab_nav.addEventListener('click', (e) => {
            // let tab_id = e.target.getAttribute('data-tab');
            let tab_id = tab_nav.getAttribute('data-tab');
            // console.log(tab_id);

            // let navParent = e.target.parentElement;
            let navParent = tab_nav.parentElement;
            let navChildrens = navParent.children;

            for (let navChildren of navChildrens) {
                navChildren.classList.remove('current');
            }

            // Remove Current tabcontent
            // let navParent2 = e.target.parentElement.parentElement;
            let navParent2 = tab_nav.parentElement.parentElement;
            let navChildrens2 = navParent2.children;

            for (let navChildren2 of navChildrens2) {
                navChildren2.classList.remove('current');
            }

            let tab_id_active = document.getElementById(tab_id);

            tab_nav.classList.add('current');
            tab_id_active.classList.add('current');
        });
    }

    //Tabs Single
    const tab_nav_sis = document.querySelectorAll('.tabs .tab');
    for (let tab_nav_si of tab_nav_sis) {
        tab_nav_si.addEventListener('click', (e) => {
            let navParent = e.target.parentElement;
            let navChildrens = navParent.children;

            for (let navChildren of navChildrens) {
                navChildren.classList.remove('active');
            }

            tab_nav_si.classList.add('active');
        });
    }

    //Tabs Single IMG
    const tab_nav_si_imgs = document.querySelectorAll('.tabs .tab img');
    for (let tab_nav_si_img of tab_nav_si_imgs) {
        tab_nav_si_img.addEventListener('click', (e) => {
            let navParent = e.target.parentElement.parentElement;
            let navChildrens = navParent.children;

            for (let navChildren of navChildrens) {
                navChildren.classList.remove('active');
            }

            tab_nav_si_img.classList.add('active');
        });
    }

    // modal
    let modalButton = document.getElementsByClassName('modal-btn');
    let modals = document.getElementsByClassName('modal');
    let modalClose = document.getElementsByClassName('modal-close');
    let closePic = document.getElementsByClassName('modal-closePic');
    let modalBG = document.getElementsByClassName('modal-bg');

    for (let i = 0; i < modalButton.length; i++) {
        for (let j = 0; j < modals.length; j++) {
            let x = modalButton[i].getAttribute('data-modal');
            let y = modals[j].getAttribute('id');
            let modalCheck = function() {
                    if (x == y) {
                        return true;
                    }
                }
                //Show Modal
            modalButton[i].addEventListener("click", () => {
                if (modalCheck()) {
                    modals[j].style.display = "flex";

                }
            });

            //Hide Modal
            let modalHide = function(n) {
                for (let i = 0; i < n.length; i++) {
                    n[i].addEventListener("click", () => {
                        if (modalCheck()) {
                            modals[j].style.display = "none";
                        }
                    });
                }
            }

            modalHide(modalClose);
            modalHide(modalBG);
            modalHide(closePic);
        }
    }

    // Video Popup
    const videoPopupCard = (id) => {
        return `
            <div class="modal modal-clipBox" id="modal-clip" style="display:flex">
                <div class="modal-closePic" id="modal-closePic">&times;</div>
                <div class="modal-box modal-box-video animate-zoom">
                    <div class="modal-video">
                        <iframe id="youtube" src="${id}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="modal-bg" id="modal-bg"></div>
            </div>
        `
    }

    let modalVideos = document.getElementsByClassName('modal-clip');
    for (let modalVideo of modalVideos) {
        let modalSrc = modalVideo.getAttribute('data-video');
        modalSrc = `//www.youtube-nocookie.com/embed/${modalSrc}?rel=0&controls=1&autoplay=1&nocookie=true&mute=true`;
        modalVideo.addEventListener('click', () => {
            document.getElementsByTagName('body')[0].insertAdjacentHTML('beforeEnd', videoPopupCard(modalSrc));

            document.getElementById('modal-closePic').addEventListener("click", () => {
                document.getElementById('modal-clip').remove();
            });
            
            document.getElementById('modal-bg').addEventListener("click", () => {
                document.getElementById('modal-clip').remove();
            });
        });
    }

    // Image Popup
    const imagePopupCard = (url) => {
        return `
            <div class="modal" id="modal-pic" style="display:flex">
                <div class="modal-closePic" id="modal-closePic">&times;</div>
                <div class="modal-bg" id="modal-bg"></div>
                <div class="modal-box modal-box-video animate-zoom">
                    <div class="modal-pic" style="text-align:center">
                        <img src="${url}" style="max-width:100%" alt="img">
                    </div>
                </div>
            </div>
        `
    }

    let modalImages = document.getElementsByClassName('modal-image');
    
    for (let modalImage of modalImages) {

        let url = modalImage.getAttribute('data-image');

        if(url == null) {
            url = modalImage.querySelector('img').src
        }

        modalImage.addEventListener('click', () => {
            document.getElementsByTagName('body')[0].insertAdjacentHTML('beforeEnd', imagePopupCard(url));
            document.getElementById('modal-closePic').addEventListener("click", () => {
                document.getElementById('modal-pic').remove();
            });
            
            document.getElementById('modal-bg').addEventListener("click", () => {
                document.getElementById('modal-pic').remove();
            });
        });
    }
});

// Accrodion Single
var Accordion = function(options) {
    var element = typeof options.element === 'string' ?
        document.getElementById(options.element) : options.element,
        openTab = options.openTab,
        oneOpen = options.oneOpen || false,

        titleClass = 'accordion-title',
        contentClass = 'accordion-content';

    render();

    function render() {
        // attach classes to buttons and containers
        [].forEach.call(element.querySelectorAll('button'),
            function(item) {
                item.classList.add(titleClass);
                item.nextElementSibling.classList.add(contentClass);
            });

        // attach only one click listener
        element.addEventListener('click', onClick);

        // accordion starts with all tabs closed
        closeAll();

        // sets the open tab - if defined
        if (openTab) {
            open(openTab);
        }
    }

    function onClick(e) {
        if (e.target.className.indexOf(titleClass) === -1) {
            return;

        }

        if (oneOpen) {
            closeAll();
            removeActive();
            e.target.classList.add("active");
        } else {
            e.target.classList.toggle("active");
        }

        toggle(e.target.nextElementSibling);
    }

    function removeActive() {
        [].forEach.call(element.querySelectorAll('.' + titleClass), function(item) {
            item.classList.remove("active");
        });
    }

    function closeAll() {
        [].forEach.call(element.querySelectorAll('.' + contentClass), function(item) {
            item.style.height = 0;
        });
    }

    function toggle(el) {

        var height = el.scrollHeight;

        if (el.style.height === '0px' || el.style.height === '') {
            el.style.height = height + 'px';
        } else {
            el.style.height = 0;
        }
    }

    function getTarget(n) {
        return element.querySelectorAll('.' + contentClass)[n - 1];
    }

    function open(n) {
        var target = getTarget(n);

        if (target) {
            if (oneOpen) closeAll();
            target.style.height = target.scrollHeight + 'px';
        }
    }

    function close(n) {
        var target = getTarget(n);

        if (target) {
            target.style.height = 0;
        }
    }

    function destroy() {
        element.removeEventListener('click', onClick);
    }

    return {
        open: open,
        close: close,
        destroy: destroy
    };
};

// onScroll Active Menu
function onScroll(classItem, area, act) {
    if (screen.width > 1180) {
        const menu = document.querySelectorAll(classItem);
        let y = document.documentElement.scrollTop;
        let sections = document.querySelectorAll(area);
        let i = 0;
        let actClass = '.' + act;
        sections.forEach(function(section) {
            let z = section.offsetTop - 70;
            let active = document.querySelectorAll(actClass);
            if (z <= y) {
                active[0].classList.remove(act);
                menu[i].classList.add(act);
            }
            if (i < menu.length - 1) {
                i++;
            }
        });
    }
}

// Scroll menu
function scrollClick(classItem) {
    const classItems = document.querySelectorAll(classItem);
    for (const item of classItems) {
        item.addEventListener("click", clickHandler);
    }

    function clickHandler(e) {
        e.preventDefault();
        const href = this.getAttribute("href");

        if (href != '#') {
            const offsetTop = document.querySelector(href).offsetTop;
            scroll({
                top: offsetTop - 70,
                behavior: "smooth"
            });
        }
    }
}

// Remove Class : 1. Name Button / 2. Name Object / 3. Name Class Add
function addClass(btn, obj, className) {
    let btns = document.querySelectorAll(btn);
    let objs = document.querySelectorAll(obj);
    for (let i = 0; i < btns.length; i++) {
        btns[i].addEventListener('click', () => {
            for (let j = 0; j < objs.length; j++) {
                objs[j].classList.add(className);
            }
        });
    }
}

// Remove Class : 1. Name Button / 2. Name Object / 3. Name Class Add
function removeClass(btn, obj, className) {
    let btns = document.querySelectorAll(btn);
    let objs = document.querySelectorAll(obj);
    for (let i = 0; i < btns.length; i++) {
        btns[i].addEventListener('click', () => {
            for (let j = 0; j < objs.length; j++) {
                objs[j].classList.remove(className);
            }
        });
    }
}

function slider(element, control, defaultPerPage, paginationSelector, autoTime = null) {
    const wrapperGallery = document.querySelector(element);
    const itemGallery = document.querySelectorAll(`${element} .slider__item`);
    const controlNext = document.querySelector(`${control} .slider__next`);
    const controlPrev = document.querySelector(`${control} .slider__prev`);
    const paginationWrapper = paginationSelector ? document.querySelector(paginationSelector) : null;

    if (!wrapperGallery || !controlNext || !controlPrev || itemGallery.length === 0) return;

    const state = {
        perPage: defaultPerPage,
        widthItemChild: 100 / itemGallery.length,
        transformLeft: 0,
        currentPage: 0,
        totalPage: 0
    };

    let autoSlideInterval = null;
    let resumeTimeout = null;

    const renderPagination = () => {
        if (!paginationWrapper) return;
        paginationWrapper.innerHTML = '';
        for (let i = 0; i < state.totalPage; i++) {
            const dot = document.createElement('button');
            dot.className = 'slider__dot';
            if (i === 0) dot.classList.add('active');
            dot.dataset.index = i;
            dot.addEventListener('click', () => {
                goToPage(i);
                pauseAutoSlideTemporarily(); // 👉 dừng tạm thời khi click dot
            });
            paginationWrapper.appendChild(dot);
        }
    };

    const updatePaginationActive = () => {
        if (!paginationWrapper) return;
        const dots = paginationWrapper.querySelectorAll('.slider__dot');
        dots.forEach(dot => dot.classList.remove('active'));
        if (dots[state.currentPage]) dots[state.currentPage].classList.add('active');
    };

    const goToPage = (pageIndex) => {
        state.currentPage = pageIndex;
        state.transformLeft = pageIndex * state.perPage * state.widthItemChild;
        wrapperGallery.style.transform = `translate3d(-${state.transformLeft}%, 0, 0)`;
        updatePaginationActive();
    };

    // const updateSliderSize = () => {
    //     const innerWidth = window.innerWidth;
    //     state.perPage = innerWidth < 431 ? 1 : innerWidth < 768 ? 3 : defaultPerPage;
    //     const defaultWidthItem = 100 / state.perPage;

    //     wrapperGallery.style.width = `${defaultWidthItem * itemGallery.length}%`;
    //     state.widthItemChild = 100 / itemGallery.length;
    //     state.totalPage = Math.ceil(itemGallery.length / state.perPage);
    //     state.currentPage = 0;
    //     state.transformLeft = 0;

    //     itemGallery.forEach(item => {
    //         item.style.width = `${state.widthItemChild}%`;
    //     });

    //     renderPagination();
    //     wrapperGallery.style.transform = `translate3d(0%, 0, 0)`;

    //     if (autoTime && autoTime > 0) {
    //         clearInterval(autoSlideInterval);
    //         clearTimeout(resumeTimeout);
    //         autoSlide();
    //     }
    // };
    const updateSliderSize = () => {
        const innerWidth = window.innerWidth;
        state.perPage = innerWidth < 431 ? 1 : innerWidth < 768 ? 3 : defaultPerPage;
        const defaultWidthItem = 100 / state.perPage;

        wrapperGallery.style.width = `${defaultWidthItem * itemGallery.length}%`;
        state.widthItemChild = 100 / itemGallery.length;
        state.totalPage = Math.ceil(itemGallery.length / state.perPage);
        state.currentPage = 0;
        state.transformLeft = 0;

        itemGallery.forEach(item => {
            item.style.width = `${state.widthItemChild}%`;
        });

        renderPagination();
        wrapperGallery.style.transform = `translate3d(0%, 0, 0)`;

        // 👉 Thêm đoạn này để tính chiều cao slider
        let maxHeight = 0;
        itemGallery.forEach(item => {
            item.style.height = 'auto'; // reset nếu trước đó đặt height
            const itemHeight = item.offsetHeight;
            if (itemHeight > maxHeight) maxHeight = itemHeight;
        });
        wrapperGallery.style.height = `${maxHeight}px`; // gán chiều cao cố định

        if (autoTime && autoTime > 0) {
            clearInterval(autoSlideInterval);
            clearTimeout(resumeTimeout);
            autoSlide();
        }
    };


    const nextSlide = () => {
        state.currentPage++;
        if (state.currentPage >= state.totalPage) state.currentPage = 0;
        goToPage(state.currentPage);
    };

    const prevSlide = () => {
        state.currentPage--;
        if (state.currentPage < 0) state.currentPage = state.totalPage - 1;
        goToPage(state.currentPage);
    };

    const autoSlide = () => {
        if (!autoTime || autoTime <= 0) return;
        clearInterval(autoSlideInterval);
        autoSlideInterval = setInterval(() => {
            nextSlide();
        }, autoTime);
    };

    const pauseAutoSlideTemporarily = () => {
        if (!autoTime || autoTime <= 0) return;
        clearInterval(autoSlideInterval);
        clearTimeout(resumeTimeout);
        resumeTimeout = setTimeout(() => {
            autoSlide();
        }, 5000); // 👉 chạy lại sau 5 giây
    };

    controlNext.addEventListener("click", () => {
        nextSlide();
        pauseAutoSlideTemporarily(); // 👉 dừng tạm thời khi click next
    });

    controlPrev.addEventListener("click", () => {
        prevSlide();
        pauseAutoSlideTemporarily(); // 👉 dừng tạm thời khi click prev
    });

    updateSliderSize();
    window.addEventListener("resize", updateSliderSize);

    if (autoTime && autoTime > 0) {
        autoSlide();
    }
}