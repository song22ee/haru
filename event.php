<?php require_once("contents.import.php");?>

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

    <main>
        <div class="event_wrapper">
            <span class="event_title"> EVENT </span>
        </div>
        <div class="event_title_wrapper">
            <a href="">
                <div class="join_event">
                    <span class="join_event_title"> 참여형 이벤트 </span>
                </div>
            </a>
            <a href="">
                <div class="sale_event">
                    <span class="sale_event_title"> 세일 이벤트 </span>
                </div>
            </a>
        </div>
        <div class="event_three_wrapper">
            <div class="donation">
                <div class="donation_event">
                    <span class="donation_event_title"> 안 입는 옷 기부하고 </span>
                    <span class="donation_event_title_one">
                        새 상품
                        <span class="donation_event_title_two">
                            받자!
                        </span>
                    </span>
                </div>
                <div class="detail_donation_wrapper">
                    <div class="donation_detail_event"> 헌 옷 기부, 새 상품으로 교환 </div>
                    <div class="donation_detail_event_one"> ~ 23.06.05
                        <div class="donation_detail_event_two">
                            &nbsp;|&nbsp;
                            <div class="donation_detail_event_three">
                                537명 참여
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blood">
                <div class="blood_event">
                    <span class="blood_event_title"> 헌혈하고 </span>
                    <span class="blood_event_title_one">
                        30% 쿠폰
                        <span class="blood_event_title_two">
                            받자!
                        </span>
                    </span>
                </div>
                <div class="detail_blood_wrapper">
                    <div class="blood_detail_event"> 헌혈, 30% 쿠폰 제공 </div>
                    <div class="blood_detail_event_one"> ~ 23.06.05
                        <div class="blood_detail_event_two">
                            &nbsp;|&nbsp;
                            <div class="blood_detail_event_three">
                                516명 참여
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service">
                <div class="service_event">
                    <span class="service_event_title"> 각종 봉사 이벤트 </span>
                    <span class="service_event_title_one"> 참여하고 </span>
                    <span class="service_event_title_two">
                        적립금
                        <span class = "service_event_title_three">
                            받아가세요!
                        </span>
                    </span>
                </div>
                <div class="detail_service_wrapper">
                    <div class="service_detail_event"> 각종 봉사 이벤트 참여, 적립금 제공 </div>
                    <div class="service_detail_event_one"> ~ 23.06.05
                        <div class="service_detail_event_two">
                            &nbsp;|&nbsp;
                            <div class="service_detail_event_three">
                                486명 참여
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    <?php require_once("inc/fast_move.php"); ?>
    <?php require_once("inc/footer.php"); ?>

    <script src="https://kit.fontawesome.com/73fbcb87e6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="js/hot_issue.js"></script>
    <script src="js/member.js"></script>

</body>

</html>