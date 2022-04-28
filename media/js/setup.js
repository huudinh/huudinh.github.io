// Menu effect move
scrollClick('.menu a, a[href="#pageReg"]');

// Menu active
window.addEventListener("scroll", function() {
    onScroll('.menu a','section','active');
});


// Add Class : 1. Name Button / 2. Name Object / 3. Name Class Add
addClass('.siteHeaderNav', '.siteHeaderMain', 'active');
addClass('.siteHeaderNav', '.siteHeader-bg', 'active');

// Remove Class : 1. Name Button / 2. Name Object / 3. Name Class Add
removeClass('.siteHeader-bg', '.siteHeaderMain', 'active');
removeClass('.siteHeader-bg', '.siteHeader-bg', 'active');
removeClass('.siteHeader a', '.siteHeaderMain', 'active');
removeClass('.siteHeader a', '.siteHeader-bg', 'active');