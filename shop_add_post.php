<?php

include "./db_conn.php";
$uploaddir = "./shop_img/";
$imageinfo = array();
$_name = $_POST['name'];
$_comment = $_POST['comment'];
$_price = $_POST['price'];
$_category = $_POST['category'];
$_memo = $_POST['memo'];

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

$sql = "insert into shop_data(name, comment, price, category, memo, img) 
values ('$_name', '$_comment', '$_price', '$_category', '$_memo', '$uploadfile')";
if(mysqli_query($conn, $sql)){
                
    echo "<script>
            alert('상품이 등록되었습니다.');
            location.href='shop_list.php';
            </script>";
    }
?>