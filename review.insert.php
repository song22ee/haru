<?php 
$content_name = $_POST['content_name'];
$content_options = $_POST['content_options'];
// $photo = $_POST['photo'];
$review_id=date("YmdHis");
//로그인 되어 있는 사용자의 아이디 가져오기
    require_once("inc/session.php");
    $writer_id =$_SESSION['member_id'];

$review_contents=$_POST['review_contents'];
var_dump($content_name);
var_dump($content_options);
// var_dump($photo);
var_dump($review_id);
var_dump($writer_id);
var_dump($review_contents);



//파일 업로드
if ( $_POST[ 'action' ] == "등록" ) {
    $uploaded_file_name_tmp = $_FILES[ 'photo' ][ 'tmp_name' ];
    $uploaded_file_name = $_FILES[ 'photo' ][ 'name' ];
    $upload_folder = "img/reviews/";
    move_uploaded_file( $uploaded_file_name_tmp, $upload_folder . $uploaded_file_name );
    echo "<p>" . $uploaded_file_name . "을(를) 업로드하였습니다.</p>";
    
    // print_r( $_FILES[ 'photo' ] );
    // echo "<br>";
    // echo $_FILES[ 'photo' ][ 'name' ];
    // echo "<br>";
    // echo $_FILES[ 'photo' ][ 'type' ];
    // echo "<br>";
    // echo $_FILES[ 'photo' ][ 'size' ];
    // echo "<br>";
    // echo $_FILES[ 'photo' ][ 'tmp_name' ];
    // echo "<br>";
    // echo $_FILES[ 'photo' ][ 'error' ];
}

$photo = $upload_folder.$uploaded_file_name;
print_r($photo);

    require_once("inc/db.php");

// 데이터 저장
    db_insert("insert into review (review_id, writer_id ,review_contents ,photo ) values (:review_id, :writer_id ,:review_contents ,:photo  )",
        array(
            'review_id' => $review_id,
            'writer_id' => $writer_id,
            'review_contents' => $review_contents,
            'photo' => $photo,
        )
    );

//리뷰 작성 완료로 바꾸기
db_update_delete("$query", 
    array(
        
    ));

echo "
        <script>
            alert('리뷰등록이 완료되었습니다.');
            location.href = 'my-page_order.php';
        </script>";

?>