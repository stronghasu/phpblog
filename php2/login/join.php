<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
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
            <section class="join-type gray">
                <div class="member-form">
                    <h3>계정을 생성하세요</h3>
                    <ul class="list">
                        <li>
                            개인정보 수집동의

                            <p>
                                1. 개인정보의 수집항목
                                예술경영지원센터는 홈페이지 회원 가입 시 회원 서비스 제공에 필요한 최소한의 정보를 수집하고 있으며 개인정보파일에 수집되는 항목은 다음과 같습니다.
                                - 이름, 아이디, 연락처, 이메일

                                2. 개인정보 수집목적
                                (재)예술경영지원센터가 제공하는 맞춤화된 서비스(예술경영 컨텐츠 제공, 각종 서비스 안내 및 참가신청 등) 및 개발(사전조사 및 만족도 설문조사, 고객문의 등)을 위해 수집합니다. (재)예술경영지원센터는 원칙적으로 이용자의 개인정보를 수집 및 이용 목적범위 내에서 처리하며, 이용자의 사전 동의 없이는 본래의 범위를 초과하여 처리하거나 제3자에게 제공하지 않습니다.

                                가. 회원관리
                                회원 맞춤 서비스 제공, 개인식별, 전체 서비스의 원활한 운영을 위한 관리, 회원탈퇴 의사 확인

                                나. 고유서비스 이용 및 신규 개발
                                예술경영지원센터에서 제공하는 컨설팅을 비롯한 각종 고유 서비스 제공의 필요 시, 신규 서비스 개발 시 의견수렴 및 안내

                                3. 개인정보의 보유기간
                                - 홈페이지 회원가입에 따라 수집된 개인정보 보유기간은 2년입니다.

                                4. 기타사항(거부할 권리 등)
                                - 회원가입에 따른 개인정보의 수집, 이용, 제공에 대해 귀하께서 동의하신 내용은 언제든지 철회 또는 거부하실 수 있습니다. 이의 경우 회원탈퇴로 처리되며 동의철회(거부)는 「회원탈퇴」를 클릭하거나 개인정보관리담당(책임자)에게 서면, 전화 이메일 등으로 연락하시면 즉시 개인정보의 삭제 및 파기 등 필요한 조치를 하겠습니다.
                                - 개인정보제공 동의 거부에 의한 홈페이지 이용 제한
                                · 예술경영지원센터 홈페이지 : 기본 서비스에 대한 이용 제한 없음
                                · 예술경영 아카데미 : 기본 서비스에 대한 이용 제한 없음
                                · 전문예술법인단체 : 온라인 컨설팅 신청 불가, 그 외 기본 서비스에 대한 이용 제한 없음
                            </p>
                        </li>
                        <li>
                            제3자 개인정보 제공 동의
                            
                            <p>
                            1. 제공기관
                            - 공공기관 고객만족도 조사 대행업체

                            2. 개인정보의 제공 항목
                            - 이름, 연락처, 이메일주소

                            3. 개인정보 수집목적
                            - 공공기관 고객만족도 조사

                            4. 개인정보의 보유기간
                            - 고객만족도 조사 진행기간 이후 즉시 파기

                            5. 기타사항(거부할 권리 등)
                            - 제3자 개인정보 제공에 대해 귀하께서 동의하신 내용은 언제든지 철회 또는 거부하실 수 있습니다.
                            - 개인정보제공 동의 거부에 의한 홈페이지 이용 제한
                            · 예술경영지원센터 홈페이지 : 기본 서비스에 대한 이용 제한 없음
                            · 예술경영 아카데미 : 기본 서비스에 대한 이용 제한 없음
                            · 전문예술법인단체 : 온라인 컨설팅 신청 불가, 그 외 기본 서비스에 대한 이용 제한 없음
                            </p>
                        </li>
                    </ul>          
                    <form action="joinSave.php" name="join" method="post">
                        <fieldset>
                            <legend class="ir_so">회원가입 입력폼</legend>
                            <div class="join-box">
                                <div>
                                    <label for="youEmail">이메일</label>
                                    <input type="email" id="youEmail" name="youEmail" placeholder="이메일@이메일주소"autocomplete="off" autofocus required>
                                </div>
                                <div>
                                    <label for="youPass">비밀번호</label>
                                    <input type="password" id="youPass" name="youPass" placeholder="비밀번호 입력"maxlength="20"  utocomplete="off" autofocus required>
                                </div>
                                <div>
                                    <label for="youPassC">비밀번호 확인</label>
                                    <input type="password" id="youPassC" name="youPassC" placeholder="비밀번호 확인" maxlength="20" autocomplete="off" autofocus required>
                                </div>
                                <div>
                                    <label for="youName">이름</label>
                                    <input type="text" id="youName" name="youName" placeholder="이름" maxlength="5" autocomplete="off" autofocus required>
                                </div>
                                <div>
                                    <label for="youBirth">생년월일</label>
                                    <input type="text" id="youBirth" name="youBirth" placeholder="YYYY-MM-DD" maxlength="12" autocomplete="off" autofocus required>
                                </div>
                                <div>
                                    <label for="youPhone">휴대폰 번호</label>
                                    <input type="text" id="youPhone" name="youPhone" placeholder="000-0000-0000"  maxlength="15" autocomplete="off" autofocus required>
                                </div>
                                <div>
                                    <label for="youGender">성별</label>
                                    <label style="display:inline-block"><input type="radio" id="Woman" name="youGender"  checked='checked' value="여자">여자</label>
                                    <label style="display:inline-block"><input type="radio" id="Man" name="youGender"  value="남자">남자</label>
                                </div>
                                <div>
                                    <label for="youIntro">자기소개</label>
                                    <input type="text" id="youIntro" name="youIntro" placeholder="자기소개를 입력해주세요."  maxlength="300" autocomplete="off" autofocus   >
                                </div>
                                <div>
                                    <label for="youNickname">닉네임</label>
                                    <input type="text" id="youNickname" name="youNickname" placeholder="닉네임을 설정해주세요."  maxlength="20" autocomplete="off" autofocus required>
                                </div>                       
                            </div>
                            <button id="joinBtn" class="join-submit" type="submit">회원가입 완료</button>
                        </fieldset>
                    </form>           
                </div>
        </section>
    </main>
    <!-- //main -->

    <?php

        include "../include/footer.php";
    ?>
    <!-- //footer -->
</body>
</html>