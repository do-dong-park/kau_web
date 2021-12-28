<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>회원 정보 수정</title>
    <link rel="apple-touch-icon" href="/assets/img/apple-icon.png">
    <link rel="stylesheet" href="css/modify-my-profile.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/templatemo.css">
    <link rel="stylesheet" href="/assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
</head>
<body>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/base/navbar.php';
?>

<?php
//수정하러 들어갔을 때 처음 보이게 되는 값
$id = $_POST['id'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];

//만약, 버튼이 눌리면, 입력되어 있는 값 그대로 DB로 직행함.
?>

<section class="check-my-profile-section">

    <form name="register" action="modify_register-my-profile.php" method="post" onsubmit="return checkInput()" class="signup-form">

        <div class="check-my-profile-title">
            <h1 class="title">내 회원정보 <span>수정</span></h1>
            <input type="submit" class="modify-my-profile-btn btn btn-outline-secondary btn-sm" value="수정 정보 저장">
        </div>

        <table class="check-my-profile-table table table-striped table-hover">

            <colgroup>
                <col span="1" class="my-profile-info-index">
                <col span="1" class="my-profile-info-value">
                <col span="1" class="my-profile-info-mf-btn">
            </colgroup>

            <tbody>

            <tr>
                <th scope="row">ID</th>
                <!--            colspan은 다음칸 n 칸이 비어있을 때 숫자 n으로 값을 비우는 역할을 수행한다. -->
                <td>
                    <input type="text" class="form-control" name="id"
                           value="<?= $id ?>" readonly>
                </td>
            </tr>

            <tr>
                <th scope="row">PW 변경</th>

                <td>
                    <table class="table modify-my-pw-table">
                        <tr>
                            <td>
                                <input type="password" class="form-control new-pw" name="new-pw" id="new_pw"
                                       placeholder="새 비밀번호">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" class="form-control new-pw-confirm" id="conf_pw" name="new-pw-conf"
                                       placeholder="새 비밀번호 확인">
                            </td>
                        </tr>

                    </table>
                </td>
            </tr>

            <tr>
                <th scope="row">닉네임 변경</th>
                <td>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control mf-nickname" placeholder="닉네임"
                               name="nickname" id="nickname" value=<?= $nickname ?>>
                        <button type="button" class="btn btn-outline-secondary btn-sm" id="nickValidBtn">중복 검사</button>
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">이메일</th>
                <!--            colspan은 다음칸 n 칸이 비어있을 때 숫자 n으로 값을 비우는 역할을 수행한다. -->
                <td>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control mf-email" placeholder="이메일" name="email" id="email"
                               value=<?= $email ?>>
                        <button type="button" class="btn btn-outline-secondary btn-sm" id="emailValidBtn">중복 검사</button>
                    </div>
                </td>
            </tr>

            </tbody>
        </table>
    </form>


</section>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/base/footer.php';
?>
</body>

<script>
    const originPw = document.getElementById("origin_pw");
    const newPW = document.getElementById("new_pw");
    const confPW = document.getElementById("conf_pw");
    const nickname = document.getElementById("nickname");
    const email = document.getElementById("email");

    const checkNick = document.getElementById("nickValidBtn");
    const checkEmail = document.getElementById("emailValidBtn");

    var isNickChecked = false;
    var isEmailChecked = false;
    const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    checkNick.onclick = function () {
        var userNickname = nickname.value;
        makeNicknameRequest('https://dongdong-24.shop/domain/users/sign-up/check_nickname_duplicate.php', userNickname);
    }

    checkEmail.onclick = function () {
        var userEmail = email.value;
        makeEmailRequest('https://dongdong-24.shop/domain/users/sign-up/check_email_duplicate.php', userEmail);
    }

    function makeNicknameRequest(url, userNickname) {

        httpRequest = new XMLHttpRequest();

        if (!httpRequest) {
            alert('XMLHTTP 인스턴스를 만들 수가 없어요 ㅠㅠ');
            return false;
        }

        httpRequest.onreadystatechange = alertNicknameContents;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('nickname=' + encodeURIComponent(userNickname));
    }

    function alertNicknameContents() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                alert(httpRequest.responseText);
                if (httpRequest.responseText.includes("가능")) {
                    isNickChecked = true;
                    nicknameValid.style.visibility = "visible";
                } else {
                    isNickChecked = false;
                }
            } else {
                alert('request에 뭔가 문제가 있어요.');
            }
        }
    }

    function makeEmailRequest(url, userEmail) {

        httpRequest = new XMLHttpRequest();

        if (!httpRequest) {
            alert('XMLHTTP 인스턴스를 만들 수가 없어요 ㅠㅠ');
            return false;
        }

        if (!userEmail.match(mailformat))
        {
            alert('올바른 이메일 형식이 아닙니다.');
            return false;
        }

        httpRequest.onreadystatechange = alertEmailContents;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('email=' + encodeURIComponent(userEmail));
    }

    function alertEmailContents() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                alert(httpRequest.responseText);
                if (httpRequest.responseText.includes("가능")) {
                    isEmailChecked = true;
                    emailValid.style.visibility = "visible";
                } else {
                    isEmailChecked = false;
                }
            } else {
                alert('request에 뭔가 문제가 있어요.');
            }
        }
    }

    function checkInput() {
        if (originPw.value === '' || newPW.value === '' || confPW.value === '' || nickname.value === '' || email.value === '' ) {
            alert("필수 항목을 모두 입력해주세요.");
            return false;
        } else if (newPW.value !== confPW.value) {
            alert("비밀번호가 일치하지 않습니다.");
            return false;
        } else if (isNickChecked === false) {
            alert("닉네임을 다시 검사해주세요.");
            return false;
        } else if (isEmailChecked === false) {
            alert("이메일을 다시 검사해주세요.");
            return false;
        } else {
            return true;
        }
    }
</script>
</html>
