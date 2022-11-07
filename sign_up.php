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
    <div id="header_wrapper">
        <header>
            <ul class="util_nav">
                <li class="util_nav01">
                    <a href="#"><span>회원가입</span></a>
                </li>
                <li class="util_nav02">
                    <a href="#"><span>고객센터</span></a>
                </li>
                <li class="util_nav03">
                    <a href="login_php"><span>로그인</span></a>
                </li>
            </ul>
            <div class="main_nav">
                <a href="main.html" class="logo_link_index">
                    <div class="logo_wrapper">
                        <!-- <img class="logo" src="" alt=""> -->
                        <span class="logo">simple haru</span>
                    </div>
                </a>

                <!--검색창-->
                <div class="search_wrapper">
                    <fieldset class="field-container">
                        <input type="text" placeholder="Search..." class="field" />
                        <div class="icons-container">
                            <div class="icon-search"></div>
                    </fieldset>
                </div>
                <div class="like_nav">
                    <i class="far fa-heart fa-1x"></i>
                    <span class="like_nav_title">찜한 상품</span>
                </div>
                <div class="cart_nav">
                    <i class="fas fa-shopping-bag fa-1x"></i>
                    <span class="cart_nav_title">장바구니</span>
                </div>
                <div class="my_page_nav">
                    <i class="far fa-user fa-1x"></i>
                    <span class="my_page_nav_title">마이페이지</span>
                </div>
                <div class="hot_issue_wrapper">
                    <div class="hot_issue_under_line">
                        <div class="hot_issue">
                            <ul id="ticker_01" class="ticker">
                                <li><span class="rank">1. </span><a href="#">가을신상</a></li>
                                <li><span class="rank">2. </span><a href="#">아우터</a></li>
                                <li><span class="rank">3. </span><a href="#">가방신상</a></li>
                                <li><span class="rank">4. </span><a href="#">코트</a></li>
                            </ul>
                        </div>
                        <i class="fas fa-caret-down"></i>
                    </div>

                </div>
            </div>
            <div class="main_menu_wrapper">
                <div class="main_menu_detail">
                    <i class="fas fa-bars fa-2x"></i>
                </div>
                <ul class="main_menu_bar">
                    <li class="main_menu01"><a href="">착한기업</a></li>
                    <li class="main_menu02"><a href="">베스트</a></li>
                    <li class="main_menu03"><a href="">신상</a></li>
                    <li class="main_menu04"><a href="">아우터</a></li>
                    <li class="main_menu05"><a href="">상의</a></li>
                    <li class="main_menu06"><a href="">트레이닝</a></li>
                    <li class="main_menu07"><a href="">베이직</a></li>
                    <li class="main_menu08"><a href="">원피스</a></li>
                    <li class="main_menu09"><a href="">스커트</a></li>
                    <li class="main_menu10"><a href="">팬츠</a></li>
                    <li class="main_menu11"><a href="">가방</a></li>
                    <li class="main_menu12"><a href="">신발</a></li>
                    <li class="main_menu13"><a href="">액세서리</a></li>
                </ul>
                <div class="delivery_today"><span>오늘출발</span></div>
            </div>
        </header>
    </div>

    <main class="main_wrapper sign_up">
        <div class="progress">
            <div class="progress_step step1">
                <span class="title">STEP 1</span>
                <span>이용약관 동의</span>
            </div>
            <div class="progress_step step2">
                <span class="title">STEP 2</span>
                <span>회원정보 입력</span>
            </div>
            <div class="progress_step step3">
                <span class="title">STEP 3</span>
                <span>회원가입 완료</span>
            </div>
        </div>
        <span class="join_us_title">JOIN US</span>
        <div class="join_box">
            <form name="member_form" method="post" action="member_insert.php" class="member_form">
                <div class="member_form_col">
                    <div class="ref">필수입력</div>
                    <div class="member_form_row row1">
                        <div class="form id">
                            <div class="col1">아이디</div>
                            <div class="col2">
                                <input type="text" name="id">
                            </div>
                            <div class="col3">
                                <a href="#"><button class="check_id">중복확인</button></a>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <div class="form">
                            <div class="col1">비밀번호</div>
                            <div class="col2">
                                <input type="password" name="pass">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="form">
                            <div class="col1">비밀번호 확인</div>
                            <div class="col2">
                                <input type="password" name="pass_confirm">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="form">
                            <div class="col1">이름</div>
                            <div class="col2">
                                <input type="text" name="name">
                            </div>
                        </div>
                        <div class="form">
                            <div class="col1">휴대전화</div>
                            <div class="col2">
                                <input type="text" name="phone">
                            </div>
                            <div class="col3">
                                <a href="#"><button class="get_code">인증번호 받기</button></a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="ref">선택입력</div>
                    <div class="member_form_row row2">
                        <div class="form">
                            <div class="col1">생년월일</div>
                            <div class="col2">
                                <input type="text" name="birth">
                            </div>
                        </div>
                        <div class="form email">
                            <div class="col1">이메일</div>
                            <div class="col2">
                                <input type="text" name="email1">@<input type="text" name="email2">
                            </div>
                        </div>
                        <div class="form">
                            <div class="col1">추천인아이디</div>
                            <div class="col2">
                                <input type="text" name="refferer">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="member_form_col check_box">
                    <div class="ref">수신여부 동의</div>
                    <div class="form">
                        <div class="col1">SNS 수신여부</div>
                        <div class="col2">
                            <input type="radio" name="sns" checked>예
                            <input type="radio" name="sns">아니오
                        </div>
                    </div>
                    <div class="form">
                        <div class="col1">이메일 수신여부</div>
                        <div class="col2">
                            <input type="radio" name="email_receive" checked>예
                            <input type="radio" name="email_receive">아니오
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <section>
            <button class="button_join" onclick="check_input()">가입</button>
            <button class="button_cancel">취소</button>
        </section>

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
    <script src="js/hot_issue.js"></script>
    <script src="js/member.js"></script>
</body>

</html>