<?php
  $currentMainNav = '메인';
  $currentPage = '메인';
  
  include("header.php");
?>

<script>
  console.log('<?php echo $currentMainNav;?>');
  const currentMainNav = '<?php echo $currentMainNav;?>';
</script>

  <!-- 메인이미지 -->
  <section class="main-body">
    <div class="main-content">
      <span class="main-copy fs-1 fw-medium">석양이 아름다운</br>형제섬</span>
      <div class="tools">
        <div class="notice-box">
            <span class="notice-title fw-normal fs-6">
              <a href="board_notice.php">공지사항 <i class="fa-solid fa-chevron-right"></i></a>
            </span>
            <a href="board_view.php"><div class="notice-latest fw-lighter fs-6">숯불그릴 가격인상 안내 숯불그릴 가격인상 안내</div></a>
            <span class="notice-date text-end  fw-lighter fs-6">22-08-15</span>
        </div>
        <div class="quick-menu">
          <button type="button" onclick="location.href='map.php'"><i class="fa-solid fa-map-location-dot"></i>오시는 길</button>
          <button type="button" onclick="location.href='view.php'"><i class="fa-solid fa-images"></i>갤러리</button>
          <button type="button" onclick="location.href='deck.php'"><i class="fa-solid fa-campground"></i>데크</button>
          <button type="button" onclick="location.href=''"><i class="fa-solid fa-calendar-plus"></i>예약</button>
        </div>
      </div>
      
    </div>
  </section>





  
<?php
  include("footer.php");
?>

</body>
</html>