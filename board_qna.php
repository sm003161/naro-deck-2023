<?php
  $currentMainNav = '커뮤니티';
  $currentPage = '문의하기';

  include("header.php");
?>


<section class="container-lg community">
  <div class="community__list-form">
    <button type="button" name="write" onclick="location.href='board_view.php'" class="btn btn-primary write-btn"><i class="fa-solid fa-pen"></i> 문의하기</button>
    <div class="col-md-5 search-form search-bar">
      <select class="form-select" aria-label="Default select example">
        <option selected>제목</option>
        <option value="1">내용</option>
        <option value="2">글쓴이</option>
      </select>
      <input type="text" class="form-control" aria-label="문의 검색하기" placeholder="문의 검색하기">
      <button class="btn btn-outline-secondary" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
  </div>

  <table class="table border-top align-middle">
    <thead>
      <tr class="table-light">
        <th class="col-md-2">번호</th>
        <th class="col community_title">제목</th>
        <th class="col-md-2">작성일</th>
      </tr>
    </thead>

    <tbody>
      <tr class="community__list">
        <td>1</td>
        <td class="community_title"><a href="board_view.php">숯불그릴 가격인상 안내</a></td>
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