<?php
  $currentMainNav = '갤러리';
  $currentPage = '전망';

  include("header.php");
?>


<section class="container-lg gallery">
  <div class="row justify-content-lg-center">
    <div class="col-lg-7">
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

        <!-- Prev & Next -->
        <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

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
</section>


<?php
  include("footer.php");
?>


<script>
  const myCarouselElement = document.querySelector('#carouselExampleIndicators')

  const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 500000,
    wrap: true
  })

  const myCarouselIndicator = document.querySelector
</script>