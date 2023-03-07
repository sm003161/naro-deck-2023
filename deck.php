<?php
  $currentMainNav = '데크';
  $currentPage = '데크배치도';

  include("header.php");
  // include("lnb.php");
?>


<section class="container-lg deck-plan text-center">
  <div class="click-me--pc">
    <span class="basic-padding">
      <i class="fa-solid fa-magnifying-glass"></i> 아래의 배치도에서 원하는 데크를 클릭해 자세한 정보를 확인해 보세요.
    </span>
  </div>
  <div class="click-me--mo">
    <span class="basic-padding">
      <i class="fa-solid fa-magnifying-glass"></i> 아래의 배치도를 좌우로 이동해<br/>원하는 데크를 눌러 자세한 정보를 확인해 보세요.
    </span>
  </div>

  <div class="deck-plan__layout">
    <img src="assets/map-img.png" alt="데크배치도" class="rounded">
    <a href="deck_one.php">
      <span class="badge deck-plan__layout--badge">1</span>
    </a>
  </div>




      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="assets/main-img.jpg" alt="Hills" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
  include("footer.php");
?>