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

    <!-- 메인이미지 -->
    <section class="main-body">
        <div class="main-content">
            <span class="main-copy fs-1 fw-medium">석양이 아름다운</br>형제섬</span>
            <div class="tools">
                <div class="notice-box">
                        <span class="notice-title fw-normal fs-6">
                            <a href="">공지사항 <i class="fa-solid fa-chevron-right"></i></a>
                        </span>
                        <a href=""><div class="notice-latest fw-lighter fs-6">숯불그릴 가격인상 안내 숯불그릴 가격인상 안내</div></a>
                        <span class="notice-date text-end  fw-lighter fs-6">22-08-15</span>
                </div>
                <div class="quick-menu">
                    <button type="button" onclick="location.href='map.php'"><i class="fa-solid fa-map-location-dot"></i>오시는 길</button>
                    <button type="button" onclick="location.href=''"><i class="fa-solid fa-images"></i>갤러리</button>
                    <button type="button" onclick="location.href=''"><i class="fa-solid fa-campground"></i>데크</button>
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