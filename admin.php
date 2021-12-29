<?php
include "base/connect_db.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">


    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <!--


TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
<?php
include 'base/navbar.php';

function del_User($idx){
    $del_user_qurey = ("UPDATE User SET status = 'B' WHERE idx =",$idx);
    $del_post_qurey = ("UPDATE Post SET isSecret = 'Y' WHERE userIdx=",$idx);
}
?>
    <?php
    $user_idx = '';
    $user_name = '';
    $user_nickname = '';
    $user_id = '';
    $user_email = '';
    $user_status = '';
    $user_created = '';

    $sql = mq("select * from User where User.idx != 0");
    ?>

    <!-- Open Content -->
    <section class="Info_box">
        <table class="type09">
            <thead>
                <tr>
                    <th scope="cols">IDX</th>
                    <th scope="cols">이름</th>
                    <th scope="cols">닉네임</th>
                    <th scope="cols">USER ID</th>
                    <th scope="cols">USER EMAIL</th>
                    <th scope="cols">상태</th>
                    <th scope="cols">가입일</th>
                    <th scope="cols">회원삭제</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while ($user = $sql->fetch_array()) {
                    $user_idx = $user['idx'];
                    $user_name = $user['name'];
                    $user_nickname = $user['nickname'];
                    $user_id = $user['id'];
                    $user_email = $user['email'];
                    $user_status = $user['status'];
                    $user_created = $user['createdAt'];
                ?>
                <tr>
                    <th scope="row"><?php echo $user_idx; ?></th>
                    <td><?php echo $user_name; ?></td>
                    <td><?php echo $user_nickname; ?></td>
                    <td><?php echo $user_id; ?></td>
                    <td><?php echo $user_email; ?></td>
                    <td><?php echo $user_status; ?></td>
                    <td><?php echo $user_created; ?></td>
                    <td><button onclick="return del_User(<?php echo $user_idx; ?>);">삭제</button>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>  
    <!-- Close Content -->





    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
<?php
include 'base/footer.php';
?>
</body>

</html>