<?php

require_once("inc/db.php");

$row=db_select("select * from contents");
var_dump($row);
$test=$row[0]["content_name"];
echo $test;
?>

<?php if("$r[deliv_today]"==="Y"){ ?>
                                    <i class="fas fa-bolt"></i>
                                    <span>오늘 출발</span>
                                <?php
                            }
                            ?>