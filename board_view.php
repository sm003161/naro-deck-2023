<?php
  $currentMainNav = '게시판';
  $currentMainNavEng = 'board';
  $currentPage = '공지사항';

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
      <tr class="board-view__title-row table-light">
        <th class="col board-view__title">숯불그릴 가격인상 안내</th>
        <th class="board-view__title-info">
          <span>서*재</span>
          <span>22-08-15</span>
        </th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td colspan=2 class="board__view_content">
          숯불 재료 및 가스가격 급등으로 부득이 숯불그릴 가격을 4인기준 기존2만원에서 3만원으로 인상하게 되었음을 양지해 주시길 바랍니다. 개별적으로 숯불 그릴을 준비 해오셔서 이용하셔도 무방하니 참고해 주세요.숯불 재료 및 가스가격 급등으로 부득이 숯불그릴 가격을 4인기준 기존2만원에서 3만원으로 인상하게 되었음을 양지해 주시길 바랍니다. 개별적으로 숯불 그릴을 준비 해오셔서 이용하셔도 무방하니 참고해 주세요.숯불 재료 및 가스가격 급등으로 부득이 숯불그릴 가격을 4인기준 기존2만원에서 3만원으로 인상하게 되었음을 양지해 주시길 바랍니다. 개별적으로 숯불 그릴을 준비 해오셔서 이용하셔도 무방하니 참고해 주세요.숯불 재료 및 가스가격 급등으로 부득이 숯불그릴 가격을 4인기준 기존2만원에서 3만원으로 인상하게 되었음을 양지해 주시길 바랍니다. 개별적으로 숯불 그릴을 준비 해오셔서 이용하셔도 무방하니 참고해 주세요.숯불 재료 및 가스가격 급등으로 부득이 숯불그릴 가격을 4인기준 기존2만원에서 3만원으로 인상하게 되었음을 양지해 주시길 바랍니다. 개별적으로 숯불 그릴을 준비 해오셔서 이용하셔도 무방하니 참고해 주세요.숯불 재료 및 가스가격 급등으로 부득이 숯불그릴 가격을 4인기준 기존2만원에서 3만원으로 인상하게 되었음을 양지해 주시길 바랍니다. 개별적으로 숯불 그릴을 준비 해오셔서 이용하셔도 무방하니 참고해 주세요.
        </td>
      </tr>
      <tr>
        <td colspan=2 class="board__view_modify-group">
          <button type="button" class="btn btn-secondary">수정</button>
          <button type="button" class="btn btn-delete">삭제</button>
        </td>
      </tr>
    </tbody>
    
    <tfoot>
      <tr>
        <td colspan=2 class="board__view_button-group">
          <button type="button" class="btn">이전</button>
          <button type="button" class="btn" onclick="location.href='qna.php'">목록</button>
          <button type="button" class="btn">다음</button>
        </td>
      </tr>
    </tfoot>
  </table>

</section>

<?php
  include("footer.php");
?>