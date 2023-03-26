
const gnbShowBtn = document.querySelector("div.gnb-menu");
const gnbMenu = document.querySelector("ul.gnb-menu");
const communityWriteBtn = document.querySelector("button.write-btn");
const HIDDEN = "HIDDEN"

console.log(window.screen.width);

/* 모바일 이벤트 */
function checkMobile() {
  // 모바일 헤더로 변환
  if (window.screen.width <= 1083) {
    gnbMenu.classList.add(HIDDEN);
    
  // 모바일에서 게시판 글쓰기 버튼은 아이콘으로 표기
  if (communityWriteBtn) {
      const writeIcon = "<i class=\"fa-solid fa-pen\"></i>"
      communityWriteBtn.innerHTML = writeIcon;
    }
  }

  // 모바일 헤더 토글 이벤트
  function HidingClass() {
    gnbMenu.classList.toggle(HIDDEN);
    console.log('button clicked');
  }
  
  gnbShowBtn.addEventListener("click", HidingClass);
}

checkMobile();



// 현재 GNB 메뉴에 하이라이트하기
function highlightLi() {
  const currentLi = currentMainNavEng.parentNode;
  currentLi.classList.add("on");
}