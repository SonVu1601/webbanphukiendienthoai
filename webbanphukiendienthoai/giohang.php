<?php
    session_start();
    include 'config/config1.php';
	if(isset($_POST["update"])){
		if(isset($_SESSION["giohang"])){
			foreach($_SESSION["giohang"] as $values){
				if($_POST["so_luong".$values["id"]] <= 0 ){
					unset($_SESSION["giohang"][$values["id"]]);
				}else{
					$_SESSION["giohang"][$values["id"]]["so_luong"] = $_POST["so_luong".$values["id"]];
				}
			}
		}
	}
   
?>
<?php 
    
    include("header.php");
?>
<section id="cartpage">
		<div class="container" id="container-cart">
		
			<div class="content-page">
				<div class="row-cart">
                        <div class="cart">
						<h1 class="page-header">Giỏ hàng</h1>
						<form action="giohang.php" method="post">
						<div class="page-content">
							<div class="cart-header-labels">
								<div class="label-item format1">
									<div class="column-imageproduct">Sản phẩm</div>
								</div>
								<div class="label-item format2">
									<div class="column-description">Mô tả</div>
								</div>
								<div class="label-item format1">
									<div class="column-price">Giá</div>
								</div>
								<div class="label-item format1">
									<div class="column-amount">Số lượng</div>
								</div>
								<div class="label-item format1">
									<div class="column-total">Tổng</div>
								</div>
								<div class="label-item format3">
									<div class="column-delete">Xóa</div>
								</div>
							</div>
							 
                                
                       
							<div class="cart_container">
								<?php  
								if(isset($_SESSION["giohang"])){
									foreach($_SESSION["giohang"] as $values ) {
										$tong=0;
										$tong = $values["giakm"]*$values["so_luong"];
								?>
								
								<!-- start product 1 -->
                                
								<div class="content-cart">
                                
									<div class="list-product-cart">
										<div class="cart-item-image  label-item format1">
											<div class="items-inner">
												<a href="" class="cart-imageproduct">
													<img class="img-responsive" src="<?php echo explode('||',$values["anhsp"])[0];?>" alt="">
												</a>
											</div>
										</div>
										<div class="cart-item-text label-item format2">
											<div class="items-inner">
												<a href="" class="cart-nameproduct">
                                                    <?php echo $values["tensp"]; ?>
												</a>
											</div>
										</div>
										<div class="cart-item-price label-item format1">
											<div class="items-inner">
												<span class="cart-priceproduct"> <?php echo $values["giakm"]; ?></span>
											</div>
										</div>
										<div class="cart-item-amount label-item format1">
											<div class="items-inner">
												<div class="cart-amountproduct">
													<input    name="so_luong<?php echo $values["id"];?>" type="number"  value="<?php echo $values["so_luong"];?>">
												</div>
											</div>
										</div>
										<div class="cart-item totalmoney label-item format1">
											<div class="items-inner">
												<span class="cart-totalmoneyporduct"><?php echo $tong ?></span>
											</div>
										</div>
										<div class="cart-item remove label-item format3">
											<div class="items-inner">
												<a class="cart-removeproduct" name="" href="submit_delete.php?id=<?php echo $values["id"];?>">
													<small>Xóa</small>
												</a>
											</div>
										</div>
                                       
									</div>
                                    
								</div>
								<?php
                                                }
                       
                                            }
                                    ?>
								<!-- end product 1 -->
                          
								
							</div>
							<div class="list-button-cart">
								<div class="row-hidden"></div>
								<div class="row-hidden buttonright">
									<p class="row-totalmoney">
										<button class="btn-outline" type="submit" name="update">Cập nhật giỏ hàng</button>
										<!-- <span class="cart-subtotal-title">Tổng:</span> -->
										<span class="cart-subtotal-money"></span>
									</p>
									<a class="btn-continuebuy btn-outline" href="index.php" title="Tiếp tục mua sắm">Tiếp tục mua sắm</a>
									<a class="btn-pay btn-outline" href="login.php" title="Thanh toán ngay">Thanh toán</a>
								</div>
							</div>
							</form>
						</div>
					</div>
                
					
				</div>
			</div>
			
		</div>
		
	</section>
	<?php 
    include("footer.php")
    ?>