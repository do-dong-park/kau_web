<?php
include "base/connect_db.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Product Detail Page</title>
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

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
<?php
include 'base/navbar.php';
?>
    <?php
    $menu_id = $_GET['id'];

    $sql = mq("select Menu.idx, menuName, menuNameEn, menuDesc, ImgUrl, volume, calorie, caffeine, sugar, protein, fat, na, MC.categoryIdx  from Menu left join MenuNutrient MN on Menu.idx = MN.menuIdx left join MenuCategory MC on Menu.idx = MC.menuIdx where Menu.idx = '".$menu_id."'");

    $menu = $sql->fetch_array();
    $menu_category = $menu['categoryIdx'];
    $menu_id = $menu['idx'];
    $menu_name = $menu['menuName'];
    $menu_english = $menu['menuNameEn'];
    $menu_desc = $menu['menuDesc'];
    $menu_path = $menu['ImgUrl'];
    $volume = $menu['volume'];
    $calorie = $menu['calorie'];
    $caffeine = $menu['caffeine'];
    $sugar = $menu['sugar'];
    $protein = $menu['protein'];
    $fat = $menu['fat'];
    $na = $menu['na'];

    // 메뉴가 푸드 카테고리에 속할 경우, 1. 단위가 g, 2. 카페인이 없다.
    if($menu_category == 3) {
        $volUnit = "g";
        $caffeineList = "";
        $caffeineUnit = "";
    } else {
        $volUnit = "ml";
        $caffeineList = "<span>카페인 : </span>";
        $caffeineUnit = "ml";
    }
    ?>

    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="<?php echo $menu_path ?>" alt="Card image cap" id="product-detail">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><?php echo $menu_name ?></h1>
                            <p class="h3 py-2"><?php echo $menu_english ?></p>


                            <h6>Description:</h6>
                            <p><?php echo $menu_desc ?></p>

                            <h6>Nutrient:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>1회 제공량 : <?php echo $volume ?><?php echo $volUnit ?></li>
                                <li>칼로리 : <?php echo $calorie ?>kcal</li>
                                <?php echo $caffeineList.$caffeine.$caffeineUnit ?>
                                <li>당류 : <?php echo $sugar ?>g</li>
                                <li>단백질 : <?php echo $protein ?>g</li>
                                <li>포화지방 : <?php echo $fat ?>g</li>
                                <li>나트륨 : <?php echo $na ?>mg</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->





    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->
<?php
include 'base/footer.php';
?>
</body>

</html>