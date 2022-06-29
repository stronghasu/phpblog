<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    //include "../connect/sessionCheck.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 검색</title>
    <?php 
        include "../include/style.php";
    ?>
    <style>
        .footer {
            background: #f5f5f5;
        }
    </style>
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
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="board-type" class="section center mb100">
            <div class="container">
                <h3 class="section__title">검색 결과 게시판</h3>
                <p class="section__desc">강의와 관련된 검색 결과입니다.</p>
                <div class="board__inner">
                    <div class="board__search">
                    <form action="boardSearch.php" name="boardSearch" method="GET">
                            <fieldset>
                                <legend class="ir_so">게시판 검색 영역</legend>
                                <div>
                                    <input type="search" name="searchKeyword" class="search-form" placeholder="검색어를 입력하세요!" aria-label="search" required>
                                </div>
                                <div>
                                    <select name="searchOption" class="search-option">
                                        <option value="title">제목</option>
                                        <option value="content">내용</option>
                                        <option value="name">등록자</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" class="search-btn">검색</button>
                                </div>
                                <div>
                                    <a href="boardWrite.php" class="search-btn black">글쓰기</a>
                                </div>
                            </fieldset>
                        </form>
<?php
    function msg($alert){
        echo "<p class = 'result'>총 ".$alert." 건이 검색되었습니다.</p>";
    }

    $searchKeyword = $_GET['searchKeyword'];
    $searchOption = $_GET['searchOption'];

     //mysqli_real_escape_string sql문에서 특수문자를 변경해주는 함수
    $searchKeyword = $connect -> real_escape_string(trim($searchKeyword));
    $searchOption = $connect -> real_escape_string(trim($searchOption));

    //쿼리문 작성(join문을 이용해 작성할 것, groupby, left, right)
    //b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView
    
    // $sql = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM webBoard b JOIN webMember m ON(b.memberID = m.memberID) WHERE  b.boardTitle LIKE '%{searchKeyword}%' ORDER BY boardID DESC LIMIT 10";

    // $sql = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM webBoard b JOIN webMember m ON(b.memberID = m.memberID) WHERE  b.boardContents LIKE '%{searchKeyword}%' ORDER BY boardID DESC LIMIT 10";

    // $sql = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM webBoard b JOIN webMember m ON(b.memberID = m.memberID) WHERE  m.youName LIKE '%{searchKeyword}%' ORDER BY boardID DESC LIMIT 10";

    //조건이 두개이상이므로 switch문으로!
    //sql문 1,2,3으로 굳이 안해도 됨!
    $sql = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM harryBoard b JOIN harryMember m ON(b.memberID = m.memberID) ";

    switch($searchOption){
        case 'title':
            $sql .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY boardID";
            break;
        case 'content':
            $sql .= "WHERE b.boardCont LIKE '%{$searchKeyword}%' ORDER BY boardID";
            break;
        case 'name':
            $sql .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY boardID";
            break;
    }


    $result = $connect -> query($sql);
    

    if($result){
        $count = $result -> num_rows;

        msg($count);
    }

