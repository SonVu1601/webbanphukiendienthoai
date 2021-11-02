<?php
    session_start();
    include 'config/config1.php';
    if(isset($_POST["them"])){
        $id = $_POST['id'];
        $tenloai = $_POST['tenloai'];
        $mota = $_POST['mota'];
        //ktra đã sản phâm đã tồn tại chưa
        $sql ="SELECT tenloai,id FROM danhmuc WHERE tenloai='$tenloai' or id='$id' ";
        $old =mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);  
        if( mysqli_num_rows($old) > 0){
            $_SESSION["thongbao"]= "Tên danh mục hoặc đã tồn tại";
            header("location:adddanhmuc.php");
            die();
        }else{
            
            $sql = "INSERT INTO  danhmuc(id,tenloai,mota)
            VALUES('$id','$tenloai','$mota')";
            mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);

            $_SESSION["thongbao"]="Thêm sản phẩm Thành Công";
            header("location:danhmucadmin.php");
            die();
        }

    }
?>