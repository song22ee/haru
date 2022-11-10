<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>HARU</title>
</head>

<body>
    <div class="adv_main">adv</div>
    <?php require_once("inc/header.php"); ?>

    <main class="login_wrapper member">
        <div class="login_start">
            <span class="login_title"> 로그인 </span>
        </div>
        <div class="login_sns_wrapper">
            <a href="">
                <div class="kakao_login">
                    <span class="kakao_login_title"> 카카오 1초 로그인 / 회원가입 </span>
                </div>
            </a>
            <a href="">
                <div class="naver_login">
                    <span class="naver_login_title"> 네이버 로그인 </span>
                </div>
            </a>
        </div>
        <div class="login_or">
            <span class="login_or_title"> ------------------------------------------------- 또는
                ------------------------------------------------- </span>
        </div>
        <div class="login_member_wrapper">
            <div class="member_login">
                <span class="member_login_title"> 회원 </span>
            </div>
            <a href="login_nonmember.html">
                <div class="non_member_login">
                    <span class="non_member_login_title"> 비회원 </span>
                </div>
            </a>
        </div>

        <form name="login_form" method="POST" action="login.post.php">
            <div class="ID_wrapper">
                <fieldset class="ID_field-container">
                    <input type="text" placeholder="아이디를 입력하세요." class="ID_field_text" name="id" />
                </fieldset>
            </div>
            <div class="FW_wrapper">
                <fieldset class="FW_field-container">
                    <input type="password" placeholder="비밀번호를 입력하세요." class="FW_field_text" name="pass" />
                </fieldset>
            </div>
            <div class="login_keep_wrapper">
                <div class="ID_keep_check">
                    <input type="checkbox" class="input_ID_keep">
                    <lavel for="ID_keep" class="ID_keep_text"> 아이디 저장 </lavel>
                </div>
                <div class="all_keep_check">
                    <input type="checkbox" class="input_all_keep">
                    <lavel for="all_keep" class="all_keep_text"> 로그인 상태 유지 </lavel>
                </div>
            </div>
            <div class="finish_login_wrapper">
                <button class="finish_login" onclick="login()">
                    <span class="finish_login_title"> 로그인 </span>
                </button>
            </div>
        </form>




        <div class="find_wrapper">
            <ul>
                <a href="sign_up.php">
                    <li> <span>회원가입</span>
                    </li>
                </a>
                <a href="">
                    <li> <span>아이디 찾기</span> </li>
                </a>
                <a href="">
                    <li class="none_border"> <span>비밀번호 찾기</span> </li>
                </a>
            </ul>
        </div>

        <!-- class="find_text" -->

        <div class="login_member_non_member"></div>

    </main>

    <footer>
        <div class="footer_nav_wrapper">
            <div class="customer_center_wrapper">
                <span class="customer_center_title">Customer Center</span>
                <button class="question_kakao">카카오톡 문의</button>
                <button class="return_fast">빠른 교환/반품 신청</button>
                <div class="haru_call_wrapper">
                    <i class="fas fa-phone-alt"></i>
                    <span>1588-1234</span>
                </div>
            </div>
            <div class="haru_operating_time_wrapper">
                <span class="haru_operating_time_title">Time</span>
                <span class="call_time_title">전화 상담</span>
                <p class="call_time">평일 : 10:00 ~ 18:00 <br />
                    토요일 : 10:00 ~ 15:00 </p>
                <span class="katalk_time_title">카톡 상담</span>
                <p class="katalk_time">평일 : 10:00 ~ 18:00 <br />
                    토요일 : 10:00 ~ 15:00</p>
            </div>
            <div class="notice_wrapper">
                <span class="notice_title">Notice</span>
                <div class="notice_container"></div>
            </div>
        </div>
        <div class="footer_nav_wrapper">
            <div class="guide_wrapper">
                <span class="guide_title">GUIDE</span>
                <a href="" class="terms_service">이용약관</a>
                <a href="" class="privacy_policy">개인정보 처리방침</a>

            </div>
            <div class="about_us_wrapper">
                <span class="about_us_title">ABOUT US</span>
                <a href="" class="membership_info">멤버십 안내</a>
            </div>
        </div>
        <div class="footer_haru_info">
            <span class="about_haru_title">ABOUT SIMPLE HARU</span>
            <ul>
                <li>상호 : 심플 하루 그룹(주)</li>
                <li>
                    <address>사업장 소재지 : 경기도 성남시 중원구 광명로 377 </address>
                </li>
                <li>사업자 등록 번호 : 123456-1245678</li>
                <li>대표 이사 : 정수하 송가현</li>
                <li>대표 전화 : 1588-1234</li>
            </ul>
            <ul>
                <li>COPYRIGHT(c) 2022 HARU ALL RIGHT RESERVED.</li>
            </ul>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/73fbcb87e6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="../js/hot_issue.js"></script>
    <script src="js/member.js"></script>
</body>

</html>