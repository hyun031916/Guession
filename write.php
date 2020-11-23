<?php

session_start();
$userId = $_SESSION['userid'];
$userPwd = $_SESSION['userpwd'];
$title = $_POST['title'];
$content = $_POST['content'];

include './db_conn.php';

$query = "insert into board set userid = '$userId', userpwd = '$userPwd', title = '$title', content = '$content'";

$sql = mysqli_query($conn, $query);
mysqli_close($conn);
echo "<script>
alert('등록되었습니다.');
location.href='board.php';
</script>";
?>