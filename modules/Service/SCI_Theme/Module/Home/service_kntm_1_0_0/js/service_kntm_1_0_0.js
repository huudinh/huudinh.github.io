function service_kntm_1_0_0(element, control, defaultPerPage, paginationSelector) {
    const wrapperGallery = document.querySelector(element);
    const itemGallery = document.querySelectorAll(`${element} .service_kntm_1_0_0__item`);
    const controlNext = document.querySelector(`${control} .service_kntm_1_0_0__next`);
    const controlPrev = document.querySelector(`${control} .service_kntm_1_0_0__prev`);
    const paginationWrapper = paginationSelector ? document.querySelector(paginationSelector) : null;

    if (!wrapperGallery || !controlNext || !controlPrev || itemGallery.length === 0) return;

    const state = {
        perPage: defaultPerPage,
        widthItemChild: 100 / itemGallery.length,
        transformLeft: 0,
        currentPage: 0,
        totalPage: 0
    };

    const renderPagination = () => {
        if (!paginationWrapper) return;
        paginationWrapper.innerHTML = '';
        for (let i = 0; i < state.totalPage; i++) {
            const dot = document.createElement('button');
            dot.className = 'pagination-dot';
            if (i === 0) dot.classList.add('active');
            dot.dataset.index = i;
            dot.addEventListener('click', () => {
                goToPage(i);
            });
            paginationWrapper.appendChild(dot);
        }
    };

    const updatePaginationActive = () => {
        if (!paginationWrapper) return;
        const dots = paginationWrapper.querySelectorAll('.pagination-dot');
        dots.forEach(dot => dot.classList.remove('active'));
        if (dots[state.currentPage]) dots[state.currentPage].classList.add('active');
    };

    const goToPage = (pageIndex) => {
        state.currentPage = pageIndex;
        state.transformLeft = pageIndex * state.perPage * state.widthItemChild;
        wrapperGallery.style.transform = `translate3d(-${state.transformLeft}%, 0, 0)`;
        updatePaginationActive();
    };

    const updateSliderSize = () => {
        const innerWidth = window.innerWidth;
        state.perPage = innerWidth < 431 ? 2 : innerWidth < 768 ? 3 : defaultPerPage;
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
    };

    controlNext.addEventListener("click", () => {
        state.currentPage++;
        if (state.currentPage >= state.totalPage) state.currentPage = 0;
        goToPage(state.currentPage);
    });

    controlPrev.addEventListener("click", () => {
        state.currentPage--;
        if (state.currentPage < 0) state.currentPage = state.totalPage - 1;
        goToPage(state.currentPage);
    });

    updateSliderSize();
    window.addEventListener("resize", updateSliderSize);
}

// Gọi hàm khởi tạo
service_kntm_1_0_0('.sv1', '#slider-nav-1', 4, '');
// service_kntm_1_0_0('.sv2', '#slider-nav-2', 3);
service_kntm_1_0_0('.sv2', '#slider-nav-2', 3, '.slider_knbm_1_0_0__pagination');
