<?php
session_start();
if(isset($_SESSION['userid']) && isset($_SESSION['userpwd'])){
    unset($_SESSION["userid"]);
    unset($_SESSION["userpwd"]);

    echo("<script>alert('로그아웃했습니다.');location.href='main.php'</script>");
}else{
    echo("<script>alert('로그인을 하지 않았습니다.'); location.href='main.php'</script>");
}
?>