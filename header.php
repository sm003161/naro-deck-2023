<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" as="style" crossorigin href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.6/dist/web/static/pretendard.css">
  <link rel="stylesheet" href="fontawesome/css/fontawesome.css" />
  <link href="fontawesome/css/brands.css" rel="stylesheet">
  <link href="fontawesome/css/solid.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>형제섬 데크</title>
</head>
<body>




<!-- 띠메뉴 -->
<header>
  <ul class="fw-lighter">
    <a href="index.php" class="on">
      <li class="fw-bold">데크</li>
    </a>
    <a target="_blank" href="http://narodopension.co.kr/">
      <li>펜션</li>
    </a>
  </ul>
</header>




<!-- GNB 메뉴 -->
<nav class="gnb light-bd-bt">
  <div class="logo fw-bolder fs-1"><a href="index.php">형제섬 데크</a> </div>

  <!-- PC 버전 GNB -->
  <ul class="gnb-menu">
    <li><a href="greeting.php" id="greeting">소개</a></li>
    <li><a href="gallery.php" id="gallery">갤러리</a></li>
    <li><a href="deck.php" id="deck">데크</a></li>
    <li><a href="reservation_notice.php" id="reservation">예약</a></li>
    <li><a href="board_notice.php" id="board">공지사항</a></li>
  </ul>
  
  <!-- MO 버전 GNB -->
  <div class="gnb-menu">
    <img src="assets/icon/button-hamburger.png" alt="메뉴">
  </div>
  <span class="text-end contact-box">
    <span class="contact basic-padding text-end fw-bolder"><i class="fa-solid fa-phone"></i>061-832-2005</span>
  </span>
  <a href="tel:0618322005" class="contact-box">
    <img src="assets/icon/button-contact.png" alt="문의전화">
  </a>
</nav>
</header>


<!-- GNB 메뉴 하이라이트하기 -->
<script>
  <?php 
    if ($currentMainNav !== '메인') {
      echo 'const currentMainNavEng = document.getElementById("'.$currentMainNavEng.'");';
    }?>
</script>





<!-- LNB 메뉴 -->
<nav class="lnb">
  <ul>

  <!-- LNB 메뉴를 배열에 담기 -->
  <?php
  $greeting = array(
    '인삿말' => '/greeting.php',
    '오시는길' => '/map.php'
  );

  $reservation = array(
    '예약안내' => '/reservation_notice.php',
    '예약바로가기' => '/#'
  );

  $gallery = array(
    '전망' => '/gallery.php',
    '부대시설' => '/gallery.php'
  );

  $deck = array(
    '데크배치도' => '/deck.php',
    '데크미리보기' => '/deck_preview.php'
  );

  $board = array(
    '공지사항' => '/board_notice.php',
    '문의사항' => '/board_qna.php'
  );

  // LNB 메뉴 뿌려주기
  if ($currentMainNav === '메인') {
  } else if ($currentMainNav === '소개') {
    foreach ($greeting as $name => $urls) {
      print '<li'.(($currentPage === $name) ? ' class="on" ': '').'><a href="'.$urls.'" >'.$name.'</a></li>';
    }
  } else if ($currentMainNav === '갤러리') {
    foreach ($gallery as $name => $urls) {
      print '<li'.(($currentPage === $name) ? ' class="on" ': '').'><a href="'.$urls.'" >'.$name.'</a></li>';
    }
  } else if ($currentMainNav === '예약') {
    foreach ($reservation as $name => $urls) {
      print '<li'.(($currentPage === $name) ? ' class="on" ': '').'><a href="'.$urls.'" >'.$name.'</a></li>';
    }
  } else if ($currentMainNav === '데크') {
    foreach ($deck as $name => $urls) {
      print '<li'.(($currentPage === $name) ? ' class="on" ': '').'><a href="'.$urls.'" >'.$name.'</a></li>';
    }
  } else if ($currentMainNav === '게시판') {
    foreach ($board as $name => $urls) {
      print '<li'.(($currentPage === $name) ? ' class="on" ': '').'><a href="'.$urls.'" >'.$name.'</a></li>';
    }
  }
  ?>

  </ul>
</nav>