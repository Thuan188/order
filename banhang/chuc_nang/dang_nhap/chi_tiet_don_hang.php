<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
  .box-des {
    min-height: 110px;
    padding: 10px 20px;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    background: #fff;
    
    
    
  }
  .body_order{
      margin-top: 20px;
  }
   .box-des p {
    color: #212B25;
    font-family: "Quicksand",sans-serif;
    font-size: 14px;
    line-height: 16px;
    vertical-align: top;
    text-align: left;
    margin-bottom: 8px;
    margin: 10px 20px;
    
}
 .order_date {
    float: right;
    font-size: 14px;
    font-weight: bold;
    display: inline-block;
    margin-top: 15px;
    color: #4CAF50;
}
.payment_status {
    margin-right: 35px;
}

 .shipping_status, .payment_status {
    display: inline-block;
    font-family: "Quicksand",sans-serif;
    font-size: 14px;
    line-height: 16px;
}
.payment_status, .shipping_status {
    background: #fff;
    padding: 10px;
    margin-top: 10px;
    border-radius: 5px;
}

.title-head1 {
    font-size: 19px;
    font-family: "Quicksand",sans-serif;
    font-weight: 400;
    color: #ffffff;
    text-transform: uppercase;
    margin-bottom: 0;
    background: #ff5757;
    padding: 6px 10px;
    clear: both;
    margin-top: 10px;text-transform: none;
    float: left;
    display: inline-block;
}
 .box-address {
    margin-top: 15px;
}
.title-head2 {
    font-family: "Quicksand",sans-serif;
    font-size: 16px;
    text-transform: uppercase;
    line-height: 19px;
    font-weight: 400;
    margin-bottom: 6px;
    padding-left: 20px;
    color: #ffffff;
    text-transform: uppercase;
    margin-bottom: 0;
    background: #ff5757;
    padding: 6px 10px;
    margin: 10px;
   
}

}
</style>
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
        $email=$member['email'];
        $ten_tk=$member['Name'];
	//----Noi dung thong bao sau khi sua
	$thanhcong='Sửa thành công <a href="index.php">Quay lại</a>';
	$kothanh='Sửa ko thành công';

?>
    <?php 
	$id=$_GET['id'];
	$tv="select * from hoa_don where id='$id' ";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ten_nguoi_mua=$tv_2['ten_nguoi_mua'];
	$email=$tv_2['email'];
	$dien_thoai=$tv_2['dien_thoai'];
	$dia_chi=$tv_2['dia_chi'];
        $ngay_tao=$tv_2['ngaytaohd'];
	$noi_dung=$tv_2['noi_dung'];
	$hang_duoc_mua=$tv_2['hang_duoc_mua'];
//	$link_dong="?thamso=hoa_don&&trang=".$_GET['trang'];
//	$link_xoa="?xoa_hoa_don_o_trang_chi_tiet=co&id=".$id."&trang=".$_GET['trang'];
//	$link_cap_nhat="?cap_nhat_hoa_don=co&id=".$id."&trang=".$_GET['trang'];
?>
    <section class="login page_order lazy_big_bg" >
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
                <div class="block-account">
                    <h5 class="title-account">Trang tài khoản</h5>
                    <ul>
						<li>
						<p>Xin chào, <span style="color:#ff5757;"><?php echo $ten_tk; ?></span>&nbsp;!</p>
						</li>
                        <li>
                            <a disabled="disabled" class="title-info " href="?thamso=suathongtin_dn">Thông tin tài khoản</a>
                        </li>
                        <li>
                            <a class="title-info active" href="?thamso=donhang_nguoidung">Đơn hàng của bạn</a>
                        </li>
                        <li>
                            <a class="title-info" href="?thamso=doi_mk">Đổi mật khẩu</a>
                        </li>
                        <li>
                            <a class="title-info" href="">Sổ địa chỉ (0)</a>
                        </li>
                    </ul>
                </div>
            </div>
          
            
            <div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
                <div class="head-title clearfix">
                    <h1 class="title-head">Chi tiết đơn hàng #<?php echo $id; ?></h1>
                    <span class="note order_date">
                        <?php echo $ngay_tao; ?>
                    </span>
                </div>
                <div class="payment_status">
                    <span class="note">Trạng thái thanh toán:</span>
                    
                    <i class="status_pending">
                        
                        <em>
                            
                            <span class="span_pending" style="color: red"><strong><em><?php echo $noi_dung; ?></em></strong></span>
                            
                        </em>
                        
                    </i>
                    
                </div>
                <div class="shipping_status">
                    <span class="note">Trạng thái vận chuyển:</span>
                    
                    
                    <span class="span_" style="color: red"><strong><em><?php echo $noi_dung; ?></em></strong></span>
                    
                    
                </div>
                
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 body_order">
                        
                        <div class="box-address">
                            <h2 class="title-head">Địa chỉ giao hàng</h2>

                            <div class="address box-des">
                                <p> <strong><?php echo $ten_tk; ?></strong></p>
                                <p>
                                    Địa chỉ:
                                    
                                    
