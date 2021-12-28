<?php
header("Content-Type: application/json");

///데이터베이스 연결.////
$conn = mysqli_connect("dongdong-db.ctrzurlhmfdw.ap-northeast-2.rds.amazonaws.com", "admin", 'tpwnd2315!');
mysqli_select_db($conn, 'kau_web_project');

$data = json_decode(file_get_contents('php://input'), true);

$name = $data['name'];
$email = $data['email'];
$question = $data['question'];
$answer = $data['answer'];

$isValid = false;

if($name == '' || $email == '' || $answer == '') {
    echo "모든 정보를 기입해주세요.";
    return;
}

$query = mysqli_query($conn, "SELECT * FROM kau_web_project.User ");


while ($row = mysqli_fetch_assoc($query) ) {

    if($row['question'] == $question && $row['answer'] == $answer && $row['email'] == $email) {
        $isValid = true;
        $id = $row['id'];
        echo "아이디는 $id 입니다.";
        break;
    }

}

if($isValid == false) {
    echo "아이디를 찾을 수 없습니다.";
}