?>
                    </div>
                    <div class="board__table">
                        <table class="hover">
                            <colgroup>
                                <col style="width: 5%;">
                                <col>
                                <col style="width: 10%;">
                                <col style="width: 12%;">
                                <col style="width: 7%;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>등록자</th>
                                    <th>등록일</th>
                                    <th>조회수</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
    //현재 페이지를 번호로 확인
    //페이지 get 변수가 있다면 받아오고, 없다면 1페이지를 보여준다.
    if(isset($_GET['page'])){
        $page = (int)$_GET['page'];  //1 2 3 4 5
    } else{
        $page = 1;
    }

    //10개씩 보이게 하기
    $pageView = 10;
    //??????몇번째의 글부터가져오는지
    $pageLimit = ($pageView * $page) - $pageView;


    $sql2 = "SELECT b.boardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM harryBoard b JOIN harryMember m ON(b.memberID = m.memberID) ";

    switch($searchOption){
        case 'title':
            $sql2 .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY boardID DESC LIMIT {$pageLimit}, {$pageView}";
            break;
        case 'content':
            $sql2 .= "WHERE b.boardContents LIKE '%{$searchKeyword}%' ORDER BY boardID DESC LIMIT {$pageLimit}, {$pageView}";
            break;
        case 'name':
            $sql2 .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY boardID DESC LIMIT {$pageLimit}, {$pageView}";
            break;
    }

    $result = $connect -> query($sql2);

    // echo "<pre>";
    // var_dump($result);
    // echo "</pre>";


    if($result){
        $count = $result -> num_rows;

        if($count > 0){
            for($i=0; $i<$count; $i++){
                $boardInfo = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<tr>";
                echo "<td>".$boardInfo['boardID']."</td>";
                echo "<td><a href='boardView.php?boardID={$boardInfo['boardID']}'>".$boardInfo['boardTitle']."</a></td>";
                echo "<td>".$boardInfo['youName']."</td>";
                echo "<td>".date('Y-m-d', $boardInfo['regTime'])."</td>";
                echo "<td>".$boardInfo['boardView']."</td>";
                echo "</tr>";
            }
        }
    }
?>
                            </tbody>
                        </table>
                    </div>


                    <div class="board__pages">
                        <ul>          
<?php
   
   $sql3 = "SELECT b.boardID, b.boardTitle, b.boardContents, b.boardView, m.youName, b.regTime FROM harryBoard b JOIN harryMember m ON (m.memberID = b.memberID) ";

   switch($searchOption){
       case 'title':
           $sql3 .= "WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY boardID";
           break;
       case 'content':
           $sql3 .= "WHERE b.boardContents LIKE '%{$searchKeyword}%' ORDER BY boardID";
           break;
       case 'name':
           $sql3 .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY boardID";
           break;
   }


    $result = $connect -> query($sql3);

    //검색한 결과를 통해 총 몇 건이 검색되었습니다.
    //  echo "<pre>";
    //  var_dump($result);
    //  echo "</pre>";

     $boardCount = $result -> num_rows;
     
     //검색해서 나온 데이터 값의 갯수
     //echo $boardCount;


    // $boardCount = $result -> fetch_array(MYSQLI_ASSOC);

    //boardID의 갯수를 boardCount에 넣음
    //$boardCount =  $boardCount['count(boardID)'];

    //echo $boardCount;  //(게시물 갯수)

    //ceil는 올림
    $boardTotalPage = ceil($boardCount/$pageView);

   // echo $boardCount;

    // 10 11 12 13 14 <15> 16 17 18 19 20
    //현재 페이지를 기준으로 보여주고 싶은 갯수
    $pageCurrent = 5;
    $startPage = $page - $pageCurrent;
    $endPage = $page + $pageCurrent;

    //처음 페이지 초기화
    if($startPage < 1) $startPage =1;

     //마지막 페이지 초기화
     if($endPage >= $boardTotalPage) $endPage = $boardTotalPage;



//이전페이지, 처음페이지
//순서도 중요시!!!
if($page !=1){
    $prevPage = $page -1;
    echo "<li><a href='boardSearch.php?page=1&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>처음으로</a></li>";
    echo "<li><a href='boardSearch.php?page={$prevPage}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>이전</a></li>";
}


//페이지 넘버 표시
for($i = $startPage; $i<=$endPage; $i++){
    $active = "";
    if($i == $page) 
    $active = "active";

    echo "<li class='{$active}'><a href='boardSearch.php?page={$i}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>{$i}</a></li>";
}

//다음페이지, 마지막페이지
//$boardTotalPage = ceil($boardCount/$pageView);
if($boardTotalPage != 0 && $page != $boardTotalPage){
    $nextPage = $page +1;
    echo "<li><a href='boardSearch.php?page={$nextPage}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>다음</a></li>";

    echo "<li><a href='boardSearch.php?page={$boardTotalPage}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>마지막으로</a></li>";
}
?>
                            <!-- <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li> —>
                        </ul>   
                </div>
            </div>
        </section>
    </main>

    <?php 
        include "../include/footer.php";
    ?>
    <!— //footer  —>

</body>
</html>