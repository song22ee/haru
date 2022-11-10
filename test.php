<?php 
//https://www.codingfactory.net/10075
function db_get_pdo()
{
    $host = 'localhost';
    $port = '3306';
    $dbname = 'test';
    $charset = 'utf8';
    $username = 'php3min';
    $db_pw = "1234";
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";
    $pdo = new PDO($dsn, $username, $db_pw);
    return $pdo;
}

//가져오기
function db_select($query, $param=array()){
    $pdo = db_get_pdo();
    try {
        $st = $pdo->prepare($query);
        $st->execute($param);
        $result =$st->fetch(PDO::FETCH_ASSOC);
        $pdo = null;
        return $result;
    } catch (PDOException $ex) {
        return false;
    } finally {
        $pdo = null;
    }
}
//https://wickedmagica.tistory.com/16
$row=db_select("select * from tbl_person");
$test=$row['person_id'];

echo $row['person_id'];
echo $test;
// echo "<br />";
// var_dump(db_select("select * from tbl_person where person_id = ?", array(1)));
// echo "<br />";
// var_dump(db_select("select * from tbl_person where person_id = :person_id", array('person_id' => 1)));
// echo "<br />";
// $test1=var_dump(db_select("select * from tbl_person where person_id = ?", array(1)));
// $test2=test1["person_id"];
// echo htmlentities($test2[0]);
// //입력
// function db_insert($query, $param = array())
// {
//     $pdo = db_get_pdo();
//     try {
//         $st = $pdo->prepare($query);
//         $result = $st->execute($param);
//         $last_id = $pdo->lastInsertId();
//         $pdo = null;
//         if ($result) {
//             return $last_id;
//         } else {
//             return false;
//         }
//     } catch (PDOException $ex) {
//         return false;
//     } finally {
//         $pdo = null;
//     }
// }
// // var_dump(
// //     db_insert(
// //         "insert into tbl_person (name, age) values (?,?)",
// //         array("php", 25)
// //     )
// //     );

// // var_dump(
// //     db_insert(
// //         "insert into tbl_person (name, age) values (:name,:age)",
// //         array("name" =>"php7", "age" => 5)
// //     )
// // );

// //삭제

// function db_update_delete($query, $param = array())
// {
//     $pdo = db_get_pdo();
//     try {
//         $st = $pdo->prepare($query);
//         $result = $st->execute($param);
//         $pdo = null;
//         return $result;
//     } catch (PDOException $ex) {
//         return false;
//     } finally {
//         $pdo = null;
//     }
// }

// // 확인 후 삭제 시작
// // var_dump(
// //     db_update_delete(
// //         "update tbl_person set age=:age where person_id = :person_id", 
// //         array("age" => 4, "person_id" => 1) 
// //     )
// // );

// // var_dump(
// //     db_update_delete(
// //         "delete from tbl_person where person_id = ?", 
// //         array(3) 
// //     )
// // );
// // 확인 후 삭제 끝

?>

<script>
    <?php 
        echo "var value= '$test';"; 
    ?>
    console.log(value);
    
</script>

<?php 
	$title = "title";
?>

<script>
    <?php
        echo "var jsvar = '$title';";
    ?>
    console.log(jsvar);
</script>