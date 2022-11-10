<?php 
//https://www.codingfactory.net/10075
function db_get_pdo()
{
    $host = 'localhost';
    $port = '3306';
    $dbname = 'haru';
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
        $result =$st->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        return $result;
    } catch (PDOException $ex) {
        return false;
    } finally {
        $pdo = null;
    }
}


?>


