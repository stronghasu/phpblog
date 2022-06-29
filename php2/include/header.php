
    <header id="header">
        <h1 class="logo">
            <a href="../pages/main.php">Yun <em>Blog</em></a>
        </h1>
        <nav class="menu">
            <h2 class="ir_so">메인 메뉴</h2>
            <ul>
                <!-- <li><a href="../login/join.php">회원가입</a></li> -->
                <li><a href="../comment/comment.php">댓글</a></li>
                <li><a href="../board/board.php">게시판</a></li>
                <li><a href="../blog/blog.php">이모저모</a></li>
                <li><a href="../admin/admin.php">관리자</a></li>
            </ul>
        </nav>
        <div class="member">
            <?php
            if(isset($_SESSION['memberID'])){ ?>
                    <a href="../myPage/myPage.php">마이페이지</a>
                    <a href=""><?=$_SESSION['youName']?>님 환영합니다.</a>
                    <a href="../login/logout.php">로그아웃</a>
                <?php } else { ?>
                    <a href="../login/join.php">회원가입</a>
                    <a href="../login/login.php">로그인</a>
                <?php }
            ?>
            <!-- <a href="../login/join.php">회원가입</a>
            <a href="../login/login.php">로그인</a> -->
        </div>
    </header>