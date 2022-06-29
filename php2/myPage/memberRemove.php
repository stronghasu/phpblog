<?php
include "../connect/connect.php"; //db연결
include "../connect/session.php"; //세션스타트
include "../connect/sessionCheck.php"; //계정로그인확인


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>계정삭제</title>
</head>
<body>
    <?php
    $memberID = $_SESSION['memberID'];
    
    $sql = "DELETE FROM harryMember WHERE memberID = {$memberID}";
    $connect -> query($sql);


    echo "<script>alert('삭제되었습니다.'); location.href='../login/login.php';</script>";
    ?>

</body>
</html>