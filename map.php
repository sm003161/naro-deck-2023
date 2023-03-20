<?php
  $currentMainNav = '소개';
  $currentPage = '오시는길';

  include("header.php");
?>


<section class="map container-lg">
  <h3 class="fs-4">자가용 이용 시</h3>
  <div class="row">
    <div class="map-address col-lg-6 align-middle text-center">
      <div class="text-center">전남 고흥군 동일면 우주로 2464-3</div>
      <div class="contact text-center basic-padding"><i class="fa-solid fa-phone"></i>전화문의<span class="fw-bolder">061-832-2004</span></div>
      <button type="button" onclick="window.open('https://naver.me/5SWDCaUu')" target="_blank"class="basic-padding fw-bold"><span class="fw-bolder">N</span>네이버 지도에서 보기</button>
      <button type="button" onclick="window.open('http://kko.to/aPhhXXnjM')" target="_blank"class="basic-padding fw-bold"><span class="fw-bolder">D</span>다음 지도에서 보기</button>
    </div>

    <div class="map-map col-lg-6">
      <div class="videowrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3287.6389072804336!2d127.45503905119521!3d34.51203758038745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356d8d92a6f5b7a9%3A0x2f8c1e1fcb4c806c!2z7KCE652864Ko64-EIOqzoO2dpeq1sCDrj5nsnbzrqbQg7Jqw7KO866GcIDI0NjQtMw!5e0!3m2!1sko!2skr!4v1565076381839!5m2!1sko!2skr" width="100%" height="400" frameborder="" style="" allowfullscreen="" ></iframe>
      </div>
    </div>
  </div>
</section>

<div class="m-5"></div>

<section class="map container-lg">
  <h3 class="fs-4">대중교통 이용 시</h3>
  <table class="table border-top">
    <tr>
      <th class="col-lg-3 text-center align-middle table-light">버스</th>
      <td>고흥버스터미널까지 연결되는 고속·직행버스 : 센트럴시티[서울]에서 하루 4회 운행<br />고흥버스터미널까지 연결되는 시외[완행]버스 : 광주, 순천, 여수<br />※ 위 지역 외 출발 시 '순천터미널' 까지 오신 후 순천터미널에서 고흥행 버스를 이용하세요.</td>
    </tr>

    <tr>
      <th class="col-lg-3 text-center align-middle table-light">기차</th>
      <td>전라도 순천역[KTX]역에서 순천터미널까지 택시[택시이동거리 1.5km]로 이동하신 후 고흥행 버스를 이용하세요.</td>
    </tr>
    <tr>
      <th class="col-lg-3 text-center align-middle table-light">항공</th>
      <td>여수공항에서 순천터미널까지 택시[택시이동거리 18.5km]로 이동하신 후 고흥행 버스를 이용하세요.</td>
    </tr>
    <tr>
      <th class="col-lg-3 text-center align-middle table-light">고흥공용<br/>버스터미널에서</th>
      <td>
        <ol>
          <li>택시 - 고흥버스터미널 도착 후 택시 이용[이동거리 25.5km] 요금은 약 22,500원</li>
          <li>버스 - [고흥-동일], [고흥-염포], [고흥-봉래] 버스를 타시고 동포 정류장에서 하차하셔서 1분정도 걸어오세요.</li>
        </ol>
      </td>
    </tr>
  </table>
</section>



<?php
  include("footer.php");
?>