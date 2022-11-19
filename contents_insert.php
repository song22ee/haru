<?php

$content_code= $_POST["product_code"];
$content_img=$_POST["content_img"];
$deliv_today= $_POST["is_deliv_today"];
$content_name= $_POST["product_name"];
$discount_rate= $_POST["product_discount_rate"];
$content_price= $_POST["product_price"];
$content_color1= $_POST["content_color1"];
$content_color2= $_POST["content_color2"];
$content_color3= $_POST["content_color3"];
$content_color4= $_POST["content_color4"];
$category_large = $_POST["category_large"];
$category_small = $_POST["category_small"];
$content_img1=$_POST["content_img1"];
$content_img2=$_POST["content_img2"];
$content_img3=$_POST["content_img3"];
$content_img4=$_POST["content_img4"];
$content_cost=$_POST["product_cost"];

// var_dump($content_code);
// var_dump($content_img);
// var_dump($deliv_today);
// var_dump($content_name);
// var_dump($discount_rate);
// var_dump($content_price);
// var_dump($content_color1);
// var_dump($content_color2);
// var_dump($content_color3);
// var_dump($content_color4);
// var_dump($category_large);
// var_dump($category_small);
// var_dump($content_img1);
// var_dump($content_img2);
// var_dump($content_img3);
// var_dump($content_img4);

require_once("inc/db.php");

// 데이터 저장
    db_insert("insert into contents 
    (content_code , content_img,deliv_today,content_name,
    discount_rate,content_price,content_color1,content_color2,content_color3,content_color4,
    category_large,category_small, content_img1, content_img2, content_img3, content_img4,content_cost) 
    values 
    (:content_code , :content_img,:deliv_today,:content_name,
    :discount_rate,:content_price,:content_color1,:content_color2,:content_color3,:content_color4,
    :category_large, :category_small, :content_img1, :content_img2, :content_img3, :content_img4,content_cost )",
        array(
            'content_code' => $content_code,
            'content_img' => $content_img,
            'deliv_today' => $deliv_today,
            'content_name' => $content_name,
            'discount_rate' => $discount_rate,
            'content_price' => $content_price,
            'content_color1'=>$content_color1,
            'content_color2'=>$content_color2,
            'content_color3'=>$content_color3,
            'content_color4'=>$content_color4,
            'category_large' => $category_large,
            'category_small' => $category_small,
            'content_img1'=>$content_img1,
            'content_img2'=>$content_img2,
            'content_img3'=>$content_img3,
            'content_img4'=>$content_img4,
            'content_cost' => $content_cost
        )
    );

    echo "
        <script>
            alert('상품등록이 완료되었습니다.');
            location.href = 'manager_product.php';
        </script>";

    
?>