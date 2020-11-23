<?php
$idx=$_GET['no'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta cahrset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>삭제하기 위한 폼</title>
    <!--BootStrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
   <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- 부가적인 테마 -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="col-sm-6 col-md-offset-3">
        <form role="form" method="POST" action='shop_list_del.php?rowx=<?php echo $idx?>'>
            <div class="form-group">
                <label for="inputName">비밀번호 : </label>
                <input type="text" class="form-control" name="pass" id="inputName" placeholder="비밀번호를 입력해 주세요">
            </div>
        </form>
    </div>
</body>
</head>