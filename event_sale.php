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
            <a href="event.php">
                <div class="join_event">
                    <span class="join_event_title"> 참여형 이벤트 </span>
                </div>
            </a>
            <a href="">
                <div class="sale_event" style="background-color:  rgb(0, 122, 222);">
                    <span class="sale_event_title" style = "color: white;"> 세일 이벤트 </span>
                </div>
            </a>
        </div>
        <div class="event_free_sale_wrapper">
            <div class="free">
                <div class="free_event">
                    <span class="free_event_title"> 모두 다 </span>
                    <span class="free_event_title_one"> 무료배송! </span>
                </div>
                <div class="detail_free_wrapper">
                    <div class="free_detail_event"> 무료 배송 이벤트 </div>
                    <div class="free_detail_event_date"> ~ 23.06.05 </div>
                </div>
            </div>
            <div class="sale">
                <div class="sale_event">
                    <span class="sale_event_title_one"> 20% </span>
                    <span class="sale_event_title"> 할인 세일 </span>
                </div>
                <div class="detail_sale_wrapper">
                    <div class="sale_detail_event"> 20% 할인 세일 이벤트 </div>
                    <div class="sale_detail_event_date"> ~ 23.06.05 </div>
                </div>
            </div>
            <div class="delivery_charge">
                <div class="delivery_event">
                    <span class="delivery_event_title"> 하루가 </span>
                    <span class="delivery_event_title_two">
                        배송비
                        <span class = "delivery_event_title_three">
                            내는 날
                        </span>
                    </span>
                </div>
                <div class="detail_delivery_wrapper">
                    <div class="delivery_detail_event"> 무료 배송 이벤트 </div>
                    <div class="delivery_detail_event_date"> ~ 23.06.05
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