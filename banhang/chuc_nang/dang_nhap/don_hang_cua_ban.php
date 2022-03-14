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
        $email=$member['email'];
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
                <h1 class="title-head margin-top-0">Đơn hàng của bạn</h1>
                <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
                    
                    <div class="my-account">
                        <div class="dashboard">

                            <div class="recent-orders">
                                <div class="table-responsive-block tab-all" style="overflow-x:auto;">
                   
                                    <table class="table table-cart table-order" id="my-orders-table">
                                        <thead class="thead-default">
                                            <tr>
                                                <th>Đơn hàng</th>
                                                <th>Ngày</th>
                                                <th>Địa chỉ</th>
                                                <th>Giá trị đơn hàng</th>
                                                <th>TT thanh toán</th>
                                                <th>TT vận chuyển</th>
                                            </tr>
                                        </thead>
   <?php              $tv="select *  from hoa_don where id_members='{$user_id}'";
	$tv_1=mysqli_query($connect,$tv);
	
        while($tv_2=mysqli_fetch_array($tv_1))
		{
            $id=$tv_2['id'];
             
             $tt=$tv_2['tong_tien'];
             $ngay=$tv_2['ngaytaohd'];
             $url=$tv_2['dia_chi'];  
             $trang_thai=$tv_2['noi_dung'];
             $link_xem="?thamso=donhang_chi_tiet&id=".$id;
             if(isset($id)){
                 
             
             
        ?>
                                        <tbody>
                                            
                                            
                                            <tr class="first odd">
                                                <td><a href="<?php echo $link_xem; ?>"><?php echo $id; ?></a></td>
                                                <td><?php echo $ngay; ?></td>
                                                <td>
                                                   <?php echo $url; ?>
                                                </td>
                                                <td>
                                                    <span class="price"><?php echo $tt; ?></span>
                                                </td>
                                                <td>
                                                    
                                                    
                                                    <span class="span_pending">Thanh tán khi nhận hàng</span>
                                                    
                                                    
                                                </td>
                                                <td>
                                                    
                                                    
                                                    <span class="span_"><?php echo $trang_thai; ?></span>
                                                    
                                                    
                                                </td>
                                            </tr>
                                            
                                            
                                        </tbody> 
                                        <?php
                                         }else{
                                         
             
        ?>
                                        <tbody>
                                            
                                            <tr>
                                                <td colspan="6">
                                                    <p>Không có đơn hàng nào.</p>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                        <?php } }?>

                                    </table>
                                   

                                       


                                   

                                </div>

                                <div class="paginate-pages pull-right page-account text-right col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php
} 
?>
</body>
</html>