<?php
 session_start();
 include 'config/config1.php';
 if(isset($_POST['subMit'])  ){
     $email     = $_POST['email'];
     $password  = $_POST['password'];
     $password = MD5($password);
     if($email=='admin@gmail.com'){
        $sql = "SELECT * FROM quanly WHERE email = '$email' AND password ='$password'";
        $user = mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ), $sql);
        if(mysqli_num_rows($user)>0){
            $_SESSION["user"] = $email;
            header("location:adminmanage.php");
            $_SESSION["thongbao"]="Đăng nhập thành công";
            die();
        }else{
            $_SESSION["thongbao"]="Sai email hoặc mật khẩu";
           header("location:admin.php");
           die();
           
        }
    }else{
        $sql = "SELECT * FROM nhanvien WHERE email = '$email' AND password ='$password'";
        $user = mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ), $sql);
        if(mysqli_num_rows($user)>0){
            
            $_SESSION["user"] = $email;
            header("location:adminmanagenv.php");
            $_SESSION["thongbao"]="Đăng nhập thành công";
            die();
        }else{
            $_SESSION["thongbao"]="Sai email hoặc mật khẩu";
           header("location:admin.php");
           die();
           
        }

    }



     
    
     
   }
?>