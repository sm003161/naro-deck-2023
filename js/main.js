
const gnbShowBtn = document.querySelector("div.gnb-menu");
const gnbMenu = document.querySelector("ul.gnb-menu");
const communityWriteBtn = document.querySelector("button.write-btn");
const HIDDEN = "HIDDEN"
const writeIcon = "<i class=\"fa-solid fa-pen\"></i>"

console.log(window.screen.width);

// 모바일 헤더

function checkMobile() {
  if (window.screen.width <= 1083) {
    gnbMenu.classList.add(HIDDEN);

    if (communityWriteBtn) {
    communityWriteBtn.innerHTML = writeIcon;
    }
  }
}

checkMobile();

function HidingClass() {
  gnbMenu.classList.toggle(HIDDEN);
  console.log('button clicked');
}

gnbShowBtn.addEventListener("click", HidingClass);

/*
// 현재 GNB 표시하기
function currentNav() {
  console.log('<?php echo $currentMainNav;?>');
}

currentNav();
*/