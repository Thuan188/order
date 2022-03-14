<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" href="/DEMO_WEB_ORDER/banhang/chuc_nang/dang_nhap/demo_signup3.css"/>
</head>

<body>
<?php 
echo '<title>Sua thong tin ca nhan </title>';
//echo '<a href="index.php">Bấm vào đây để quay lại<br></a>';
require_once("ket_noi1.php"); 
if ( !$_SESSION['user_id'] )
{ 
	echo "Bạn chưa đăng nhập! <a href='chuc_nang/dang_nhap/login.php'>Nhấp vào đây để đăng nhập</a> hoặc <a href='chuc_nang/dang_nhap/register.php'>Nhấp vào đây để đăng ký</a>"; 
}
else
{ 
	$user_id = intval($_SESSION['user_id']);
	$sql_query = @mysqli_query($connect,"SELECT * FROM members WHERE id='{$user_id}'");
	$member = @mysqli_fetch_array( $sql_query ); 
	//----Noi dung thong bao sau khi sua
	$thanhcong='Sửa thành công <a href="index.php">Quay lại</a>';
	$kothanh='Sửa ko thành công';

?>
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
                <div class="block-account">
                    <h5 class="title-account">Trang tài khoản</h5>
                    <ul>
						<li>
						<p>Xin chào, <span style="color:#ff5757;">nguyen quan</span>&nbsp;!</p>
						</li>
                        <li>
                            <a disabled="disabled" class="title-info " href="?thamso=suathongtin_dn">Thông tin tài khoản</a>
                        </li>
                        <li>
                            <a class="title-info " href="?thamso=donhang_nguoidung">Đơn hàng của bạn</a>
                        </li>
                        <li>
                            <a class="title-info active" href="?thamso=thamso2=doi_mk">Đổi mật khẩu</a>
                        </li>
                        <li>
                            <a class="title-info" href="">Sổ địa chỉ (0)</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
				<h1 class="title-head margin-top-0">Đổi mật khẩu</h1>
				<div class="row">
					
                                            <form id="change_customer_password" method='POST' action='?thamso=sua_user'>
            <input name="FormType" type="hidden" value="change_customer_password">
            <input name="utf8" type="hidden" value="true">
					<div class="col-md-6 col-xs-12">
						<div class="page-login">
							<div class="form-signup clearfix">
								<fieldset class="form-group">
									<label for="oldPass">Mật khẩu cũ <span class="error">*</span></label>
									<input type="password" name="OldPassword" id="OldPass" required="" class="form-control form-control-lg">
								</fieldset>
								<fieldset class="form-group">
									<label for="changePass">Mật khẩu mới <span class="error">*</span></label>
									<input type="password" name="Password" id="changePass" required="" class="form-control form-control-lg">
								</fieldset>
								<fieldset class="form-group">
									<label for="confirmPass">Xác nhận lại mật khẩu <span class="error">*</span></label>
                                                                       
									<input type="password" name="pass" id="confirmPass" required="" class="form-control form-control-lg">
								</fieldset>
                                                            <button type="submit" class="button btn-edit-addr btn btn-primary btn-more"><i class="hoverButton"></i>Đặt lại mật khẩu</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<p class="war">
							Để đảm bảo tính bảo mật vui lòng đặt mật khẩu với ít nhất 8 kí tự
						</p>
						
						
					</div>
					</form>
				</div>
			</div>
        </div>
    </div>
    <?php
} 
?>
</body>
</html>