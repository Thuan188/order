<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<style type="text/css" >
	a.lk_2{text-decoration:none;color:black;font-size:22px;line-height:30px;}
	a.lk_2:hover{color:red;}
</style>
<!--<table width="990px" >
	<tr>
		<td width="495px" valign="top" >
			<a href="?thamso=them_menu_ngang" class="lk_2" >Thêm menu ngang</a><br>
			<a href="?thamso=them_menu_doc" class="lk_2" >Thêm menu dọc</a><br>
			<a href="?thamso=them_san_pham" class="lk_2" >Thêm sản phẩm</a><br>
		</td>
		<td width="495px" valign="top" >
			<a href="?thamso=quan_ly_menu_ngang" class="lk_2" >Quản lý menu ngang</a><br>
			<a href="?thamso=quan_ly_menu_doc" class="lk_2" >Quản lý menu dọc</a><br>
			<a href="?thamso=quan_ly_san_pham" class="lk_2" >Quản lý sản phẩm</a><br>
			<a href="?thamso=hoa_don" class="lk_2" >Quản lý hóa đơn</a><br><br><br>
		</td>
	</tr>
	<tr>
		<td valign="top" >
			<a href="?thamso=san_pham_trang_chu" class="lk_2" >Sản phẩm trang chủ</a><br>
			<a href="?thamso=san_pham_noi_bat" class="lk_2" >Sản phẩm nổi bật</a><br>
			<a href="?thamso=slideshow" class="lk_2" >Slideshow</a><br>
		</td>
		<td valign="top" >
			<a href="?thamso=sua_banner" class="lk_2" >Thay đổi banner</a><br>
			<a href="?thamso=sua_footer" class="lk_2" >Thay đổi footer</a><br>
			<a href="?thamso=sua_quang_cao_trai" class="lk_2" >Thay đổi quảng cáo trái</a><br>
			<a href="?thamso=sua_quang_cao_phai" class="lk_2" >Thay đổi quảng cáo phải</a><br>
			<a href="?thamso=sua_thong_tin_quan_tri" class="lk_2" >Thay đổi thông tin quản trị</a><br>
		</td>
	</tr>
    
        
</table>-->
<div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Bảng điều khiển</p>
                        <div class="right__cards">
                            <?php 
	
         $tv1="select * from san_pham  ";
	$tv_11=mysqli_query($connect,$tv1);
	
        $i1=0;
        while($tv_21=mysqli_fetch_array($tv_11))
		{ $i1++;
                }
                  $tv2="select * from  members  ";
	$tv_12=mysqli_query($connect,$tv2);
	
        $i2=0;
        while($tv_22=mysqli_fetch_array($tv_12))
		{ $i2++;
                }
                  $tv3="select * from menu_doc  ";
	$tv_13=mysqli_query($connect,$tv3);
	
        $i3=0;
        while($tv_23=mysqli_fetch_array($tv_13))
		{ $i3++;
                }
                  $tv4="select * from hoa_don  ";
	$tv_14=mysqli_query($connect,$tv4);
	
        $i4=0;
        while($tv_24=mysqli_fetch_array($tv_14))
		{ $i4++;
                }
                  $tv5="select * from san_pham where trang_chu='co'  ";
	$tv_15=mysqli_query($connect,$tv5);
	
        $i5=0;
        while($tv_25=mysqli_fetch_array($tv_15))
		{ $i5++;
                }
                  $tv6="select * from san_pham where noi_bat='co'  ";
	$tv_16=mysqli_query($connect,$tv6);
	
        $i6=0;
        while($tv_26=mysqli_fetch_array($tv_16))
		{ $i6++;
                }
                  $tv7="select * from slideshow  ";
	$tv_17=mysqli_query($connect,$tv7);
	
        $i7=0;
        while($tv_27=mysqli_fetch_array($tv_17))
		{ $i7++;
                }
                  $tv8="select * from thong_tin_quan_tri  ";
	$tv_18=mysqli_query($connect,$tv8);
	
        $i8=0;
        while($tv_28=mysqli_fetch_array($tv_18))
		{ $i8++;
                }
                $tv9="select * from menu_ngang  ";
	$tv_19=mysqli_query($connect,$tv9);
	
        $i9=0;
        while($tv_28=mysqli_fetch_array($tv_19))
		{ $i9++;
                }
