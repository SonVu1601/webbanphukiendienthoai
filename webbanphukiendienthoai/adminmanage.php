<?php
//Nếu chưa đăng nhập thì cho về trang đăng nhập ADMIN
    session_start();
    if(isset($_SESSION["thongbao"])){
        echo $_SESSION["thongbao"];
        session_unset();
    }
    include 'config/config1.php';
    $sql ="SELECT count(*) as total FROM SANPHAM ";
    $sql1 ="SELECT count(*)  as total FROM Danhmuc ";
    $sql2 ="SELECT count(*)  as total FROM nhanvien ";
    $result = mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql);
    $result1 = mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql1);
    $result2 = mysqli_query(mysqli_connect($servername, $dbusername,$dbpass, $dbname ),$sql2);
    $data = mysqli_fetch_assoc($result);
    $data1 = mysqli_fetch_assoc($result1);
    $data2 = mysqli_fetch_assoc($result2);
   
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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   
                </button>
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
                            <a href="admin_typeproduct.php"><i class="fa fa-bar-chart-o fa-fw"></i>Danh Mục<span class="fa arrow"></span></a>
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
                            <a href="admin_user.php"><i class="fa fa-users fa-fw"></i> Nhân Viên<span class="fa arrow"></span></a>
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
                            <h1 class="page-header" >ADMIN-Thống Kê
                                
                            </h1>
                        </div>  
                    </div>
                </div>
            

                <div class="container">
                
                    <div class="row a">
                        
                        <div class="col-md-4 a b" >
                            <h3>Số Sản phẩm</h3>
                            <div class="int"><?php echo $data['total']; ?></div>
                        </div>
                    
                        
                        <div class="col-md-4 a c" >
                            <h3>Số Danh Mục</h3>
                            <div class="int"><?php echo $data1['total'];  ?></div>
                        </div>
                        
                        <div class="col-md-4 a d" >
                            <h3>Số Nhân Viên</h3>  
                            <div class="int"><?php echo $data2['total']; ?></div>
                        </div>
                        
                    </div>
                    <div style="padding-top:100px;margin-right: 60px;">
                        <img class="img" src="images/logo198.png" alt="">
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
