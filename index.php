<!DOCTYPE html>
<html lang="en">

<head>
    <title>토성마을에 오신 것을 환영합니다.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!--

TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>

<?php
include 'base/navbar.php';
?>


<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/pic3.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1">하늘이 아름다운 이곳</h1>
                            <!-- <h3 class="h2">Aliquip ex ea commodo consequat</h3> -->
                            <p>
                                토성마을은 노을지는 시간에 오시면 더 멋진 사진을 찍으실 수 있답니다.❤
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/pic1.jpg" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">따듯한 햇살이 가득한 주말</h1>
                            <!-- <h3 class="h2">Aliquip ex ea commodo consequat</h3> -->
                            <p>
                                달콤한 디저트, 커피한잔과 함께 정원 속에서 편안한 시간 어떤가요?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/pic2.png" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">커피향이 좋은 지금</h1>
                            <!-- <h3 class="h2">Ullamco laboris nisi ut </h3> -->
                            <p>
                                편안한 토성마을에서 따듯한 커피와 함께 여유를.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->


<!-- Start Featured Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">대표 메뉴</h1>
                <p>
                    카페 토성이 선보이는 시그니쳐 메뉴들을 소개합니다.🌿
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="shop-single.php?id=4">
                        <img src="./assets/img/feature_prod_01.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="shop-single.php?id=4" class="h2 text-decoration-none text-dark">여름의 정원</a>
                        <p class="card-text">
                            마시자마자 입 안에 퍼지는 녹차의 깊은 맛, 여름하면 떠오르는 쌉싸름하면서도 은은한 녹차의 단 맛을 즐기러 오세요 :)
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="shop-single.php?id=3">
                        <img src="./assets/img/feature_prod_02.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="shop-single.php?id=3" class="h2 text-decoration-none text-dark">토성라떼</a>
                        <p class="card-text">
                            깊고 진한 헤이즐넛 크림과 진한 커피의 맛이 단연 최고입니다. 크림을 두번 올려 더 깊은 맛을 만들었어요. 한번 마시면 또 다시 생각나는 맛 <br>⸝⸝ᵕ ᵕ⸝⸝
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="shop-single.php?id=8">
                        <img src="./assets/img/feature_prod_03.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="shop-single.php?id=8" class="h2 text-decoration-none text-dark">수제 티라미슈</a>
                        <p class="card-text">
                            고소하고 달달한 크림과 쌉사름한 에스프레소를 한번에 느껴보세요❤️ 쌀로 만든 수제 사보아르디 쿠키가 들어갔어요 !
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="shop-single.php?id=5">
                        <img src="./assets/img/feature_prod_04.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="shop-single.php?id=5" class="h2 text-decoration-none text-dark">가을의 정원</a>
                        <p class="card-text">
                            진하고 고소한 흑임자가 들어간 가을의 정원이에요! (커피가 들어가지않았어요! )
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="shop-single.php?id=9">
                        <img src="./assets/img/feature_prod_05.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="shop-single.php?id=9" class="h2 text-decoration-none text-dark">흑임자 크로플</a>
                        <p class="card-text">
                            흑임자의 고소함과 바닐라아이스크림의 달콤함이 바삭한 크로플과 만나 더욱 맛있어졌어요 ❤
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="shop-single.php?id=6">
                        <img src="./assets/img/feature_prod_06.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="shop-single.php?id=6" class="h2 text-decoration-none text-dark">밀크티</a>
                        <p class="card-text">
                            전국을 다니며 밀크티를 마셔보고, 최고의 맛을 만들기 위해 연구했습니다. 은은한 단맛과 진한 홍차의 맛을 느껴보세요.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Product -->
<?php
include 'base/footer.php';
?>
<!-- Start Script -->
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/templatemo.js"></script>
<script src="assets/js/custom.js"></script>
<!-- End Script -->
</body>

</html>