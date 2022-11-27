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
                        <span class="price_final"><?php echo $result[0]["content_price"]?></span>원
                    </div>
                </div>
                <div class="buttons choice">
                    <span class="choice_title">색상선택</span>
                    <div class="choice_color">
                        <div class="color" onclick="SelectOption()">
                            <input type="radio" name="color" value="<?php print_r($result[0]["content_color1"])?>" id="color1" style="background-color:<?php print_r($result[0]["content_color1"])?>">
                            <label for="color1"></label>
                        </div>
                        <div class="color" onclick="SelectOption()">
                            <input type="radio" name="color" value="<?php print_r($result[0]["content_color2"])?>" id="color2" style="background-color:<?php print_r($result[0]["content_color2"])?>">
                            <label for="color2"></label>
                        </div>
                        <div class="color" onclick="SelectOption()">
                            <input type="radio" name="color" value="<?php print_r($result[0]["content_color3"])?>" id="color3" style="background-color:<?php print_r($result[0]["content_color3"])?>">
                            <label for="color3"></label>
                        </div>
                        <div class="color" onclick="SelectOption()">
                            <input type="radio" name="color" value="<?php print_r($result[0]["content_color4"])?>" id="color4" style="background-color:<?php print_r($result[0]["content_color4"])?>">
                            <label for="color4"></label>
                        </div>
                    </div>
                </div>
                <div class="buttons choice">
                    <span class="choice_title">사이즈선택</span>
                    <div class="choice_size">
                        <div class="size" onclick="SelectOption()">
                            <input value="free" type="radio" name="size" id="size1">
                            <label for="size1" class="size_name">free</label>
                        </div>
                    </div>
                </div>
                <div class="total_price_wrapper">
                    <span class="total_price_title">총 결제 금액 : </span>
                    <span class="total_price">0</span>원
                </div>
                <div class="insert_contents">
                    <?php $count=1;?>
                    <div class="content <?php echo "content".$count?>">
                        <?php $count++;?>
                        <section class="option1">
                            <span class="color option1_color"></span>
                            <span>&nbsp; / &nbsp;</span>
                            <span class="size option1_size"></span>
                            <input type="hidden" name="content_options" value="none"/>
                        </section>
                        <section class="option2">
                            <input type="number" onchange="AmountChange()" name="option2_amount" min="1" class="amount" value="1">
                        </section>
                        <section class="option3">
                            <span class="option3_price"></span>
                            <span>원</span>
                        </section>
                        <section class="option4">
                            <button type="button" class="delete">X</button>
                        </section>
                    </div>
                </div>
                <div class="buttons purchase">
                    <button class="purchase"><span>구매하기</span></button>
                    <button class="cart" onclick="cart_insert()"><span>장바구니</span> </button>
                    <button class="like"><span>찜</span></button>
                </div>
            </section>
        </form>
        <section class="review_section"></section>
    </main>
    <?php require_once("inc/fast_move.php"); ?>

    <?php require_once("inc/footer.php"); ?>

    <script src="https://kit.fontawesome.com/73fbcb87e6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/55083c7425.js" crossorigin="anonymous"></script>
    <script src="js/hot_issue.js"></script>
    <script src="js/app.js"></script>
    <script src="js/option.js"></script>
</body>

</html> 