if(document.querySelectorAll('.btnkn2km, .btnkn2tv, .btnkn1km, .btnkn1tv, .btnhoidap, .btnda1tv')){
    const btnkn2km = document.querySelectorAll('.btnkn2km, .btnkn2tv, .btnkn1km, .btnkn1tv, .btnhoidap, .btnda1tv');
    btnkn2km.forEach((btn) => {
        btn.setAttribute('href', 'https://benhvienthammykangnam.com.vn/');
        btn.setAttribute('target', '_blank');
        btn.classList.remove('btn');

        replateTag(btn, 'div');
    })
}

// Đổi sang thẻ a nếu là Button
function replateTag(element, tag){
    // Kiểm tra xem thẻ đó có phải là button không
    if (element && element.tagName.toLowerCase() === tag) {
        // Tạo thẻ a mới
        const anchor = document.createElement('a');
        
        // Sao chép thuộc tính từ thẻ button cũ sang thẻ a
        for (const attr of element.attributes) {
            anchor.setAttribute(attr.name, attr.value);
        }

        // anchor.classList.add('button');
        anchor.style.color = '#fff';

        // Sao chép nội dung
        anchor.innerHTML = element.innerHTML;

        // Thay thế thẻ button bằng thẻ a
        element.parentNode.replaceChild(anchor, element);
    }
}
// favicon
// (function () {
//     var link = document.createElement('link');
//     link.type = 'image/x-icon';
//     link.rel = 'shortcut icon';
//     link.href = '/css/lib/images/favicon.png';
//     var t = document.getElementsByTagName('script')[0]; t.parentNode.insertBefore(link, t)
// })();

// Cai thien hieu suat cuon trang / Does not use passive listeners to improve scrolling performance
(function () {
    var supportsPassive = eventListenerOptionsSupported();
    if (supportsPassive) {
        var addEvent = EventTarget.prototype.addEventListener;
        overwriteAddEvent(addEvent);
    }
    function overwriteAddEvent(superMethod) {
        var defaultOptions = {
            passive: true,
            capture: false
        };
        EventTarget.prototype.addEventListener = function (type, listener, options) {
            var usesListenerOptions = typeof options === 'object';
            var useCapture = usesListenerOptions ? options.capture : options;
            options = usesListenerOptions ? options : {};
            options.passive = options.passive !== undefined ? options.passive : defaultOptions.passive;
            options.capture = useCapture !== undefined ? useCapture : defaultOptions.capture;
            superMethod.call(this, type, listener, options);
        };
    }
    function eventListenerOptionsSupported() {
        var supported = false;
        try {
            var opts = Object.defineProperty({}, 'passive', {
                get: function () {
                    supported = true;
                }
            });
            window.addEventListener("test", null, opts);
        } catch (e) { }
        return supported;
    }
})();