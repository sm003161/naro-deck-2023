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
<?php
    include("header.php");
?>
    <section class="gallery container-lg">
        <div id="carouselExampleCaptions" class="carousel slide col-lg-6">
            <div class="carousel-inner col-lg-6">
                <div class="carousel-item active col-lg-6">
                    <div class="carousel-caption d-none d-md-block">
                        <span>사진 1</span>
                    </div>
                        <img src="assets/main-img.jpg" class="d-block w-100" alt="...">
                </div>
            <div class="carousel-item col-lg-6">
                <div class="carousel-caption d-none d-md-block">
                        <span>사진 2</span>
                    </div>
                        <img src="assets/main-img.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>