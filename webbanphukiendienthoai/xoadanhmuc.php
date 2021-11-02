<?php

    session_start();
    include 'config/config1.php';
    $id =$_GET["id"];
    $sql = "DELETE FROM danhmuc WHERE id=$id";
    mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);
    $_SESSION["thongbao"]="Xóa Thành Công";
    header("location:quanlidanhmuc.php");
    die();
    
   
   
?>