<?php
 session_start();
 include 'config/config1.php';
 if(isset($_POST['subMit'])  ){
     $hoten     = $_POST['fullName'];
     $sodt      = $_POST['Phone'];
     $diachi    = $_POST['Address'];
     $email     = $_POST['Email'];
     $password  = $_POST['passWord'];
    
     //ktra đã email đã tồn tại chưa
     $sql ="SELECT * FROM khachhang WHERE email='$email' ";
     $old =mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);
     $password = md5($password);
     if( mysqli_num_rows($old) > 0){
        $_SESSION["thongbao"]= "Email đã tồn tại";
        header("location:signin.php");
        die();
     }else{
        $sql = "INSERT INTO khachhang(hoten,sdt,diachi,email,password) VALUES('$hoten','$sodt','$diachi','$email','$password')";
        mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);
        $_SESSION["thongbao"]="Đã Đăng Ký Thành Công";
        header("location:login.php");
        die();
     }
   }
?>