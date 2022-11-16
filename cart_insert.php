<?php
    $content_code=$_GET["content_code"];
    echo "$content_code";

    require_once("inc/db.php");
    // //장바구니에 넣을 데이터 가져오기
    // $content_data = db_select("select * from contents where content_code = ?", array($content_code)); 
    // print_r($content_data[0]);

    //로그인 되어 있는 사용자의 아이디 가져오기
    if (isset($_SESSION) === false){session_start();}
    $user_id =$_SESSION['member_id'];

    // 데이터 저장
    db_insert("insert into cart (content_code , user_id) values (:content_code, :user_id )",
    array(
        'content_code' => $content_code,
        'user_id' => $user_id
    )
);

    $prevPage = $_SERVER['HTTP_REFERER'];
    // 변수에 이전페이지 정보를 저장

    header('location:'.$prevPage);
?>
