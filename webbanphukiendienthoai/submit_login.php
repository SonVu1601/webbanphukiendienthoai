<?php
 session_start();
 include 'config/config1.php';
 if(isset($_POST['subMit'])  ){
     $email     = $_POST['Email'];
     $password  = $_POST['passWord'];
     $password = md5($password);
     $sql = "SELECT * FROM khachhang WHERE email = '$email' AND password ='$password'";
     $user = mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ), $sql);
     if(mysqli_num_rows($user)>0){
         $_SESSION["user"] = $email;
         header("location:thanhtoan.php");
         $_SESSION["thongbao"]="Đăng nhập thành công";
         die();
     }else{
         $_SESSION["thongbao"]="Sai email hoặc mật khẩu";
        header("location:login.php");
        die();
        
     }
    
     
   }
?>