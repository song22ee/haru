<!-- <?php 
    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $con = mysqli_connect("localhost", "root", "", "haru");

	$sql = "SELECT * FROM members WHERE id = '$id' AND pass = '$pass'";

	mysqli_query($con, $sql);  // $sql에 저장된 명령 실행
    mysqli_close($con);     

    echo "
        <script>
            location.href = 'main.html';
        </script>";
?>
-->
<?php
   session_start();
   $host = 'localhost';
   $user = '';
   $pw = '';
   $db_name = '';
      $mysqli = new mysqli($host, $user, $pw, $db_name); //db 연결
      
      //login.php에서 입력받은 id, password
      $username = $_POST['id'];
      $userpass = $_POST['pw'];
      
      $q = "SELECT * FROM member WHERE id = '$username' AND pass = '$userpass'";
      $result = $mysqli->query($q);
      $row = $result->fetch_array(MYSQLI_ASSOC);
      
      //결과가 존재하면 세션 생성
      if ($row != null) {
         $_SESSION['username'] = $row['id'];
         $_SESSION['name'] = $row['name'];
         echo "<script>location.replace('index.php');</script>";
         exit;
      }
      
      //결과가 존재하지 않으면 로그인 실패
      if($row == null){
         echo "<script>alert('Invalid username or password')</script>";
         echo "<script>location.replace('login.php');</script>";
         exit;
      }
      ?>