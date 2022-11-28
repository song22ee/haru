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

    <main class = review_wrapper>
        <section>
            <div class="rev_write">
                <div class="write_title">후기 쓰기</div>
                <form class="write_form" method="post">
                    <p><input class="write_type_text" type="text" name="title" size="50" placeholder="후기 제목을 입력해주세요" required></p>
                    <textarea class="write_text_area" name="story" placeholder="내용을 입력해주세요"  required></textarea>
                    <div class="writeBtn">
                        <input type="submit" value="작성">&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="button" value="취소" onclick="history.back(1)">
                    </div>
                </form>
            </div>
        </section>
    </main>

<?php require_once("inc/fast_move.php"); ?>
<?php require_once("inc/footer.php"); ?>

<script src="https://kit.fontawesome.com/73fbcb87e6.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="js/hot_issue.js"></script>
<script src="js/member.js"></script>

</body>

</html>