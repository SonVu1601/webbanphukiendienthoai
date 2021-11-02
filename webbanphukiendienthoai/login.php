<?php 
    session_start();
    include("header.php");
    
  
  

?>
<?php
   if(isset($_SESSION["thongbao"])){
       echo $_SESSION["thongbao"];
       session_unset();
   }
?>
<section class="container" id="ctn-lg">
		<div class="row" id="row-login">
            <div class="col-hidden-login"></div>
            <div class="container-login">
                <h6>Đăng nhập</h6>
                <form class="f" method="post" autocomplete="on" action="submit_login.php">
                    <ul>                       
                        <li>
                            <input id ="email" class="inf-user" placeholder="Email" type="text" name="Email" pattern="[a-z0-9]+@[a-z]+\.[a-z]{3,}" title="Vui lòng nhập đúng định dạng email !" required> 
                        </li>
                        <li>
                            <input id ="password" class="inf-user" placeholder="Mật khẩu" type="password"  pattern=".{6,}" title="Vui lòng nhập 6 kí tự hoặc hơn !" name="passWord" required>
                        </li>                       
                        <li class="btns">
                            <input id ="btnsubmit" class="btn-signin" type="submit" name="subMit" value="Đăng nhập">
                        </li>
                    </ul>
                </form>
            </div>
            <div class="col-hidden-login"></div>
        </div>
	</section>

<?php 
    include("footer.php");
    ?>