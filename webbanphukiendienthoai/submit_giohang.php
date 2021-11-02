<?php 
    session_start();
	include 'config/config1.php';
	$id = $_GET["id"];
	$sql = "SELECT * FROM sanpham WHERE id = $id";  
	$result = mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);
	//tạo mảng để lưu
	$product_giohang = array();
	foreach($result as $values){

		$product_giohang[$values["id"]]= $values;
	}
	// $chitiet = $product_giohang;
	// echo "<pre>";
	// print_r($chitiet);
	if (isset($_POST["submit"])){
		if(!isset($_SESSION["giohang"]) || $_SESSION["giohang"]==null){
			$product_giohang[$id]["so_luong"]=1;
			$_SESSION["giohang"][$id]= $product_giohang[$id];
		}
		else{
			if(array_key_exists($id,$_SESSION["giohang"])){ 
				$_SESSION["giohang"][$id]["so_luong"]+=1;
			}else{
				$product_giohang[$id]["so_luong"]=1;
 				$_SESSION["giohang"][$id]= $product_giohang[$id];
			}
		}
		header("location:giohang.php");

		
	}
?>