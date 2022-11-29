<?php require_once("inc/db.php");?>

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
        <div class="write_title">상품 후기 작성</div>
        <section class="form_wrapper">
            <section class="table">
                <table>
                    <tr>
                        <td><div class="img_wrapper"><img src="" alt=""/></div></td>
                        <td class="content_info">
                            <input type="hidden" value=""/>
                            <span class="content_name">sdsd</span>
                        </td>
                        <td class="content_info">
                            <input type="hidden" name="" value=""/>
                            <span class="content_options">sfdfsdf</span>
                        </td>
                    </tr>
                </table>
            </section>
            <form class="write_form" method="post">
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
                <textarea class="write_text_area" name="story" placeholder="내용을 입력해주세요"  required></textarea>
                <div class="filebox bs3-primary preview-image">
                    <label for="input_file">사진 첨부하기</label> 
                    <input class="upload-name" value="파일선택" disabled="disabled" style="width: 200px;">
                    <input type="file" id="input_file" class="upload-hidden"> 
                </div>
            </form>
        </section>
        <div class="writeBtn">
            <input type="submit" value="등록"> 
            <input type="button" value="취소" onclick="history.back(1)">
        </div>
        
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