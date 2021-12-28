<?php
header("Content-Type: application/json");

///데이터베이스 연결.////
$conn = mysqli_connect("dongdong-db.ctrzurlhmfdw.ap-northeast-2.rds.amazonaws.com", "admin", 'tpwnd2315!');
mysqli_select_db($conn, 'kau_web_project');

$data = json_decode(file_get_contents('php://input'), true);

$id = $data['id'];
$name = $data['name'];
$email = $data['email'];
$question = $data['question'];
$answer = $data['answer'];

$isValid = false;

if($name == '' || $email == '' || $answer == '' || $id == '') {
    echo "모든 정보를 기입해주세요.";
    return;
}

$query = mysqli_query($conn, "SELECT * FROM kau_web_project.User ");


while ($row = mysqli_fetch_assoc($query) ) {

    if($row['id'] == $id &&$row['question'] == $question && $row['answer'] == $answer && $row['email'] == $email) {
        $isValid = true;
        $bytes = openssl_random_pseudo_bytes(4);
        $pw = bin2hex($bytes);
        mysqli_query($conn, "UPDATE User SET pw= '$pw' WHERE id = '$id' ");
        echo "임시비밀번호는 $pw 입니다. 로그인 후 수정해주세요.";
        return;
    }

}

if($isValid == false) {
    echo "비밀번호를 찾을 수 없습니다.";
}

?>
