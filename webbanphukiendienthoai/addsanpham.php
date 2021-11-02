<?php
//Nếu chưa đăng nhập thì cho về trang đăng nhập ADMIN
    session_start();
    include 'config/config1.php';
    $sql ="SELECT * FROM danhmuc ";
    
    $result = mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);

    
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ADMIN-Siêu thị sữa dinh dưỡng-Thế giới sữa cho bé">
    <meta name="author" content="">
    <title>
			Minh Đức Store -Admin
		</title>
    <link rel="icon" href="http://theme.hstatic.net/1000361133/1000768639/14/favicon.png?v=984" type="image/png" />
    <link rel="stylesheet" href="css/admin.css">
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="adminmanage.php">Admin Web bán phụ kiện điện thoại</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                
                            </div>
                            <!-- /input-group -->
                        </li>
                        
                        <li>
                            <a ><i class="fa fa-bar-chart-o fa-fw"></i>Danh Mục<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="danhmucadmin.php">Danh mục sản phẩm</a>
                                </li>
                                <li>
                                    <a href="quanlidanhmuc.php">Quản lý danh mục</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin_product.php"><i class="fa fa-cube fa-fw"></i> Sản phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="sanphamadmin.php">Danh sách sản phẩm</a>
                                </li>
                                <li>
                                    <a href="quanlisanpham.php">Quản lý sản phẩm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin_user.php"><i class="fa fa-users fa-fw"></i> Nhân viên<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="nhanvienadmin.php">Danh sách nhân viên</a>
                                </li>
                                <li>
                                    <a href="quanlinhanvien.php">Quản lý nhân viên</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Sản Phẩm
                        </h1>
                    </div>
                    
                </div>
                
            </div>
            <?php
                if(isset($_SESSION["thongbao"])){
                    echo $_SESSION["thongbao"];
                    session_unset();
                }
                ?>
            <div class="container">
                <div class="row">
                    <form action="submitaddsanpham.php" method='POST' enctype="multipart/form-data">
                        						
                        <h2 class="title">Thêm mới sản phẩm</h2>
                        
                        <div class="">				
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" placeholder="Tên sản phẩm" name='tensp' required>
                            </div>
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select name="iddm" id="input" class="form-control" required="required">
                                    
                                    <?php foreach($result as $values){ ?>
                                        <option   value="<?php echo $values['id'] ?>"><?php echo $values['tenloai'] ?></option>
                                    <?php }?>   
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input type="text" class="form-control" placeholder="Giá sản phẩm" pattern="\d+" title="Vui lòng nhập giá tiền!" name='giact' required>
                            </div>
                            <div class="form-group">
                                <label>Giá khuyến mãi</label>
                                <input type="text" class="form-control" placeholder="Giá khuyến mãi" pattern="\d+" title="Vui lòng nhập giá tiền!"  name='giakm' required>
                            </div>
                            <div class="form-group">
                                <label>Ảnh sản phẩm</label>
                                <input type="file"  name="image"    class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label>Thương hiệu</label>
                                <input type="text" class="form-control" placeholder="Thương hiệu"   name='thuonghieu' required>
                            </div>	
                            <div class="form-group">
                                <label>Mô tả sản phẩm</label>
                                <input type="text" class="form-control" placeholder="Mô tả"   name='mota' required>
                            </div>	
                        </div>
                        <div class="ft">
                            <button type="submit" name="them" class="btn btn-success">Thêm</button>
                        </div>

                    </form>
                    <a href="quanlisanpham.php" style="margin-bottom: 100px;"><button type="submit" class="btn btn-outline-secondary">Hủy</button></a>

                </div>
                
            </div>
            
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>

</html>
