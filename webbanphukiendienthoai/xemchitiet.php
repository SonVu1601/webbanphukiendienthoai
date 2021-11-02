<?php
    include 'config/config1.php';
    $id = $_GET["id"];
    $sql = "SELECT * FROM sanpham WHERE id = $id";
    
    $result = mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);
    
    
?>
<?php 
    
    include("header.php");
?>
<?php foreach($result as $values){
    $sql1 ="SELECT tenloai FROM danhmuc WHERE id = $values[id_dm]";
    $result1= mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql1);
                    ?>	
    <!--category-product-->
	<div class="home-category">
		<div class="row-home-category">
			<div class="container-category">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>/</i>
                    </li>
                <?php foreach($result1 as $values1){
                ?>
					<li>
                        <a href=""><?php echo $values1["tenloai"]; ?></a>
                        <i>/</i>
                    </li>
                    <?php
                                }
                                ?>
				</ul>
			</div>
		</div>
    </div>
    <div class="detail-product">
            <div class="container-dtproduct">
                <div class="row-dtproduct">
                
                    <div class="left-dtproduct">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="images/<?php echo $values["anhsp"];?>" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="images/<?php echo $values["anhsp"];?>" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="images/<?php echo $values["anhsp"];?>" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div><!--End left-dtproduct -->
                    <div class="right-dtproduct">
                        <div class="container-inf-dtpr">
                            <h3 class="inf-dtproduct"><?php echo $values["tensp"]; ?></h3>
                            <p class="inf-dtproduct">
                                <span class="item_price"><?php echo $values["giakm"]; ?></span>
                                <del class="mx-2 font-weight-light"><?php echo $values["giact"]; ?></del>
                                <label>Miễn phí vận chuyển</label>
                            </p>
                            <div class="single-infoagile">
                                <ul>
                                <?php foreach($result1 as $values1){
                                ?>
                                    
                                    <li class="inf-dtproduct">
                                        <i class="fas fa-check-circle"></i>Danh Mục Sản Phẩm: <?php echo $values1["tenloai"]; ?>
                               
                                    </li>
                                    <?php
                                }
                                ?>
                                    <li class="inf-dtproduct">
                                        <i class="fas fa-check-circle"></i>Mã sản phẩm: <?php echo $values["id"]; ?>
                                    </li>
                                    <li class="inf-dtproduct">
                                        <i class="fas fa-check-circle"></i>Thương hiệu: <?php echo $values["thuonghieu"]; ?>
                                    </li>

                                </ul>
                            </div>
                    
                            <div class="product-single-w3l">                          
                                    <h3>Dịch vụ & khuyến mãi:</h3>                        
                                <ul>                           
                                    <li class="service-dtproduct">
                                        <i class="fas fa-dolly"></i>
                                        Freeship cho đơn hàng nội thành Hà Nội<br/>
                                        <span>(Áp dụng cho đơn hàng > 3 sản phẩm)</span>
                                    </li>                              
                                    <li class="service-dtproduct">
                                        <i class="fas fa-star"></i>
                                        Cam kết hàng đúng thực tế
                                    </li>
                                    <li class="service-dtproduct">
                                        <i class="fas fa-money-bill"></i>
                                        Giá cả hợp lý nhất
                                    </li>
                                    <li class="service-dtproduct">
                                        <i class="fas fa-credit-card"></i>
                                        Hỗ trợ thanh toán trực tuyến & Thẻ tín dụng / Ghi nợ
                                    </li>
                                </ul>
                            </div>
                            <div class="occasion-cart">                           
                                <form action="submit_giohang.php?id=<?php echo $values["id"];?>" method="POST">                             
                                    <input type="submit" name="submit" value="Add to cart" class="dt-button" />                             
                                </form>                           
                            </div>
                        </div>
                    </div><!--End right-dtproduct -->
                </div>
                <div class="bottom-dtproduct">
                    <div class="description-dt">
                        <h2>Mô tả sản phẩm</h2>
                    </div>
                    <div class="content-description">
                        <?php echo $values["motasp"]; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
                    }
                    ?>
    <?php 
    
    include("footer.php");
    ?>
