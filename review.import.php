<?php

require_once("inc/db.php");

$review =db_select("select * from review");

$photo = db_select("select * from review where photo IS NOT NULL"); //사진이 있는 리뷰

?>