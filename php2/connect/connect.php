<?php

    $host = "localhost";
    $user = "gosuhasu";
    $pass = "fps74az##";
    $db = "gosuhasu";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    // php 에러났는지 안났는지 확인하는거
    // 에러나면 false 에러안나면 true
    if( mysqli_connect_errno() ){
        echo "DATABASE connect False";

    } else {
        // echo "DATABASE connect True";

    }
?>