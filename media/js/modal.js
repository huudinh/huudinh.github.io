// modal
let modalButton = document.getElementsByClassName('modal-btn');
let modals = document.getElementsByClassName('modal');
let modalClose = document.getElementsByClassName('modal-close');
let closePic = document.getElementsByClassName('modal-closePic');
let modalBG = document.getElementsByClassName('modal-bg');

for (let i = 0; i < modalButton.length; i++) {
    for (let j = 0; j < modals.length; j++) {
        let modalCheck = function () {
            let x = modalButton[j].getAttribute('data-modal');
            let y = modals[j].getAttribute('id');
            if (x == y) {
                return true;
            }
        }

        //Show Modal
        modalButton[j].addEventListener("click", () => {
            if (modalCheck()) {
                modals[j].style.display = "block";
            }
        });

        //Hide Modal
        let modalHide = function (n) {
            for (let i = 0; i < n.length; i++) {
                n[i].addEventListener("click", () => {
                    if (modalCheck()) {
                        modals[j].style.display = "none";
                        modals[j].stopVideo();
                    }
                });
            }
        }

        modalHide(modalClose);
        modalHide(modalBG);
        modalHide(closePic);
    }
}