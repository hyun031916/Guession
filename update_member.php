<?php

include "./db_conn.php";
$idx = $_GET['idx'];
$userPwd = $_POST['userPwd'];
$userPwd2 = $_POST['userPwd2'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$city = $_POST['city'];
echo $idx;
echo $userPwd, $email, $tel, $city;

$uploaddir = "./shop_img/";
$imageinfo = array();

foreach($_FILES['userfile']['name'] as $key => $name){
    $tmp_name = $_FILES['userfile']['tmp_name'][$key];
    $uploadfile = $uploaddir.$_FILES['userfile']['name'][$key];
    $f_name = $_FILES['userfile']['tmp_name'];
    $imageinfo = getimagesize($_FILES['userfile']['tmp_name'][$key]);
    $imageinfo0 = $imageinfo[0];
    $imageinfo1 = $imageinfo[1];
    $imageinfo2 = $imageinfo[2];
    
    if(move_uploaded_file($tmp_name, $uploadfile)){
        echo "정상적으로 업로드되었습니다.";
    }else{                       
        echo "파일 업로드 실패";
    }
}

echo $uploadfile;

//name, content : table의 필드 이름
//$name, $txt : 사용자가 수정한 값
//결과 값 있는 쿼리 : select
//결과 값 없는 쿼리 : insert, update, delete


if($userPwd==$userPwd2){
    $query = "update register set passwd='$userPwd', email = '$email', tel = '$tel', city = '$city', profile = '$uploadfile' where id = $idx";
    if(mysqli_query($conn, $query)){
    echo "<script>
    alert('수정되었습니다.');
    location.href='mypage.php';
    </script>";
    }
}else{
    echo "<script> alert('비밀번호가 일치하지 않습니다.'); history.go(-1);</script>";
}
?>