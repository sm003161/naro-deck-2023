<?php
  $currentMainNav = '데크';
  $currentPage = '데크미리보기';

  include("header.php");
?>


<button class="cta"><i class="fa-solid fa-calendar-check"></i> 지금 예약하기</button>  

<section class="container-lg deck-preview">

  <div class="row">
    <span class="col d-flex justify-content-end indicator">
      <a href="#"><i class="fa-solid fa-chevron-left"></i></a>
    </span>
    <h3 class="col-3 fs-4">데크 1</h3>
    <span class="col d-flex indicator">
      <a href="#"><i class="fa-solid fa-chevron-right"></i></a>
    </span>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div>
        <h4><i class="fa-solid fa-list"></i> 기본정보</h4>
        <table class="table border-top">
          <tbody>
            <tr>
              <th class="text-center align-middle table-light">이름</th>
              <td>데크1</td>
            </tr>
            <tr>
              <th class="text-center align-middle table-light">인실/면적</th>
              <td>
                기준인원 : 4<br>
                최대인원 : 4<br>
                면적 : 16㎡
              </td>
            </tr>
            <tr>
              <th class="text-center align-middle table-light">편의시설</th>
              <td>공동시설 *</td>
            </tr>
            <tr>
              <th class="text-center align-middle table-light">용도</th>
              <td>야영데크</td>
            </tr>
            <tr>
              <th class="text-center align-middle table-light">입퇴실시간</th>
              <td>12:00 ~ 12:00</td>
            </tr>
          </tbody>
          <caption class="text-right">* 공동시설 : 공동샤워장, 공동취사장, 공동화장실</caption>
        </table>
      </div>


      <div>
        <h4><i class="fa-regular fa-credit-card"></i> 가격정보</h4>
        <table class="table border-top">
          <thead class="text-center align-middle table-light">
            <th class="col-sm-4"></th>
            <th class="col-sm-4">성수기</th>
            <th class="col-sm-4">비수기</th>
          </thead>
          <tbody>
            <tr>
              <th class="text-center align-middle table-light">주중</th>
              <td class="text-center align-middle">10,000 원</td>
              <td class="text-center align-middle">10,000 원</td>
            </tr>
            <tr>
              <th class="text-center align-middle table-light">주말</th>
              <td class="text-center align-middle">10,000 원</td>
              <td class="text-center align-middle">10,000 원</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>




    <div class="col-sm-6">
      <h4><i class="fa-regular fa-image"></i> 미리보기</h4>
      <div class="container gallery">
        <div class="row">
          <div>
            <div id="carouselExampleIndicators" class="carousel slide"  data-bs-ride="true">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="carousel-item__container">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="card">
                        <img src="assets/main-img.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">사진 1</p>
                        </div>
                      </div>
                    </button>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-item__container">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="card">
                        <img src="assets/main-img.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">사진 2</p>
                        </div>
                      </div>
                    </button>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-item__container">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="card">
                        <img src="assets/main-img.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">사진 3</p>
                        </div>
                      </div>
                    </button>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-item__container">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="card">
                        <img src="assets/main-img.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">사진 4</p>
                        </div>
                      </div>
                    </button>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-item__container">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="card">
                        <img src="assets/main-img.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">사진 5</p>
                        </div>
                      </div>
                    </button>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-item__container">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="card">
                        <img src="assets/main-img.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">사진 6</p>
                        </div>
                      </div>
                    </button>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-item__container">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="card">
                        <img src="assets/main-img.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">사진 7</p>
                        </div>
                      </div>
                    </button>
                  </div>
                </div>
              </div>


              <!-- Thumbnails -->
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" class="active" data-bs-slide-to="0" aria-label="Slide 0" aria-current="true">
                  <img class="d-block rounded" src="assets/main-img.jpg" class="img-fluid" />
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators"data-bs-slide-to="1" aria-label="Slide 1">
                  <img class="d-block rounded" src="assets/main-img.jpg" class="img-fluid" />
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators"data-bs-slide-to="2" aria-label="Slide 2">
                  <img class="d-block rounded" src="assets/main-img.jpg" class="img-fluid" />
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators"data-bs-slide-to="3" aria-label="Slide 3">
                  <img class="d-block rounded" src="assets/main-img.jpg" class="img-fluid" />
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators"data-bs-slide-to="4" aria-label="Slide 4">
                  <img class="d-block rounded" src="assets/main-img.jpg" class="img-fluid" />
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators"data-bs-slide-to="5" aria-label="Slide 5">
                  <img class="d-block rounded" src="assets/main-img.jpg" class="img-fluid" />
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators"data-bs-slide-to="6" aria-label="Slide 6">
                  <img class="d-block rounded" src="assets/main-img.jpg" class="img-fluid" />
                </button>
              </div>
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
      </div>
    </div>
  </div>



</section>

<section class="container-lg deck-plan text-center">
  <h3 class="fs-4">데크배치도</h3>

<?php
  include("deck_plan.php");
?>

</section>

<?php
  include("footer.php");
?>