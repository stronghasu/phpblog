<?php
include "../connect/connect.php";

for($i=1; $i<=300; $i++){
    $regTime = time();

    $sql = "INSERT INTO harryBoard(memberID, boardTitle, boardContents, boardView, regTime) VALUES(8,'게시판 타이틀${i}입니다','게시판 내용${i}입니다. 이곳은스타벅스 나는 공부중입니다. 오늘 가나슈케이크가 맛있었어요 크림치즈 베이글도','1','$regTime')";
    $connect -> query($sql);
} 



?>