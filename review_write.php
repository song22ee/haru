<?php 
require_once("inc/db.php");
$content_img=$_POST['content_img'];
$content_options=$_POST['content_options'];
$content_name=$_POST['content_name'];

?>

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

    <main class ="main_wrapper review_write">
        <form name="write_form" class="write_form" method="POST" action="review.insert.php" enctype="multipart/form-data">
            <div class="write_title">상품 후기 작성</div>
            <section class="form_wrapper">
                <section class="table">
                    <table>
                        <tr>
                            <td><div class="img_wrapper"><img src="<?php echo $content_img?>" alt=""/></div></td>
                            <td class="content_info">
                                <input type="hidden" value=""/>
                                <span class="content_name"><?php echo $content_name?></span>
                                <input type="hidden" name="content_name" value="<?php echo $content_name?>">
                            </td>
                            <td class="content_info">
                                <input type="hidden" name="" value=""/>
                                <span class="content_options"><?php echo $content_options?></span>
                                <input type="hidden" name="content_options" value="<?php echo $content_options?>">
                            </td>
                        </tr>
                    </table>
                </section>
                <section class="star">
                    <span class="title">상품 만족도</span>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </section>
                <textarea name="review_contents" class="write_text_area" name="story" placeholder="내용을 입력해주세요"  required></textarea>
                <div class="filebox bs3-primary preview-image">
                    <label for="input_file">사진 첨부하기</label> 
                    <input class="upload-name" value="파일선택" disabled="disabled" style="width: 200px;">
                    <input name="photo" type="file" id="input_file" class="upload-hidden" >
                </div>
            </section>
        
            <div class="writeBtn">
                <input class="upload" type="submit" name="action" value="등록">
                <input type="button" value="취소" onclick="history.back(1)">
            </div>
        </form>
        
    </main>

<?php require_once("inc/fast_move.php"); ?>
<?php require_once("inc/footer.php"); ?>

<script src="https://kit.fontawesome.com/73fbcb87e6.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="js/hot_issue.js"></script>
<script src="js/member.js"></script>
<script src="js/review.js"></script>

</body>

</html>