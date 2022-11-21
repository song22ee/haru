<?php
require_once("inc/db.php");

$content_code=$_GET["content_code"];

$result = db_select("select * from contents where content_code= ?", array("$content_code"));

?>


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

    <main class="main_wrapper contents_detail">
        <form class="top" action="cart_insert.php?content_code=<?php echo "$content_code"?>" name="contents_form" method="POST" >
            <section class="top_left">
                <div class="category_info"><?php print_r($result[0]["category_large"])?> > <?php print_r($result[0]["category_small"])?></div>
                <div class="main_img"><img src="<?php print_r($result[0]["content_img"])?>" alt=""/></div>
                <div class="imgs">
                    <div class="img"><img src="<?php print_r($result[0]["content_img1"])?>" alt=""/></div>
                    <div class="img"><img src="<?php print_r($result[0]["content_img2"])?>" alt=""/></div>
                    <div class="img"><img src="<?php print_r($result[0]["content_img3"])?>" alt=""/></div>
                    <div class="img"><img src="<?php print_r($result[0]["content_img4"])?>" alt=""/></div>
                </div>
            </section>
            <section class="top_right">
                <div class="contents_infos">
                    <div class="delivery_today_mark_wrapper">
                        <?php if($result[0]["deliv_today"]==="Y"){ ?>
                            <i class="fas fa-bolt"></i>
                            <span>오늘 출발</span>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="row">
                        <span class="content_title"><?php print_r($result[0]["content_name"])?></span>
                    </div>
                    <div class="row">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="review_count">999+ 리뷰</div>
                    </div>
                    <div class="row">
                        <span class="price_original"><?php print_r($result[0]["content_cost"])?></span>
                    </div>
                    <div class="row">
                        <span class="sale_percent"><?php print_r($result[0]["discount_rate"])?>%</span>
                        <span class="price_final"><?php print_r($result[0]["content_price"])?>원</span>
                    </div>
                </div>
                <div class="buttons choice">
                    <span class="choice_title">색상선택</span>
                    <div class="choice_color">
                        <div class="color" style="background-color:<?php print_r($result[0]["content_color1"])?>"></div>
                        <div class="color" style="background-color:<?php print_r($result[0]["content_color2"])?>"></div>
                        <div class="color" style="background-color:<?php print_r($result[0]["content_color3"])?>"></div>
                        <div class="color" style="background-color:<?php print_r($result[0]["content_color4"])?>"></div>
                    </div>
                </div>
                <div class="buttons choice">
                    <span class="choice_title">사이즈선택</span>
                    <div class="choice_size">
                        <div class="size">free</div>
                    </div>
                </div>
                <div class="total_price_wrapper">
                    <span class="total_price_title">총 결제 금액 : </span>
                    <span class="total_price">0원</span>
                </div>
                <div class="insert_contents"></div>
                <div class="buttons purchase">
                    <button class="purchase"><span>구매하기</span></button>
                    <button class="cart" onclick="cart_insert()"><span>장바구니</span> </button>
                    <button class="like"><span>찜</span></button>
                </div>
            </section>
        </form>
    </main>
    <?php require_once("inc/fast_move.php"); ?>

    <?php require_once("inc/footer.php"); ?>

    <script src="https://kit.fontawesome.com/73fbcb87e6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="js/hot_issue.js"></script>
    <script src="js/app.js"></script>
</body>

</html> 