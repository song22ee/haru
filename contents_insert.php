<?php

$content_code= $_POST["product_code"];
$content_img=$_POST["product_img"];
$deliv_today= $_POST["is_deliv_today"];
$content_name= $_POST["product_name"];
$discount_rate= $_POST["product_discount_rate"];
$content_price= $_POST["product_price"];

require_once("inc/db.php");

// 데이터 저장
    db_insert("insert into contents (content_code , content_img,deliv_today,content_name,discount_rate,content_price) values (:content_code , :content_img,:deliv_today,:content_name,:discount_rate,:content_price )",
        array(
            'content_code' => $content_code,
            'content_img' => $content_img,
            'deliv_today' => $deliv_today,
            'content_name' => $content_name,
            'discount_rate' => $discount_rate,
            'content_price' => $content_price
        )
    );

    echo "
        <script>
            alert('상품등록이 완료되었습니다.');
            location.href = 'manager_product.php';
        </script>";

    
?>