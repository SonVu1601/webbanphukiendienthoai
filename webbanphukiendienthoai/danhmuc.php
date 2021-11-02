<?php
   include 'config/config1.php';
   $id = $_GET["id"];
   $sql ="SELECT * FROM SANPHAM where id_dm =$id ";
   $sql1 ="SELECT * FROM danhmuc";
   $sql2 ="SELECT * FROM danhmuc where id=$id";
   $result = mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);
   $result1 = mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql1);
   $result2 = mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql2);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>
			Minh Đức Store - Hệ Thống Bán Lẻ Điện Thoại Uy Tín Rẻ Vô Địch
		</title>
	<meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
	<link rel="icon" href="http://theme.hstatic.net/1000361133/1000768639/14/favicon.png?v=984" type="image/png" />
	<link type="text/css" href="./bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
	<link type="text/css" href="css/style.css" rel="stylesheet" media="screen"/>
	<link type="text/css" href="./fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet" media="screen"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>	
<body>
	<div class="scroll-group">
		<div class="top-menu">
			<div class="top-menu-inf" id="hide-scroll1">
				<div class="container-inf">
					<ul>					
					<li id="location"><i class="fas fa-map-marker-alt" ><span>Hotline:19001588</span></i></li>					
						<li id="gmail"><i class="fas fa-envelope-square"><span>minhducstore@gmail.com</span></i></li>				
					</ul>
				</div>
			</div><!-- End top menu if-->
			<div class="clear-both"></div>
			<div class="main-menu-search"> 
				<div class="container-main">
					<div id="sliderbar-menu" class="start-menu">
						<div class="box-vertical-menu">
							<h4 class="title">
								<span class="btn-icon-list">
									<i class="fas fa-list"></i>
								</span>
								<span class="title-menu">DANH MỤC</span>
							</h4><!--End Danh mục-->
							<div class="vertical-menu-content">
								<div class="menu-list">
									<ul class="container-all-name-list">
									
										<li class="menu has-child">
											<a class="a has-category" href="#" title="DANH MỤC SỮA TĂNG CÂN">											
													<img class="icon-menu" alt="DANH MỤC SỮA TĂNG CÂN" src="images/logo198.png "/>
													<span>DANH MỤC SỮA TĂNG CÂN</span>											
													<i class="fas fa-caret-right"></i>
											</a>									
										</li>
										
										
										<li class="menu has-child">
											<a class="a has-category" href="#" title="DANH MỤC SỮA TĂNG CƠ">											
													<img class="icon-menu" alt="DANH MỤC SỮA TĂNG CƠ" src="images/logo198.png "/>
													<span>DANH MỤC SỮA TĂNG CƠ</span>											
													<i class="fas fa-caret-right"></i>
											</a>
																			
											
										</li>
										
										<li class="menu has-child">
											<a class="a has-category" href="#" title="SỮA NON">											
													<img class="icon-menu" alt="DANH MỤC TĂNG SỨC MẠNH SỨC BỀN" src="images/logo198.png "/>
													<span>DANH MỤC TĂNG SỨC MẠNH SỨC BỀN</span>											
													<i class="fas fa-caret-right"></i>
											</a>									
											
										</li>
										
										<li class="menu has-child">
											<a class="a has-category" href="#" title="CÁC SẢN PHẨM HỖ TRỢ SỨC KHỎE">											
													<img class="icon-menu" alt="CÁC SẢN PHẨM HỖ TRỢ SỨC KHỎE" src="images/logo198.png "/>
													<span>CÁC SẢN PHẨM HỖ TRỢ SỨC KHỎE</span>											
													<i class="fas fa-caret-right"></i>
											</a>									
											<ul class="level1 menu-child">
												<li><a href="#" title="Tim Mạch huyết áp">Tim Mạch huyết áp</a></li>
												<li><a href="#" title="Mẹ và bé">Mẹ và bé </a></li>											
											</ul>
										</li>
										<li class="menu has-child">
											<a class="a has-category" href="#" title="DANH MỤC GIẢM CÂN - ĐỐT MỠ">											
													<img class="icon-menu" alt="DANH MỤC GIẢM CÂN - ĐỐT MỠ" src="images/logo198.png "/>
													<span>DANH MỤC GIẢM CÂN - ĐỐT MỠ</span>											
													<i class="fas fa-caret-right"></i>
											</a>									
											
										</li>
										<li class="menu has-child">
											<a class="a has-category" href="#" title="COMBO SẢN PHẨM">											
													<img class="icon-menu" alt="COMBO SẢN PHẨM" src="images/logo198.png "/>
													<span>COMBO SẢN PHẨM</span>											
													<i class="fas fa-caret-right"></i>
											</a>									
											
										</li> 
										
				
										
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="left-main" id="hide-scroll2">
						<p class="logo-shop">
							<a href="index.php" title="Logo"><img src="images/logo2.png" alt="Logo"/></a>
						</p>
					</div>
					<div class="middle-main">
						<div class="searchbox-product">
							<form class="fr-searchbox-main">
								<input id="txt-keyword" class="txt-keyword" type="text" name="q" placeholder="Nhập sản phẩm bạn muốn tìm kiếm tại đây" autocomplete="on" >
								<button class="btn-submit" type="submit">
									<label for="txt-keyword">Tìm kiếm</label>
								</button>
							</form>
						</div>
						
					</div>
					<div class="right-main" id="menu-control">
						<ul class="ul-controls-box">
							<li class="search-order">
								<a href="#" title="Tra cứu đơn hàng">
									<i class="fas fa-search"></i>
									<span class="inf">Tra cứu đơn hàng</span>
								</a>
							</li>
							<li class="cart">
								<a href="giohang.php" title="Giỏ hàng">
									<i class="fas fa-cart-plus"></i>
									<span class="inf">Giỏ hàng</span>
								</a>
							</li>
							<li class="account-user">
								<a href="#" title="Tài khoản">
									<i class="fas fa-user"></i>
									<span class="inf">Tài khoản</span>
								</a>							
								<ul class="login-dropmenu">
									<li class="login-method">
										<a class="login" href="login.php" title="Đăng nhập">
											<i class="fas fa-sign-in-alt"></i>
										Đăng nhập
										</a>
									</li>
									<li class="login-method">
										<a class="nofollow" href="signin.php" title="Đăng ký">
											<i class="fa fa-registered"></i>
										Đăng ký
										</a>									
									</li>
								</ul>							
							</li>
						</ul>
					</div>
				</div>
			</div><!-- End main menu-->
			<div class="clear-both"></div>
			<nav class="nav-main-menu">
				<div class="main-menu" id="hide-scroll3">
					<div class="container-menu">
						<ul class="nav-navbar">
							<li class="menu-items">
								<a href="index.php" title="Trang chủ">Trang chủ</a>
							</li>
							<li class="menu-items">
								<a href="#" title="Giới thiệu">Giới thiệu</a>
							</li>
							<li class="menu-items">
								<a href="#" title="Sản phẩm khuyến mại">Sản phẩm khuyến mãi</a>
							</li>
							<li class="menu-items">
							<a href="#" title="Cẩm nang dinh dưỡng">Chính sách</a>
							</li>
							<li class="menu-items">
								<a href="#" title="Liên hệ">Liên hệ</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div><!--End srcroll group-->
	<section id="slider">
		<div class="container">
			<div class="row">
				<div id="sliderbar-menu">
					<div class="box-vertical-menu">
						<h4 class="title">
							<span class="btn-icon-list">
								<i class="fas fa-list"></i>
							</span>
							<span class="title-menu">DANH MỤC</span>
						</h4><!--End Danh mục-->
						<div class="vertical-menu-content">
							<div class="menu-list">
								<ul class="container-all-name-list">
									
									<?php foreach($result1 as $values1){?>
										<li class="menu has-child">
										<a class="a has-category" href="danhmuc.php?id=<?php echo $values1["id"] ?>" title="DANH MỤC SỮA TĂNG CÂN">											
												<img class="icon-menu" alt="DANH MỤC SỮA TĂNG CÂN" src="images/logo2.png "/>
												<span><?php echo $values1["tenloai"]; ?></span>											
												
										</a>									
										
									</li>
									<?php
											}
										?>
									<!-- <li class="menu has-child">
										<a class="a has-category" href="#" title="DANH MỤC SỮA TĂNG CƠ">											
												<img class="icon-menu" alt="DANH MỤC SỮA TĂNG CƠ" src="images/logo198.png "/>
												<span>DANH MỤC SỮA TĂNG CƠ</span>											
												
										</a>
																		
									</li>
									
									<li class="menu has-child">
										<a class="a has-category" href="#" title="SỮA NON">											
												<img class="icon-menu" alt="DANH MỤC TĂNG SỨC MẠNH SỨC BỀN" src="images/logo198.png "/>
												<span>DANH MỤC TĂNG SỨC MẠNH SỨC BỀN</span>											
												
										</a>									
									</li>
									
									<li class="menu has-child">
										<a class="a has-category" href="#" title="CÁC SẢN PHẨM HỖ TRỢ SỨC KHỎE">											
												<img class="icon-menu" alt="CÁC SẢN PHẨM HỖ TRỢ SỨC KHỎE" src="images/logo198.png "/>
												<span>CÁC SẢN PHẨM HỖ TRỢ SỨC KHỎE</span>											
												
										</a>									
									
									</li>
									<li class="menu has-child">
										<a class="a has-category" href="#" title="DANH MỤC GIẢM CÂN - ĐỐT MỠ">											
												<img class="icon-menu" alt="DANH MỤC GIẢM CÂN - ĐỐT MỠ" src="images/logo198.png "/>
												<span>DANH MỤC GIẢM CÂN - ĐỐT MỠ</span>											
												
										</a>									
										
									</li>
									<li class="menu has-child">
										<a class="a has-category" href="#" title="COMBO SẢN PHẨM">											
												<img class="icon-menu" alt="COMBO SẢN PHẨM" src="images/logo198.png "/>
												<span>COMBO SẢN PHẨM</span>											
												
										</a>									
										
									</li> -->
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="slide-menu">
					<div class="container-slider">					
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							</ol>
							 <div class="carousel-inner">
							 <div class="carousel-inner">
								<div class="carousel-item active">
								  <img class="d-block w-100" src="images/bannerpkdt1.png" alt="First slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="images/bannerpkdt2.jpg" alt="Second slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="images/bannerpkdt3.jpg" alt="Third slide">
								</div>
							 </div>
							 </div>
						</div>				
					</div>
				</div>
			</div>
		</div>
	</section><!--End danh section-->
	<div class="content-main">
		<div class="container-pr">
			<?php foreach($result2 as $values3){
			?>	
			<h3 class="h3"><a href="#" title=""><?php echo $values3["tenloai"];?></a></h3>
			<?php
				}
			?>
			<div class="row a">
				<?php foreach($result as $values){
				?>	
				<div class="col-md-3 col-sm-6">
					<div class="product-grid6">
						<div class="product-image6">
							<a href="xemchitiet.php?id=<?php echo $values["id"] ?>">
							<img class="pic-1" src="images/<?php echo $values["anhsp"];?>">
							</a>
							
						</div>
						<div class="product-content">
							<h3 class="title"><a href="xemchitiet.php?id=<?php echo $values["id"] ?>"><?php echo $values["tensp"]; ?> </a></h3>
							<div class="price"><?php echo $values["giakm"]; ?>
								<span><?php echo $values["giact"]; ?></span>
							</div>
						</div>
						<ul class="social">
							<li><a href="xemchitiet.php?id=<?php echo $values["id"] ?>" data-tip="Xem chi tiết"><i class="fas fa-eye"></i></a></li>
						</ul>
					</div>
				</div>
				<?php
				}
				?>
				
		</div> 
		
		
		</div>
		
		<div class="trademark">

		</div><!--End trademark-->
	</div><!--End content-main-->
	<div class="footer">
		<!-- footer fist section -->
		<section class="fist-footer">
			<div class="container-footer">
				<div class="row">					
					<div class="item freeship">
						<i class="fas fa-dolly"></i>
						<div class="content freeship">
							<h3>Vận chuyển</h3>
							<p>FREE SHIP > 5.000.000đ</p>
						</div>
					</div>						
					<div class="item transport-fast">
						<i class="far fa-star"></i>
						<div class="content transport">
							<h3>Cam kết chính hãng</h3>
							<p>Đảm bảo chất lượng 100%</p>
						</div>
					</div>					
					<div class="item help">
						<i class="far fa-smile-wink"></i>
						<div class="content help">
							<h3>Hỗ trợ tư vấn </h3>
							<p>24/7</p>
						</div>
					</div>
					<div class="item order-now">
						<i class="fas fa-phone-alt"></i>
						<div class="content help">
							<h3>190016868</h3>
							<p>Đặt hàng ngay</p>
						</div>
					</div>							
				</div>
			</div>	
		</section>
		<!-- footer fist section -->
		<section class="second-footer">
			<div class="container-footer">
				<div class="row">
					<div class="address">
						<p><strong>Minh Đức Store - Hệ Thống Bán Lẻ Điện Thoại Uy Tín Giá Rẻ</strong></p>
						
						<P>Hệ Thống Các Chi Nhánh:
- Cơ sở 1: Số 27G Điện Biên Phủ, P. Minh Khai, Q. Hồng Bàng, Hải Phòng (đối diện doanh trại quân đội, cạnh nhà khách Hải Quân) - ĐT 0776.79.2222
- Cơ sở 2: 90 Đà Nẵng, Núi Đèo, Thuỷ Nguyên - ĐT 0704.695.695 </p>
						
						<p>Đóng góp ý kiến và phản hồi vào email dưới đây !</p>
						<p>Email: minhducstore@gmail</p>
					</div>
				</div>
			</div>
		</section>
	</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/scroll.js"></script>
</body>
</html>