<?php
  $currentMainNav = '게시판';
  $currentMainNavEng = 'board';
  $currentPage = '문의사항';

  include("header.php");

  echo "<div class=\"heading-box\">
    <div class=\"heading-box--bg heading-box--".$currentMainNavEng."\"></div>
    <h1>".$currentPage."</h1>
  </div>";
?>


<section class="container-lg board">
  <?php include("board_header.php");?>

  <div class="m-4"></div>

  <table class="table border-top align-middle">
    <thead>
      <tr class="table-light">
        <th class="col-md-2">번호</th>
        <th class="col board_title">제목</th>
        <th class="col-md-2">작성일</th>
      </tr>
    </thead>

    <tbody>
      <tr class="board__list">
        <td>1</td>
        <td class="board_title"><a href="board_view.php">숯불그릴 가격인상 안내</a></td>
        <td>22-08-15<br>서*재</td>
      </tr>
    </tbody>
  </table>

  <div class="m-4"></div>








  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item"><a class="page-link" href="#">6</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</section>

<?php
  include("footer.php");
?>