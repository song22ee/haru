<?php
require_once("inc/db.php");
// $content_code=$_GET["content_code"];
$result = db_select("select * from contents where content_code= ?", array("221113-001"));
var_dump($result);

// echo "<pre>";
// print_r($rs);

?>