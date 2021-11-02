<?php
    session_start();
    include 'config/config1.php';
    if(isset($_POST["them"])){
        $id_dm = $_POST['iddm'];
        $tensp = $_POST['tensp'];
        $giact = $_POST['giact'];
        $giakm = $_POST['giakm'];
        $thuonghieu = $_POST['thuonghieu'];
        $image =$_FILES['image']['name'];
        $mota = $_POST['mota'];
        //ktra đã sản phâm đã tồn tại chưa
        $sql ="SELECT * FROM sanpham WHERE tensp='$tensp'  ";
        $old =mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);  
        if( mysqli_num_rows($old) > 0){
            $_SESSION["thongbao"]= "Tên sản phẩm đã tồn tại";
            header("location:addsanpham.php");
            die();
        }else{
            $image_tmp = $_FILES['image']['tmp_name']; 
            
            $sql = "INSERT INTO  sanpham(id_dm,tensp,giact,giakm,thuonghieu,anhsp,motasp)
            VALUES('$id_dm','$tensp','$giact','$giakm','$thuonghieu','$image','$mota')";
            $target_dir = "images/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                    $_SESSION["thongbao"]= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    header("location:addsanpham.php");
                    die();
            } else {
                mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);
                move_uploaded_file($image_tmp,'images/'.$image);
                $_SESSION["thongbao"]="Thêm sản phẩm Thành Công";
                header("location:sanphamadmin.php");
                die();
            }
            
           
          
        }

    }
?>