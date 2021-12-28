<?php

include $_SERVER['DOCUMENT_ROOT']."/base/connect_db.php";


//각 변수에 write.php에서 input name값들을 저장한다

$bno = $_POST['idx'];

echo $bno;


$gotoList = 'https://dongdong-24.shop/community.php';


$sql = mq("update kau_web_project.Comment set status = 'I' where postIdx='$bno';");
$sql = mq("update kau_web_project.Post set status='I' where idx='$bno';");

?>

<script type="text/javascript">alert("게시글이 삭제되었습니다."); location.href='<?php echo $gotoList ?>'</script>
