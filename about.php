<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - About Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">


    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <!--


TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>

<?php
include 'base/navbar.php';
?>

<section class="Info_box">

    <ul class="Info_text">
        <li id="Info_title"><strong>Information</strong></li>
        <li>☕주소 : 충북 청주시 청원구 토성로 163-1</li>
        <li>⏰ 10:00-19:00 월-일 연중무휴</li>
        <li>👩🏻‍🍳 매장에서 직접 굽는 베이커리& all day brunch</li>
        <li>🌿700평규모야외정원,애견동반🆓입장료는없어요</li>
        <li>🚗주차 ~20대 가능</li>
    </ul>

    <div id="map" style="width:500px;height:400px;"></div>


</section>

<?php
include 'base/footer.php';
?>


<!-- Start Script -->
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/templatemo.js"></script>
<script src="assets/js/custom.js"></script>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=3a205c60e9d6eeba49ad7c3159f1d235&libraries=services"></script>
<script>
    var container = document.getElementById('map');
    var options = {
        center: new kakao.maps.LatLng(127.460130, 36.6812766),
        level: 3
    };

    var map = new kakao.maps.Map(container, options);

    // 주소-좌표 변환 객체를 생성합니다
    var geocoder = new kakao.maps.services.Geocoder();

    // 주소로 좌표를 검색합니다
    geocoder.addressSearch('충청북도 청주시 토성로 163-1', function(result, status) {

        // 정상적으로 검색이 완료됐으면
        if (status === kakao.maps.services.Status.OK) {

            var coords = new kakao.maps.LatLng(result[0].y, result[0].x);

            // 결과값으로 받은 위치를 마커로 표시합니다
            var marker = new kakao.maps.Marker({
                map: map,
                position: coords
            });
            // 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
            map.setCenter(coords);
        }
    });
</script>

<!-- End Script -->
</body>

</html>