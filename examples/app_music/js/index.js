// Man hinh mac dinh
window.onload = () => {
    view.setActiveScreen('main');
};

// Get Youtube ID
var videoId = function (url) {
    var match = url.match(/v=([0-9a-z_-]{1,20})/i);
    return (match ? match['1'] : false);
};

// Goto top
var TopscrollTo = function () {
    if (window.scrollY != 0) {
        setTimeout(function () {
            window.scrollTo(0, window.scrollY - 30);
            TopscrollTo();
        }, 5);
    }
}
