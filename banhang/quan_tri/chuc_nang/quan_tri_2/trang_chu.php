<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<!--<style type="text/css" >
	a.lk_1{font-size:22px;text-decoration:none;color:blue;margin-right:30px}
	a.lk_1:hover {color:red}
</style>-->
<!--<br>-->
<!--<center>
<a href="index.php" style="font-size:72px;color:blue;text-decoration:none" >Quản trị cửa hàng</a>
</center>
<br><br>
<table width="990px" >
	<tr>
		<td width="800px">
			<a href="index.php" class="lk_1" >Trang chủ</a>
			<a href="?thamso=menu_doc" class="lk_1" >Menu dọc</a>
			<a href="?thamso=menu_ngang" class="lk_1" >Menu ngang</a>
			<a href="?thamso=san_pham" class="lk_1" >Sản phẩm</a>
			<a href="?thamso=hoa_don" class="lk_1" >Hóa đơn</a>
		</td>
		<td align="right" >
			<a href="?thamso=thoat" class="lk_1" >Thoát</a>
		</td>
	</tr>
</table>
<br><br>-->

<div class="wrapper">
        <div class="container">
            <div class="dashboard">
                <div class="left">
                    <span class="left__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <div class="left__content">
                        <div class="left__logo">LOGO</div>
                        <div class="left__profile">
                            <div class="left__image"><img src="assets/profile.jpg" alt=""></div>
                            <p class="left__name">QUẢN LÝ BÁN HÀNG</p>
                        </div>
                        <ul class="left__menu">
                            <li class="left__menuItem">
                                <a href="index.php" class="left__title"><img src="assets/icon-dashboard.svg" alt="">Dashboard</a>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-tag.svg" alt="">Sản Phẩm<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="?thamso=them_san_pham">Chèn Sản Phẩm</a>
                                    <a class="left__link" href="?thamso=quan_ly_san_pham">Xem Sản Phẩm</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-edit.svg" alt="">Danh Mục SP<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="?thamso=them_menu_doc">Chèn Danh Mục</a>
                                    <a class="left__link" href="?thamso=quan_ly_menu_doc">Xem Danh Mục</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-book.svg" alt="">Menu<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="?thamso=them_menu_ngang">Chèn Thể Loại</a>
                                    <a class="left__link" href="?thamso=quan_ly_menu_ngang">Xem Thể Loại</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-settings.svg" alt="">Slide<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="?thamso=them_slideshow">Chèn Slide</a>
                                    <a class="left__link" href="?thamso=quan_ly_slideshow">Xem Slide</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-book.svg" alt="">Coupons<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="insert_coupon.html">Chèn Coupon</a>
                                    <a class="left__link" href="view_coupons.html">Xem Coupons</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <a href="?thamso=khach_hang" class="left__title"><img src="assets/icon-users.svg" alt="">Khách Hàng</a>
                            </li>
                            <li class="left__menuItem">
                                <a href="?thamso=hoa_don" class="left__title"><img src="assets/icon-book.svg" alt="">Đơn Đặt Hàng</a>
                            </li>
                            <li class="left__menuItem">
                                <a href="edit_css.html" class="left__title"><img src="assets/icon-pencil.svg" alt="">Chỉnh CSS</a>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-user.svg" alt="">Admin<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="?thamso=sua_thong_tin_quan_tril">Chèn Admin</a>
                                    <a class="left__link" href="?thamso=sua_thong_tin_quan_tri">Xem Admins</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <a href="?thamso=thoat" class="left__title"><img src="assets/icon-logout.svg" alt="">Đăng Xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
<?php 
	include("chuc_nang/quan_tri_2/dieu_huong.php");
?>


                
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
<!--    <table width="990px" >
	<tr>
		<td width="445px" align="right">
			Cửa hàng :
		</td>
		<td width="445px" >
			Luli
		</td>
	</tr>
	<tr>
		<td align="right" >
			Quản trị viên :
		</td>
		<td>
			ten_quan_tri_vien
		</td>
	</tr>
	<tr>
		<td align="right" >
			Điện thoại :
		</td>
		<td>
			0373951042
                        
		</td>
	</tr>
</table>-->