<?php
include "base/connect_db.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Product Listing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
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

<!-- Start Content -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline shop-top-menu pb-3 pt-1">
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="shop.php">All</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="shop.php?menu_category=coffee">Coffee</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none"
                               href="shop.php?menu_category=beverage">Beverage</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none" href="shop.php?menu_category=food">Food</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="row">
                <?php
                $menu_category = $_GET['menu_category'];

                if (isset($menu_category)) {
                    $sql = mq("select  * from Menu left join MenuCategory MC on Menu.idx = MC.menuIdx left join Category C on MC.categoryIdx = C.number where C.categoryName = '" . $menu_category . "' ");

//                카테고리 지정 parameter가 존재하지 않을 경우.
                } else {
                    $sql = mq("select *  from Menu ");

                }
                // board테이블에서 idx를 기준으로 내림차순해서 10개까지 표시
                while ($menu = $sql->fetch_array()) {
                    $menu_id = $menu['idx'];
                    $menu_name = $menu['menuName'];
                    $menu_path = $menu['ImgUrl'];
                    ?>
                    <!--            아이템 배열-->
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <a href="shop-single.php?id=<?php echo $menu_id ?>">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="<?php echo $menu_path; ?>">
                                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="shop-single.php"
                                       class="h3 text-decoration-none"><?php echo $menu_name ?></a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--        메뉴 출력 끝-->
                <?php } ?>
            </div>
        </div>

    </div>
</div>
<!-- End Content -->

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