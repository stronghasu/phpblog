<?php

include "../connect/connect.php";
include "../connect/session.php";
include "../connect/sessionCheck.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마이페이지</title>
    <?php
    
    include "../include/style.php";

    ?>
</head>
<body>
    <?php
    
    include "../include/skip.php";
    
    ?>
    <!-- //skip -->
    <?php
    
    include "../include/header.php";
    
    ?>
    <!-- //header -->
    <main id="contents">
<?php
?> 
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section class="join-type gray">
            <div class="member-form">
                <h3>회원 정보</h3>
                
                <div class="join-intro">
<?php         
?>
                </div>

                <div class="join-info">
                    <ul>
<?php
  $memberID = $_SESSION['memberID'];

  //echo $memberID;

  //web2Member테이블에서 *모든 열을 가져와라 where조건 memberID
  $sql = "SELECT * FROM harryMember WHERE memberID = {$memberID}";

  $result = $connect -> query($sql);

  //    echo "<pre>";
  //    var_dump($result);
  //    echo "</pre>";

  if($result) {
      $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
      echo " <li><strong>이메일</strong>";
      echo "<span>".$memberInfo['youEmail']."</span></li>";
      echo " <li><strong>이름</strong>";
      echo "<span>".$memberInfo['youName']."</span></li>";
      echo " <li><strong>닉네임</strong>";
      echo "<span>".$memberInfo['youNickName']."</span></li>";
      echo " <li><strong>비밀번호</strong>";
      echo "<span>".$memberInfo['youPass']."</span></li>";
      echo " <li><strong>생일</strong>";
      echo "<span>".$memberInfo['youBirth']."</span></li>";
      echo " <li><strong>PHONE</strong>";
      echo "<span>".$memberInfo['youPhone']."</span></li>";
  }
?>

                    </ul>
                </div>

                <div class="join-btn">
                    <a href="../mypage/myPageModify.php">수정하기</a>
                    <a href="../login/logout.php">로그아웃</a>
                    <a class="withDrawal" href="#" onClick="myWithDrawal()">탈퇴하기</a>
                </div>
            </div>
        </section>
    </main>
    <!-- <!— //main —> -->
    

    <script>
               function myWithDrawal(){
                let notice = confirm("정말 탈퇴하시겠습니까?");
                let withDrawal = document.querySelector('.withDrawal');
                
                if(notice == false){
                    alert('취소 되었습니다.');
                } else {
                    withDrawal.setAttribute("href","memberRemove.php?memberID=<?=$memberID?>");
                }
            }
    </script>
    <?php
    include "../include/footer.php";
    ?>
    <!-- //footer -->
</body>
</html>