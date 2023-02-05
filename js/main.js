const gnbShowBtn = document.querySelector("div.gnb-menu");
const gnbMenu = document.querySelector("ul.gnb-menu");
const HIDDEN = "HIDDEN"

function HidingClass() {
    gnbMenu.classList.toggle(HIDDEN);
}

gnbShowBtn.addEventListener("click", HidingClass);





function checkMobile() {
    if (window.screen.width <= 1083) {
        gnbMenu.classList.add(HIDDEN);
    }
}

checkMobile();