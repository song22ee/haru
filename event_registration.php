<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>관리자 페이지-공지사항</title>
</head>

<body id="manager_body">
    <main class="manager_wrapper registration">
        <div class="main_menu_wrapper">
            <a href="manager_home.php">
                <div class="menu"> 홈 </div>
            </a>
            <a href="manager_notice.php">
                <div class="menu"> 공지사항 관리 </div>
            </a>
            <a href="manager_product.php">
                <div class="menu"> 상품 관리 </div>
            </a>
            <a href="manager_event.php">
                <div class="menu" style="background-color:  rgb(74 173 255);"> 이벤트 관리 </div>
            </a>
            <a href="manager_inquiry.php">
                <div class="menu"> 고객 문의 관리 </div>
            </a>
        </div>

        <div class="main_registration">
            <header>
                <div class="title_and_registration">
                    <span class="title">이벤트 등록</span>
                </div>
            </header>
            <section class="contents">
                
                <article class="scroller">
                    <form action="contents_insert.php" method="POST">
                        <section class="board event">
                            <div class="point_img">
                                <div class="img_insert_header">
                                    <div class="point_title"> 대표 이미지 </div>
                                </div>
                                <section class="img_thumbnail">
                                    <input class="input_css" name="content_img" type="text" placeholder="썸네일에 들어갈 이미지주소를 입력해주세요." value="img/contents/content1.jpg"/>
                                </section>
                                <div class="img_insert_header">
                                    <div class="point_title"> 이벤트 정보 </div>
                                </div>
                                <div class="event_detail">
                                    <div class="event_board_reone">
                                        <div class="event_retitle"> 이벤트 제목 : <input type="text" name="product_code" class="text_event_retitle"></div>
                                        <form action = "">
                                            <div class="event_redate"> 이벤트 기간 :
                                                <label>
                                                    <input type="date" name="evday" class = "evday_detail"> ~ <input type="date" name="evday" class = "evday_detail">
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="event_board_retwo">
                                        <div class="event_redetail"> 이벤트 상세 페이지 </div>
                                        <div class="event_redetail_contents"> : <input type="text" name="product_discount_rate"class="text_event_contents" /></div>
                                        <div class="event_redetail_contents_one"><input type="text" name="product_discount_rate"class="text_event_contents_one" /></div>
                                        <div class="event_redetail_contents_two"><input type="text" name="product_discount_rate"class="text_event_contents_two" /></div>
                                        <!-- <div class="product_discount_rate">&nbsp;&nbsp;<input type="text" name="product_discount_rate"class="text_product_discount" /></div>
                                        <div class="product_discount_rate">&nbsp;&nbsp;<input type="text" name="product_discount_rate"class="text_product_discount" /></div> -->
                                    </div>
                                </div>                              
                                    
                                <div class="submit_wrapper">
                                        <label class="input-submit-button" for="input-submit">
                                            확인
                                        </label>
                                        <input type="submit" id="input-submit" style="display: none;">
                                </div>
                            </div>
                        </section>
                    </section>
                    </form>
                    
                </article>
            </section>
            
        </div>
    </main>

    <script src="js/app.js"></script>
</body>

</html>