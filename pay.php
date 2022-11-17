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

    <main class="cart_wrapper pay">
        <section class="pay_header">
            <span class="pay_title"> 주문/결제 </span>
            <div class="back_buttons">
                <button> < 이전 페이지 </button>
            </div>
        </section>
        <section class="pay_list">
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
            </table>
        </section>
        <section class = "order_info">
            <table>
                <tr class = "table_info">
                    <td> 주문 정보 </td>
                    <td class = "import_text"> * 필수 입력 사항 </td>
                </tr>
            </table>
            <div class = "custom_ord_info">
                <div class="ord_info">
                    <div class="custom_info"> 01. 주문자 정보 </div>
                    <div class="ord_name"> 이름: <input type="ord_text_name" placeholder="" class="ord_text_info_name" /> </div>
                    <label class="ord_email" for="email">
                        이메일:
                        <input class="ord_text_info_email" type="email" id="ord_email" pattern=".+@globex\.com" size="32" minlength="3" maxlength="64" required />
                    </label>
                    <ul class="ord_phone_number">
                        휴대전화: 
                        <li>
                            <select name="" id="" class="ord_text_info_number">
                                <option value = "010"> 010 </option>
                                <option value = "010"> 011 </option>
                                <option value = "010"> 016 </option>
                                <option value = "010"> 017 </option>
                            </select>
                        </li>
                        <li>
                            <input type="text" maxlength="4" title="휴대전화 앞자리" name="ord_phone_number_first" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" autocomplete="new-password">
                        </li>
                        <li>
                            <input type="text" maxlength="4" title="휴대전화 앞자리" name="ord_phone_number_last" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" autocomplete="new-password">
                        </li>
                    </ul>
                    <!-- <label class="ord_phone_number" for = "telNo">
                        휴대전화: 
                        <input class = "ord_text_info_number" type="tel" id="telNo" minlength="10" maxlength="13" /> 
                    </label> -->
                </div>
                <div class="deliv_info">
                    <div class="delivery_info"> 02. 배송 정보 </div>
                    <div class = "dest_choose"> 배송지 선택 * </div>
                    <div class="deliv_name"> 이름: <input type="deliv_text_name" placeholder="" class="deliv_text_info_name" /> </div>
                    <div class="deliv_address"> 주소: <input type="deliv_text_address" placeholder="" class="deliv_text__info_address" /> </div>
                    <ul class="deliv_phone_number">
                        <li>
                            <select name="" id="" class="deliv_text_info_number">
                                <option value = "010"> 010 </option>
                                <option value = "010"> 011 </option>
                                <option value = "010"> 016 </option>
                                <option value = "010"> 017 </option>
                            </select>
                        </li>
                    </ul>
                    <!-- <label class="deliv_phone_number" for = "telNo">
                        휴대전화: 
                        <input class = "deliv_text_info_number" type="tel" id="telNo" minlength="10" maxlength="13" /> 
                    </label> -->
                    <div class="deliv_message"> 배송 메시지: <input type="deliv_text_message" placeholder="" class="deliv_text_info_message" /> </div>
                </div>
            </div>
        </section>
        <section class="order_buttons">
            <button class="order_total"> 주문하기 </button>
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
