<?php
header("Content-Type: application/json");

///데이터베이스 연결.////
$conn = mysqli_connect("dongdong-db.ctrzurlhmfdw.ap-northeast-2.rds.amazonaws.com", "admin", 'tpwnd2315!');
mysqli_select_db($conn, 'kau_web_project');
$result = mysqli_query($conn, 'SELECT * FROM kau_web_project.User');

$usernick = $_POST['nickname'];

if($usernick == '') {
    echo "닉네임을 입력해주세요";
    return;
}

while ($row = mysqli_fetch_assoc($result)) {

    if ($row['nickname'] == $usernick) {
        $nick_duplic = true;
        echo "$usernick 은 이미 존재하는 닉네임입니다.";
        break;

    }
}

if ($nick_duplic == false) {
    echo "$usernick 은 사용 가능한 닉네임입니다.";
}




