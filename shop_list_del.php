<?php
$_idx = $_GET['rowx'];
$_pass= $_POST['pass'];
include './db_conn.php';

$sql = "select * from register where id = $_idx";
$result = mysqli_query($conn, $sql);
$re = mysqli_fetch_array($result);
if($_pass == "1111"){
    $sql1 = "DELETE FROM shop_data where id=$_idx";
    $result2 = mysqli_query($conn, $sql1);
    echo "<script>
    alert('삭제되었습니다.');
    location.href='shop_list.php';
    </script>";
}else{
    echo "<script> alert('일치하지 않습니다.'); history.go(-1);</script>";
}
?>