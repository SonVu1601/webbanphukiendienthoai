<?php
//Nếu chưa đăng nhập thì cho về trang đăng nhập ADMIN
    session_start();
    
    include 'config/config1.php';
    $sql ="SELECT * FROM Danhmuc ";
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
    <title>ADMIN-Websitebansuatapgym </title>
    <link rel="icon" href="images/logo198.png" type="image/png" />
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
                        <h1 class="page-header">Quản lý danh mục
                        </h1>
                    </div>
                    
                </div>
                <?php
                if(isset($_SESSION["thongbao"])){
                        echo $_SESSION["thongbao"];
                        session_unset();
                    }
                ?>
                <a href="adddanhmuc.php"><button class="btn btn-success"> Thêm Danh Mục</button></a>
                
                
            </div>
            <div class="container-fluid">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width ="50px">STT</th>
                            <th>Tên Loại</th>
                            <th width ="500px">Mô Tả</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php $data =1; foreach($result as $values){?>
                        <tr>
                            <td><?php echo $data++; ?></td>
                            <td><?php echo $values["tenloai"]; ?></td>
                            <td><?php echo $values["mota"]; ?></td>
                            <td width ="30px"><a href="xoadanhmuc.php?id=<?php echo $values["id"] ?>"><button class="btn btn-danger" >Xóa</button></a></td>
                        </tr>
                    <?php }?>
                    </tbody>
                    
                </table>
                
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