?>
                            <a class="right__card" href="?thamso=san_pham">
                                <div class="right__cardTitle">Sản Phẩm</div>
                                <div class="right__cardNumber"><?php echo $i1;?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                            </a>
                            <a class="right__card" href="">
                                <div class="right__cardTitle">Khách Hàng</div>
                                <div class="right__cardNumber"><?php echo $i2;?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                            </a>
                            <a class="right__card" href="?thamso=menu_doc">
                                <div class="right__cardTitle">Danh Mục</div>
                                <div class="right__cardNumber"><?php echo $i3;?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                            </a>
                            <a class="right__card" href="?thamso=hoa_don">
                                <div class="right__cardTitle">Đơn Hàng</div>
                                <div class="right__cardNumber"><?php echo $i4;?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                            </a>
                            
                        </div>
                        <div class="right__cards">
                            <a class="right__card1" href="?thamso=quan_ly_menu_ngang">
                                <div class="right__cardTitle">Quản lý menu ngang</div>
                                <div class="right__cardNumber"><?php echo $i9;?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                            </a>
                            <a class="right__card1" href="?thamso=hoa_don">
                                <div class="right__cardTitle">Hóa đơn</div>
                                <div class="right__cardNumber"><?php echo $i4;?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                            </a>
                            <a class="right__card1" href="?thamso=san_pham_trang_chu">
                                <div class="right__cardTitle">Sản phẩm trang chủ</div>
                                <div class="right__cardNumber"><?php echo $i5;?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                            </a>
                            <a class="right__card1" href="?thamso=san_pham_noi_bat">
                                <div class="right__cardTitle">Sản phẩm nổi bật</div>
                                <div class="right__cardNumber"><?php echo $i6;?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                            </a>
                         
                        </div>
                        <div class="right__cards">
                            <a class="right__card2" href="?thamso=them_san_pham">
                                <div class="right__cardTitle">Thêm sản phẩm</div>
                                <div class="right__cardNumber"><?php echo $i1;?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                            </a>
                            <a class="right__card2" href="?thamso=menu_ngang">
                                <div class="right__cardTitle">Menu</div>
                                <div class="right__cardNumber"><?php echo $i9;?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                            </a>
                            <a class="right__card2" href="?thamso=slideshow">
                                <div class="right__cardTitle">Slideshow</div>
                                <div class="right__cardNumber"><?php echo $i7;?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                            </a>
                            <a class="right__card2" href="?thamso=sua_thong_tin_quan_tri">
                                <div class="right__cardTitle">Thay đổi thông tin quản trị</div>
                                <div class="right__cardNumber"><?php echo $i8;?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                            </a>
                            
                        </div>
                        <?php 
	$so_dong_tren_mot_trang=20;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	
	$tv="select count(*) from hoa_don";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	$tv="select * from hoa_don order by id desc limit $vtbd,$so_dong_tren_mot_trang";
	$tv_1=mysqli_query($connect,$tv);
?>

                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên</th>
                                            <th>Số đt</th>
                                            <th>Số hóa đơn</th>
                                            <th>Email</th>
                                            <th>Số lượng</th>
                                            <th>Địa chỉ</th>
                                            <th>Ngày</th>
                                            <th>Tổng</th>
                                            <th>Trạng thái</th>
                                           
                                            
                                            
                                        </tr>
                                    </thead>
                            <?php 
                            $i=0;
		while($tv_2=mysqli_fetch_array($tv_1))
		{
                    $i=$i+1;
			$id=$tv_2['id'];
			$ten=$tv_2['ten_nguoi_mua'];
			$email=$tv_2['email'];
                        $sl=$tv_2['so_luong'];
                        $tt=$tv_2['tong_tien'];
                        $ngay=$tv_2['ngaytaohd'];
                        $url=$tv_2['dia_chi'];                       
			$dien_thoai=$tv_2['dien_thoai'];
                        $trang_thai=$tv_2['noi_dung'];
			$link_xem="?thamso=xem_hoa_don&id=".$id."&trang=".$_GET['trang'];
			$link_xoa="?xoa_hoa_don=co&id=".$id;
			$link_cap_nhat="?cap_nhat_hoa_don=co&id=".$id;
			?>
                                    <tbody>
                                        <tr>
                                            <td data-label="STT"><?php echo $i; ?></td>
                                            <td data-label="Họ tên"><?php echo $ten; ?></td>
                                            <td data-label="Số điện thoại"><?php echo $dien_thoai; ?></td>
                                            <td data-label="Số hoá đơn"><?php echo $id; ?></td>
                                            <td data-label="Email"><?php echo $email; ?></td>
                                            <td data-label="Số lượng"><?php echo $sl; ?></td>
                                            <td data-label="Địa chỉ"><?php echo $url; ?></td>
                                            <td data-label="Ngày"><?php echo $ngay; ?></td>
                                            <td data-label="Tổng"><?php echo $tt; ?></td>
                                            <td data-label="Trạng thái"><?php echo $trang_thai; ?></td>
                                           
                                        </tr>
                                        
                <?php }?>            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                            <a href="?thamso=hoa_don" class="right__tableMore"><p>Xem tất cả các đơn đặt hàng</p> <img src="assets/arrow-right-black.svg" alt=""></a>
                        </div>
                    </div>
                </div>