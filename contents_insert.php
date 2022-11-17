<?php

$content_code= $_POST["product_code"];
$content_img=$_POST["product_img"];
$deliv_today= $_POST["is_deliv_today"];
$content_name= $_POST["product_name"];
$discount_rate= $_POST["product_discount_rate"];
$content_price= $_POST["product_price"];
$category_large = $_POST["category_large"];

require_once("inc/db.php");

// 데이터 저장
    db_insert("insert into contents (content_code , content_img,deliv_today,content_name,discount_rate,content_price,category_large,category_small) values (:content_code , :content_img,:deliv_today,:content_name,:discount_rate,:content_price,:category_large, :category_small )",
        array(
            'content_code' => $content_code,
            'content_img' => $content_img,
            'deliv_today' => $deliv_today,
            'content_name' => $content_name,
            'discount_rate' => $discount_rate,
            'content_price' => $content_price,
            'category_large' => $category_large,
            'category_small' => $category_small
        )
    );

    echo "
        <script>
            alert('상품등록이 완료되었습니다.');
            location.href = 'manager_product.php';
        </script>";

    
?>