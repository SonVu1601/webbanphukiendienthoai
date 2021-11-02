<?php
  
  session_start();
?> 
<?php 
    include("header.php");
?>
<?php
   if(isset($_SESSION["thongbao"])){
       echo $_SESSION["thongbao"];
       session_unset();
   }
?>
<section class="container">
		<div class="row">
            <div class="col-hidden"></div>
            <div class="container-signin">
                <h6>Đăng ký</h6>
                <form class="f" method="post" autocomplete="on" action="submit_signin.php">
                    <ul>
                        <li>
                            <input id ="fullname" class="inf-user" placeholder="Họ và tên" type="text" name="fullName"  required>
                        </li>
                        <li>
                            <input id ="email" class="inf-user" placeholder="Email" type="text" name="Email" pattern="[a-z0-9]+@[a-z]+\.[a-z]{3,}" title="Vui lòng nhập đúng định dạng email !" required> 
                        </li>
                        <li>
                            <input id ="password" class="inf-user" placeholder="Mật khẩu" type="password" name="passWord" pattern=".{6,}" title="Vui lòng nhập 6 kí tự hoặc hơn !" required>
                        </li>
                    
                        <li>
                            <input id ="phone" class="inf-user" placeholder="Số điện thoại" type="text" name="Phone" pattern="\d+" title="Vui lòng nhập số điện thoại!" required>
                        </li>
                        <li>
                            <input id ="address" class="inf-user" placeholder="Địa chỉ" type="text" name="Address" required>
                        </li>
                        <li class="btns">
                            <input id ="btnsubmit" class="btn-signin" type="submit" name="subMit" value="Đăng ký">
                        </li>
                    </ul>
                </form>
            </div>
            <div class="col-hidden"></div>
        </div>
	</section>
    <?php 
    include("footer.php");
    ?>