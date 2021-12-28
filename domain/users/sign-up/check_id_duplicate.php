<?php

///데이터베이스 연결.////
$conn = mysqli_connect("dongdong-db.ctrzurlhmfdw.ap-northeast-2.rds.amazonaws.com", "admin", 'tpwnd2315!');
mysqli_select_db($conn, 'kau_web_project');
$result = mysqli_query($conn, 'SELECT * FROM kau_web_project.User');

$userid = $_POST['id'];
$id_duplic = false;

if($userid == '') {
    echo "id를 입력해주세요.";
    return 0;
}

// 중복값이 있으면, while문 탈출.
while ($row = mysqli_fetch_assoc($result)) {

    if ($row['id'] == $userid) {

        $id_duplic = true;
        echo "$userid 는 이미 존재하는 아이디입니다.";
        return 0;
    }
}

if($id_duplic == false) {
    echo "$userid 는 사용 가능한 아이디입니다.";
    return 1;
}


