<?php
    session_start();
    include 'config/config1.php';
    $id = $_GET["id"];
    if(isset($_POST["them"])){
        $id_dm = $_POST['iddm'];
        $tensp = $_POST['tensp'];
        $giact = $_POST['giact'];
        $giakm = $_POST['giakm'];
        $thuonghieu = $_POST['thuonghieu'];
        $image = $_FILES['image']['name'];
        $mota = $_POST['mota'];
       
       
        $image_tmp = $_FILES['image']['tmp_name']; 

        $uploadOk = 1;
        $sql = "UPDATE sanpham SET id_dm='$id_dm',tensp='$tensp',giact='$giact',giakm='$giakm',thuonghieu='$thuonghieu',anhsp='$image',motasp='$mota' WHERE id =$id";
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       
        
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {

                $_SESSION["thongbao"]= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                header("location:suasanpham.php?id=$id");
                die();
                
        } else {

            mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);
            move_uploaded_file($image_tmp,'images/'.$image);
            $_SESSION["thongbao"]="Sửa sản phẩm Thành Công";
            header("location:sanphamadmin.php");
            die();
        }
        
    
    
    
        

     }
?>