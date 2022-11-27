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

    <main class="main_wrapper">
        <div class="banner_main"><img src="img/main.jpg" alt=""></div>
        <div class="recommend_main_wrapper">
            <div class="recommend_main_header">
                <span class="recomend_main_title">상품추천</span>
                <div class="sort_nav_wrapper">
                    <div class="sort_nav01"><span>판매순</span></div>
                    <div class="sort_nav02"><span>높은가격순</span></div>
                    <div class="sort_nav03"><span>낮은가격순</span></div>
                    <div class="sort_nav04"><span>평점순</span></div>
                </div>
            </div>
            <div class="recommend_main_content_wrapper">
                <ul class="recommend_main_contents">
                    <?php foreach($result as $r){?>
                        <a href="contents_detail.php?content_code=<?php echo "$r[content_code]"?>">
                            <li class="recommend_main_content">
                                <div class="content_img_wrapper"> <img src="<?php echo "$r[content_img]"?>" alt=""/></div>
                                <div class="content_text_wrapper">
                                    
                                    <div class="content_name_wrapper">
                                        <span class="content_name"><?php echo "$r[content_name]"?></span>
                                    </div>
                                    <div class="content_price_wrapper">
                                        <span class="discount_rate"><?php echo "$r[discount_rate]"?>%</span>
                                        <span class="content_price"><?php echo number_format($r['content_price'])?>원</span>
                                    </div>
                                    <div class="delivery_today_mark_wrapper">
                                            <?php if("$r[deliv_today]"==="Y"){ ?>
                                            <i class="fas fa-bolt"></i>
                                            <span>오늘 출발</span>
                                        <?php
                                    }
                                    ?>
                                    </div>
                                </div>
                            </li>
                        </a>
                    
                    <?php }?>

                </ul>
            </div>
        </div>
        <div class="view_more_wrapper">
            <button class="view_more_btn">더보기</button>
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
