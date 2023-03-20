<?php
  $currentMainNav = '커뮤니티';
  $currentPage = '공지사항';

  include("header.php");
?>


<section class="container-lg community-notice">
  <div class="col-sm-4 search-form">    
    <input type="text" class="form-control" aria-label="" placeholder="검색어를 입력하세요">
    <button class="btn btn-outline-secondary" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
  </div>

  <table class="table border-top align-middle">
    <thead>
      <th class="col-sm-2 text-center mr-3">번호</th>
      <th class="col title">제목</th>
      <th class="col-sm-2 text-center">게시일</th>
    </thead>

    <tbody>
        <tr>
          <td class="text-center">2</td>
          <td class="title"><a href="#">숯불그릴 가격인상 안내</a></td>
          <td class="text-center">2022-08-15</td>
        </tr>
        <tr>
          <td class="text-center">1</td>
          <td class="title"><a href="#">객실 기준정원 및 최대정원 조정(22년6월1일 시행)</a></td>
          <td class="text-center">2022-08-15</td>
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