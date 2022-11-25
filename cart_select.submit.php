<!-- 체크되어 있는 박스 확인 -->
<?php

// 체크된 상품만 배열에 넣는 로직
// 1. 장바구니에 들어있는 상품 개수 파악 (cart.php에서 count값을 세션 변수에 저장)
// 2. 그 개수만큼 반복문을 돌린다. (count-- 하다가 0이되면 멈추는 반복문)
// 3. 반복문의 내용은 해당 고유번호의 체크박스가 체크되어 있는지 확인한다.

    require_once("inc/session.php");
    
    $cart_count=$_SESSION['cart_count']; //장바구니에 들어있는 상품 개수
    $contents_code=[]; //이곳에 장바구니에 선택했던 상품코드들을 넣을것임.
    $count=1;

    while($cart_count > 0){
        //해당 고유번호를 가지고 있는 상품코드가 보내졌다면, 동시에 해당고유번호의 체크박스가 체크되어 있다면
        if ( isset($_POST['content_code'.$count]) == true && isset($_POST['check_box'.$count]) ){
            $contents_code[]=$_POST['content_code'.$count]; //상품코드들을 넣을 배열에 해당 상품코드를 넣는다.
        }
        $count++;
        $cart_count--;
    }

    // var_dump($contents_code); //체크한 상품들의 상품코드들이 들어있는 배열완성.

    require_once("inc/db.php");
    
    $shopping_cart=[]; //그 해당 상품코드에 대한 상품정보들을 담을곳.

    foreach($contents_code as $r){ //$contents_code안의 개수만큼 반복문 진행.
        //해당 상품코드에 대한 상품정보 불러오기
        $result =db_select("select * from contents where content_code= ?", array($r));
        // var_dump($result);
        echo "<br/>";
        $shopping_cart[]=$result[0]; //상품정보 넣기
    }
    
    //체크한 상품들의 상품정보들이 들어있는 배열 완성. 세션변수에 저장.
    unset($_SESSION['shopping_cart']); //기존에 들었던거 없애기
    $_SESSION['shopping_cart']=$shopping_cart; 
    var_dump($_SESSION['shopping_cart']);
    

    header("Location: pay_select.php");

?>