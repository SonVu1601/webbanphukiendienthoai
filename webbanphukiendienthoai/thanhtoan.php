<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("location:login.php");
    }
?>
<?php
   if(isset($_SESSION["thongbao"])){
       echo $_SESSION["thongbao"];
       session_unset();
   }
?>
<h1>Bạn đã đăng nhập thành công</h1>
<a href="logout.php" title="Logout">Logout</a>