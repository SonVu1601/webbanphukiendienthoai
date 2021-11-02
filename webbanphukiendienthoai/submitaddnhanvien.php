<?php

    session_start();
    include 'config/config1.php';
    $id =$_GET["id"];
    
   if(isset($_POST["them"])){
        $hoten = $_POST['name'];
        $idql =$id;
        $sdt = $_POST['phone'];
        $diachi = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        //ktra đã email đã tồn tại chưa
     $sql ="SELECT * FROM nhanvien WHERE email='$email' or sodt='$sdt'  ";
     $old =mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);
     $password = md5($password);    
      if( mysqli_num_rows($old) > 0){
         $_SESSION["thongbao"]= "Email hoặc số điện thoại đã tồn tại";
         header("location:addnhanvien.php");
         die();
      }else{
         $sql = "INSERT INTO nhanvien(hoten,id_ql,sodt,diachi,email,password) VALUES('$hoten','$idql','$sdt','$diachi','$email','$password')";
      
         mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);
            $_SESSION["thongbao"]="Đã Đăng Ký Thành Công";
            header("location:nhanvienadmin.php");
            die();
      }

   }
?>