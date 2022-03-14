<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
if(isset($_POST['pass'])){
if($_POST['pass']!=$_POST['Password']){
    
   ?>
        <section class="main-cart-page main-container col1-layout">
		<div class="main container hidden-xs hidden-sm">

			<div class="col-main cart_desktop_page cart-page" style="min-height: auto;"><p class="hidden-xs-down warr">Mật khậu nhập không trùng nhau. Quay lại <a href="?thamso=doi_mk" style="color:;">cửa hàng</a> để tiếp tục đổi.</p></div>

		</div>
		<div class="cart-mobile hidden-md hidden-lg container">
			<form action="/cart" method="post" novalidate="" class="margin-bottom-0">
				<div class="title_cart_mobile">

				</div>

				<div class="header-cart-content" style="background:#fff;"><div class="col-xs-12"><p class="warr">Mật khậu nhập không trùng nhau. Quay lại <a href="?thamso=doi_mk" style="color:;">cửa hàng</a> để tiếp tục đổi.</p></div></div>

			</form>

		</div>

	</section>
    <?php
} else {
    

?>
<body>
<?php
        
	$user_id = intval($_SESSION['user_id']);
	$sql_query = @mysqli_query($connect,"SELECT * FROM members WHERE id='{$user_id}'");
	$member = @mysqli_fetch_array( $sql_query ); 
        
        $pass1 = md5( addslashes( $member['password'] ) );
        if($pass1==$_POST['pass']){
//           echo 'Mật khậu nhập trùng mật khẩu cũ <a href="?thamso=doi_mk">Quay lại</a><br>';
//	echo 'Sửa ko thành công';
         ?>
        <section class="main-cart-page main-container col1-layout">
		<div class="main container hidden-xs hidden-sm">

			<div class="col-main cart_desktop_page cart-page" style="min-height: auto;"><p class="hidden-xs-down warr">Mật khậu nhập trùng mật khẩu cũ. Quay lại <a href="?thamso=doi_mk" style="color:;">cửa hàng</a> để tiếp tục đổi.</p></div>

		</div>
		<div class="cart-mobile hidden-md hidden-lg container">
			<form action="/cart" method="post" novalidate="" class="margin-bottom-0">
				<div class="title_cart_mobile">

				</div>

				<div class="header-cart-content" style="background:#fff;"><div class="col-xs-12"><p class="warr">Mật khậu nhập trùng mật khẩu cũ. Quay lại <a href="?thamso=doi_mk" style="color:;">cửa hàng</a> để tiếp tục đổi.</p></div></div>

			</form>

		</div>

	</section>
    <?php
        }else{
        if($pass1!=$_POST['OldPassword']){
//            echo 'Mật khậu cũ không đúng <a href="?thamso=doi_mk">Quay lại</a><br>';
//	echo 'Sửa ko thành công';
         ?>
        <section class="main-cart-page main-container col1-layout">
		<div class="main container hidden-xs hidden-sm">

			<div class="col-main cart_desktop_page cart-page" style="min-height: auto;"><p class="hidden-xs-down warr">Mật khậu cũ không đúng. Quay lại <a href="?thamso=doi_mk" style="color:;">cửa hàng</a> để tiếp tục đổi.</p></div>

		</div>
		<div class="cart-mobile hidden-md hidden-lg container">
			<form action="/cart" method="post" novalidate="" class="margin-bottom-0">
				<div class="title_cart_mobile">

				</div>

				<div class="header-cart-content" style="background:#fff;"><div class="col-xs-12"><p class="warr">Mật khậu cũ không đúng. Quay lại <a href="?thamso=doi_mk" style="color:;">cửa hàng</a> để tiếp tục đổi.</p></div></div>

			</form>

		</div>

	</section>
    <?php
        } else {
            
        
	//----Noi dung thong bao sau khi sua
	
		
			 if ($sua=mysqli_query($connect,$sql))
			echo $thanhcong;
		else
			echo $kothanh;
		if (isset($_POST['pass']) && $_POST['pass']!="") {
			$sqlx="UPDATE members SET password = '$pass' WHERE id = '$user_id' LIMIT 1";
			$suapass=mysqli_query($connect,$sqlx);
			if ($suapass) 
				echo "(Đã đổi pass) ";
			else
				echo "(Chưa đổi pass) ";
                        
		}}
        }
	}
}
if(isset($_POST['name'])){
       $user_id = intval($_SESSION['user_id']);
	$sql_query = @mysqli_query($connect,"SELECT * FROM members WHERE id='{$user_id}'");
	$member = @mysqli_fetch_array( $sql_query ); 
        $thanhcong= 'Sửa thành công <a href="index.php">Quay lại</a><br>';
	$kothanh= 'Sửa ko thành công';
	echo "<b>Đang Sửa tài khoản {$member['username']}</b>.<br>"; 
		$ten = addslashes( $_POST['name'] );
                if(isset($_POST['pass'])){
		$pass = md5( addslashes( $_POST['pass'] ) );
                }
		$sn = addslashes( $_POST['sn'] );
		$url = addslashes( $_POST['url'] );
		$email = addslashes( $_POST['email'] );
		$dt = addslashes( $_POST['dt'] );
		$sql="UPDATE members SET	email = '$email',URLS = '$url',	Name = '$ten',Birthday = '$sn',dienthoai='$dt' WHERE id = '$user_id'";
                if ($sua=mysqli_query($connect,$sql))
			echo $thanhcong;
		else
			echo $kothanh;
}
?>
</body>
</html>