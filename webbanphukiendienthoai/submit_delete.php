<?php
  session_start();
  $id = $_GET["id"];
  if(isset($_SESSION["giohang"][$id])){
      unset($_SESSION["giohang"][$id]);
  }
  header("location:giohang.php")
?>