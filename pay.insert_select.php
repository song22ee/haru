<!-- 체크되어 있는 박스 확인 -->
<?php
    $count=1;
    $contents_code=[];
    $content_code1=$_POST['content_code1'];
    $content_code2=$_POST['content_code2'];
    // $content_code3=$_POST['content_code3'];
    // $content_code4=$_POST['content_code4'];
    
    //POST값이 존재하는지 확인
    // var_dump(isset($_POST['content_code'.$count])) ;

    // do{
    //     $contents_code[]=$_POST['content_code'.$count];
    //     $count++;
    // } while ( isset($_POST['content_code'.$count]) == true && isset($_POST['check_box'.$count]) ) ;

    while ( isset($_POST['content_code'.$count]) == true && isset($_POST['check_box'.$count]) ){
        $contents_code[]=$_POST['content_code'.$count];
        $count++;
    }

    var_dump($contents_code); //체크한 상품들의 상품코드들이 들어있는 배열
    echo "<br/>";

    require_once("inc/db.php");

    foreach($contents_code as $r){
        $result =db_select("select * from contents where content_code= ?", array($r));
        var_dump($result);
    }
    

    require_once("inc/session.php");
    // $_SESSION['shopping_cart'] = $content_code;

    // header("Location: pay_select.php");

?>