<div class="board__list-form
  <?php if ($currentPage == '공지사항'){
      echo 'justify-content-center';
  } ?>
  ">

  <?php if ($currentPage == '문의사항') {
  echo '<button type="button" name="write" onclick="location.href=\'board_view.php\'" class="btn btn-primary write-btn"><i class="fa-solid fa-pen"></i> 문의하기</button>';};?>

  <div class="col-md-5 search-form">
    <input type="text" class="form-control" aria-label="" placeholder="<?php echo $currentPage;?> 검색하기">
    <button class="btn btn-outline-secondary" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
  </div>
</div>





