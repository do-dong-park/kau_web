<!--세션 시작-->
<?php
session_start();

function Decrypt($str, $secret_key = 'secret key', $secret_iv = 'secret iv')

{

    $key = hash('sha256', $secret_key);

    $iv = substr(hash('sha256', $secret_iv), 0, 32);

    return openssl_decrypt(

        base64_decode($str), "AES-256-CBC", $key, 0, $iv

    );

}

$encrypted = $_COOKIE['user_id'];

$secret_key = "123456789";

$secret_iv = "#@$%^&*()_+=-";

$decrypted = Decrypt($encrypted, $secret_key, $secret_iv);

?>

<!-- Start Top Nav -->
<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between">
            <div>
                <i class="fa fa-envelope mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">rnlgksgudrb@naver.com</a>
                <i class="fa fa-phone mx-2"></i>
                <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-7722-9173</a>
            </div>
            <div>
                <a class="text-light" href="https://www.instagram.com/tosung_village/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://smartstore.naver.com/tosung_village?NaPm=ct%3Dkwwbm2ag%7Cci%3Dshopn%7Ctr%3Dslsl%7Chk%3De6fd8b4c7a14b097c51a965bcdd3defca01ff2dd%7Ctrx%3Dundefined" target="_blank" rel="sponsored"><i class="fab fas fa-shopping-basket fa-sm fa-fw me-2"></i></a>
            </div>
        </div>
    </div>
</nav>
<!-- Close Top Nav -->


<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
            토성마을
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="community.php">Community</a>
                    </li>
                </ul>
            </div>
            <?php

            //        자동로그인 상태면, 쿠키에서 복호화시킨 값을 아이디로 갖는다.
            if(isset($_COOKIE['user_id'])) {
                $_SESSION['user_id'] =  $decrypted;
                $nickname = $_SESSION['user_id'];
                $get_info = mq( "SELECT nickname FROM kau_web_project.User WHERE id = '".$_SESSION['user_id']."' ");

                $row_info =  $get_info->fetch_array();
                $user_name = $row_info['nickname'];
            }

            //자동로그인이 아닌 상황이라면, 세션에 있는 아이디를 사용한다.
            if(isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];

                if(!isset($_COOKIE['user_id'])) {
                    $user_name = $_SESSION['user_name'];
                }
                echo '
                    <div class="logined_profile">
                        <div class="helloUser">' .$user_name. '님 환영합니다.</div>
                        <div class="outAndUpdate">
                     
                            <a href="#">내 정보</a> |
                            <a href="/domain/users/sign-out/logout.php">로그아웃</a>  
                        </div>
                    </div>';
            } else {
                echo '
                <div class="navbar align-self-center d-flex">
                    <a class="nav-icon position-relative text-decoration-none" href="/domain/users/sign-in/login.php">
                        <i class="fa fa-fw fas fa-sign-in-alt text-dark mr-3"></i>
                    </a>
                </div>';
            }
            ?>

        </div>

    </div>
</nav>
<!-- Close Header -->