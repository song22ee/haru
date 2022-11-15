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

    <main class="main_wrapper cart">
        <section class="cart_header">
            <span class="cart_title">장바구니</span>
            <div class="delete_buttons">
                <button>선택 상품 삭제하기</button>
                <button>전체 상품 삭제하기</button>
            </div>
        </section>
        <section class="cart_list">
            <table>
                <tr class="table_header">
                    <td class="check"><input type="checkbox"></td>
                    <td>이미지</td>
                    <td>상품정보</td>
                    <td>가격</td>
                    <td>수량</td>
                    <td>배송비</td>
                    <td>합계</td>
                </tr>
                <tr>
                    <td class="check"><input type="checkbox"></td>
                    <td><div class="img_wrapper"></div></td>
                    <td>상품정보</td>
                    <td>50,500원</td>
                    <td>1개</td>
                    <td>50,500원</td>
                    <td>50,500원</td>
                </tr>
                <tr>
                    <td class="check"><input type="checkbox"></td>
                    <td><div class="img_wrapper"></div></td>
                    <td>상품정보</td>
                    <td>50,500원</td>
                    <td>1개</td>
                    <td>50,500원</td>
                    <td>50,500원</td>
                </tr>
                
            </table>
        </section>
        <section class="purchase_buttons">
            <button class="purchase_total">전체 상품 주문하기</button>
            <button>선택 상품 주문하기</button>
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
