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
            <form name="member_form" method="POST" action="member_insert.php" class="member_form">
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

    <?php require_once("inc/footer.php"); ?>

    <script src="https://kit.fontawesome.com/73fbcb87e6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="js/hot_issue.js"></script>
    <script src="js/member.js"></script>
</body>

</html>