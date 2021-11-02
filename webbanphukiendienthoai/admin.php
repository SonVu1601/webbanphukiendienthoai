<?php 
    session_start();
?>
<?php
   if(isset($_SESSION["thongbao"])){
       echo $_SESSION["thongbao"];
       session_unset();
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
			Minh Đức Store -Admin
		</title>
    <link rel="icon" href="http://theme.hstatic.net/1000361133/1000768639/14/favicon.png?v=984" type="image/png" />
    
    <link rel="stylesheet" href="css/admin.css">
    <link type="text/css" href="./bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <img class="img" src="images/logo2.png" alt="">
    <div class="login_form">
        <form action="submitlogin_admin.php" autocomplete="on" method="post">
            <h2 class="text-center">Đăng nhập</h2>       
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nhập Email" pattern="[a-z0-9]+@[a-z]+\.[a-z]{3,}" title="Vui lòng nhập đúng định dạng email !" name="email" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Mật khẩu" name="password" pattern=".{6,}" title="Vui lòng nhập 6 kí tự hoặc hơn !" required="required">
            </div>
            
            <button type="submit" class="btn a btn-primary btn-block" name="subMit">Đăng nhập</button>
            
            </div>        
        </form>
    </div>
</body>
</html>