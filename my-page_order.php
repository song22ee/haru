<?php require_once("pay.import.php");?>

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

    <main class="main_wrapper my-page">
        <section class="menus">
            <div class="my-page_title"><span>MY PAGE</span></div>
            <ul class="navs">
                <li class="nav"><span>회원정보 수정</span></li>
                <li class="nav" style="background-color: rgb(255, 139, 139);"><span>주문배송</span></li>
                <li class="nav"><span>쿠폰/적립금</span></li>
                <li class="nav"><span>교환/반품</span></li>
                <li class="nav"><span>좋아요</span></li>
                <li class="nav"><span>최근 본 상품</span></li>
                <li class="nav"><span>회원탈퇴</span></li>
            </ul>
        </section>
        <section class="view">
            <div class="order_title"><span>주문/배송 조회</span></div>
            <section class="table pay">
                <table>
                <?php foreach($result as $key1=>$value){?>
                    <?php $order_contents = json_decode($value["order_contents"]);?>
                    <!-- <div class="order_info_header">
                        <div class="order_date"><span>2022.09.29</span></div>
                        <div class="order_id"><span>주문번호 : <?php echo $result[$key1]['order_id']?></span></div>
                    </div> -->
                    <div>trait_exists</div>
                    <?php foreach($order_contents as $key2=>$order_content){?>
                        <?php $order_info =db_select("select * from contents where content_code= ?", array($order_contents[$key2]->content_code)); ?>
                        <!-- <tr>
                            <td>
                                <div class="order_status"><span>주문완료</span></div>

                            </td>
                            <td>
                                <div class="img_wrapper"><img src="<?php echo $order_info[0]['content_img']?>" alt="" /></div>
                            </td>
                            <td>
                                <?php echo $order_info[0]['content_name']?>
                            </td>
                            <td>
                                <?php echo $order_info[0]['content_price']?>원
                            </td>
                            <td>1개</td>
                            <td>0000원</td>
                            <td>0000원</td>
                            
                        </tr>
                        <div>test</div> -->
                        <div>test</div>
                        
                    <?php } ?>
                <?php } ?>
            </table>
            </section>
            
        </section>
    </main>

    <?php require_once("inc/fast_move.php"); ?>
    <?php require_once("inc/footer.php"); ?>

    <script src="https://kit.fontawesome.com/73fbcb87e6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="js/hot_issue.js"></script>
    <script src="js/member.js"></script>

</body>

</html>