<?php echo $dia_chi; ?>                                  
                                    
                                </p>
                                
                                <p>Số điện thoại: <?php echo $dien_thoai; ?></p>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 body_order">
                        <div class="box-address">
                            <h2 class="title-head">
                                Thanh toán
                            </h2>
                            <div class="box-des">
                                <p>
                                    Thanh toán khi giao hàng (COD)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 body_order">
                        <div class="box-address">
                            <h2 class="title-head">
                                Ghi chú
                            </h2>
                            <div class="box-des">
                                <p>
                                    
                                    Không có ghi chú
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="table-order">
                            <div class="table-responsive-block table_mobile">
                                <table id="order_details" class="table table-cart">
                                    <thead class="thead-default theborder">
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Đơn giá</th>
                                            <th>Số lượng</th>
                                            <th>Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
					$m=explode("[|||||]",$hang_duoc_mua);	
					$tong_lon=0;
                                        $tong_sl=0;
					for($i=0;$i<count($m);$i++)
					{
						if(isset($m[$i]))
						{
							if($m[$i]!="")
							{
								$stt=$i+1;
								$m_2=explode("[|||]",$m[$i]);
								$id_sp=$m_2[0];
								$sl_sp=$m_2[1];
								$tv_sp="select id,ten,gia,hinh_anh from san_pham where id='$id_sp' ";
								$tv_sp_1=mysqli_query($connect,$tv_sp);
								$tv_sp_2=mysqli_fetch_array($tv_sp_1);
								$ten=$tv_sp_2['ten'];
								$gia=$tv_sp_2['gia'];
                                                                $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$id_sp;
                                                                $link_hinh="hinh_anh/san_pham/".$tv_sp_2['hinh_anh'];
								$gia_duoc_dinh_dang=number_format($gia,0,",",".");
								$tong=$gia*$sl_sp;
								$tong_duoc_dinh_dang=number_format($tong,0,",",".");
								$tong_lon=$tong_lon+$tong;
                                                                $tong_sl=$tong_sl+$sl_sp;
								if($sl_sp!=0)
								{
								?>
                                    
                                        
                                        <tr>
                                            <td class="link" data-title="Tên">
                                                <div class="image_order">
                                                    <a title="<?php echo $ten; ?>" href="<?php echo $link_chi_tiet; ?>"><img  src="<?php echo $link_hinh; ?>"></a>
                                                </div>
                                                <div class="content_right">
                                                    <a class="title_order" href="<?php echo $link_chi_tiet; ?>" title="<?php echo $ten; ?>"><?php echo $ten; ?></a>
                                                    
                                                    
                                                    
                                                    <div class="bottom_mb">
                                                        <div class="quantity_mb">
                                                            x<?php echo $sl_sp; ?>
                                                        </div>
                                                        <div class="sum_mb">
                                                            <?php echo $gia; ?>đ
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                            <td data-title="Giá" class="numeric"><?php echo $tong; ?>₫</td>
                                            <td data-title="Số lượng" class="numeric"><?php echo $sl_sp; ?></td>
                                            <td data-title="Tổng" class="numeric"><?php echo $tong_lon; ?>₫</td>
                                        </tr>
                                       <?php
								}								
							}
						}
					}
				?>      
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                            <table class="table totalorders">
                                <tfoot>
                                    <tr class="order_summary discount">
                                        <td>Khuyến mại </td>

                                        <td class="total money right">0₫</td>
                                    </tr>
                                    
                                    <tr class="order_summary ">
                                        <td colspan="">Phí vận chuyển</td>
                                        <td class="total money right">
                                            
                                            40.000₫
                                            
                                            
                                        </td>

                                    </tr>
                                    
                                    <tr class="order_summary order_total">
                                        <td>Tổng tiền</td>
                                        <td class="right"><strong style="color:#CA170E;font-size:19px;">210.000₫</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} 
?>
        </section>
</body>
</html>