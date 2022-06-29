<?php
include "../connect/connect.php";
include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>댓글페이지</title>
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
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="card-type" class="section center">
            <div class="container">
                <h3 class="section__title">좋아하는 것들</h3>
                <p class="section__desc">
                    청춘 프론트엔드, 퍼블리셔 개발자의 사이트입니다. <br>
                    즐겁게 즐겨주세요
                    <!-- Gmarket Sans Light 22px 150% #67778A  -->
                </p>
                <div class="card__inner">
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../assets/img/img1.jpg" alt="이미지1">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">오물거리는 알파카</h3>
                            <p class="card__desc">길쭉한 목과 다리에 몽실몽실한 털이 인상적인 동물로, 덩치는 제법 있는 편입니다.외형이 라마와 비슷하게 생겨서 혼동할 수도 있지만 알파카는 라마보다 체형이 더 작고 귀가 일자형입니다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../assets/img/img2.jpg" alt="이미지2">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">인형으로 친근하게</h3>
                            <p class="card__desc">특이한 외모와 습성으로 인해 컬트적인 인기를 가진 동물로 인형으로 제작되어 인기를 끌고있다. 갈색 황토색 흰색 다양한 색상이 있다!</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../assets/img/img3.jpg" alt="이미지3">
                        </figure>   
                        <div class="card__body">
                            <h3 class="card__title">알파카 가족</h3>
                            <p class="card__desc">보슬보슬한 크림색 털이 매력적으로 보이는 알파카 가족 입니다.  통통한 얼굴형과 쫑긋하게 세워진 귀가 귀여워요. 귀여운 알파카 가족을 만나보아요~</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- //card-type -->

        <section id="comment-type" class="section center purple">
            <h3 class="section__title">한마디 남겨주기</h3>
            <p class="section__desc">블로그를 즐겁게 둘러보셨다면 댓글 한마디씩 남겨주세요~</p>
            <div class="comment__inner">
                <div class="comment__form">
                    <form action="commentSave.php" method="post" name="comment">
                        <fieldset>
                            <legend class="ir_so">댓글쓰기</legend>
                            <div class="comment__wrap">
                                <div>
                                    <label for="youName" class="ir_so">이름</label>
                                    <input type="text" name="youName" id="youName" class="input__style" placeholder="이름" autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="youText" class="ir_so">댓글 쓰기</label>
                                    <input type="text" name="youText" id="youText" class="input__style width" placeholder="시간, 날짜, 강의 제목을 적어주세요!" autocomplete="off" required>
                                </div>
                                <button class="comment__btn" type="submit" value="댓글 작성하기">작성하기</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="comment__list">
                    <?php
                        include "../connect/connect.php";
                        $sql = "SELECT * FROM harryComment ORDER BY commentID DESC LIMIT 8";
                        $result = $connect  -> query($sql);

                        // echo "<pre>";
                        // echo var_dump(mysqli_fetch_array($result));
                        // echo "</pre>";

                        while($info = mysqli_fetch_array($result)){
                            ?>
                            <div class="list">
                                <p class="comment__desc"><?=$info['youText']?></p>
                                <div class="comment__icon">
                                    <span class="face"><img src="../assets/img/face2@2x.png" alt="얼굴"></span>
                                    <span class="name"><?=$info['youName']?></span>
                                    <span class="date"><?=date('Y-m-d H:i', $info['regTime'])?></span>
                                </div>
                            </div>
                       <?php
                    }
                    ?>

                    <!-- <div class="list">
                        <p class="comment__desc">저 신청할께요!! 5월달 강의 신청합니다.</p>
                        <div class="comment__icon">
                            <span class="face"><img src="../assets/img/face2@2x.png" alt="얼굴"></span>
                            <span class="name">황상연</span>
                            <span class="date">2022-03-11</span>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
    </main>

    <?php
        include "../include/footer.php";
    ?>
    <!-- //footer -->
</body>
</html>
