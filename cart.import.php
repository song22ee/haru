<?php

require_once("inc/db.php");
require_once("inc/db.php");

    //로그인 되어 있는 사용자의 아이디 가져오기
    if (isset($_SESSION) === false){session_start();}
var_dump($_SESSION);
    $user_id =$_SESSION['member_id'];
var_dump($user_id);


$result =db_select("select * from cart");
fsfsd


// print_r($result);    


?>