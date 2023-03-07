const gnbShowBtn = document.querySelector("div.gnb-menu");
const gnbMenu = document.querySelector("ul.gnb-menu");
const HIDDEN = "HIDDEN"

console.log('page loadded');
console.log(window.screen.width);


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



