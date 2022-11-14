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
    <?php require_once("inc/header.php"); ?>

    </div>

    <main class="login_wrapper nonmember">
        <div class="login_start">
            <span class="login_title"> 로그인 </span>
        </div>
        <div class="login_sns_wrapper">
            <a href="" onclick="tabover('find', 0, ''); return false;" class="on">
                <div class="kakao_login">
                    <span class="kakao_login_title"> 카카오 1초 로그인 / 회원가입 </span>
                </div>
            </a>
            <a href="" onclick="tabover('find', 0, ''); return false;" class="on">
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
            <a href="login.html" onclick="tabover('find', 0, ''); return false;" class>
                <div class="member_login">
                    <span class="member_login_title"> 회원 </span>
                </div>
            </a>
            <div class="non_member_login">
                <span class="non_member_login_title"> 비회원 </span>
            </div>
        </div>

        <form action="">
            <div class="ID_wrapper">
                <fieldset class="ID_field-container">
                    <input type="text" placeholder="주문자명 입력하세요." class="ID_field_text" />
                </fieldset>
            </div>
            <div class="FW_wrapper">
                <fieldset class="FW_field-container">
                    <input type="text" placeholder="비밀번호를 입력하세요." class="FW_field_text" />
                </fieldset>
            </div>
            <div class="finish_login_wrapper">
                <a href="" onclick="tabover('find', 0, ''); return false;" class="on">
                    <div class="finish_login">
                        <span class="finish_login_title"> 주문 내역 조회 </span>
                    </div>
                </a>
            </div>

            <div class="login_member_non_member"></div>
        </form>


    </main>

    <?php require_once("inc/footer.php"); ?>

    <script src="https://kit.fontawesome.com/73fbcb87e6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="../js/hot_issue.js"></script>
</body>

</html>