<?php

///데이터베이스 연결.////
$conn = mysqli_connect("dongdong-db.ctrzurlhmfdw.ap-northeast-2.rds.amazonaws.com", "admin", 'tpwnd2315!');
mysqli_select_db($conn, 'kau_web_project');


echo '<script> alert("회원가입을 완료했습니다."); location.href="/index.php"; </script>';

//닉네임 입력 안하면, 이름을 닉네임으로, 데이터 베이스 저장 (중복되지 않을 임의 값을 닉네임으로 주는 것도 생각할 것.) ///////
$sql = "INSERT INTO kau_web_project.User  (name, nickname, id, pw, email,question,answer) VALUES( '{$_POST['name']}', '{$_POST['nickname']}','{$_POST['id']}','{$_POST['pw']}','{$_POST['email']}','{$_POST['question']}','{$_POST['answer']}')";

$result = mysqli_query($conn, $sql);

$conn->close();









