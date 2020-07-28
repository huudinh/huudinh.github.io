// Accrodion Single
var Accordion = function (options) {
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
            function (item) {
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
        [].forEach.call(element.querySelectorAll('.' + titleClass), function (item) {
            item.classList.remove("active");
        });
    }

    function closeAll() {
        [].forEach.call(element.querySelectorAll('.' + contentClass), function (item) {
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

// Accrodion Multil
var acc = document.getElementsByClassName("accordions-title");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}