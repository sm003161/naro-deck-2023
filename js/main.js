
const gnbShowBtn = document.querySelector("div.gnb-menu");
const gnbMenu = document.querySelector("ul.gnb-menu");
const HIDDEN = "HIDDEN"

console.log(window.screen.width);

// 모바일 헤더

function checkMobile() {
    if (window.screen.width <= 1083) {
        gnbMenu.classList.add(HIDDEN);
        console.log('2');
    }
}

checkMobile();

function HidingClass() {
    gnbMenu.classList.toggle(HIDDEN);
    console.log('button clicked');
}

gnbShowBtn.addEventListener("click", HidingClass);

// 현재 GNB 표시하기
function currentNav() {
    console.log($currentMainNav);
}

currentNav()