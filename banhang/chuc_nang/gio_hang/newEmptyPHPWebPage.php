<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/DEMO_WEB_ORDER/banhang/giao_dien/main4.css">
        <title></title>
    </head>
    <body>
   

<div id="popup-cart" class="popcart" >
	<div id="popup-cart-desktop" class="clearfix">
		<div class="title-popup-cart">
			<span class="your_product"><?php if(isset($_GET['id'])){
                                        $id = $_GET['id'];
                                        $tv = "select * from san_pham where id='$id'";
                                        $tv_1 = mysqli_query($connect, $tv);
                                        $tv_2 = mysqli_fetch_array($tv_1);
                                        $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];?>
                                    
                            <img src="//bizweb.dktcdn.net/100/341/555/themes/786825/assets/checked.png?1603447030866" alt="Mew Food">Bạn đã vừa thêm 
                            <span class="cart-popup-name">
                                <a href="<?php echo $link_chi_tiet; ?>" title="<?php echo $tv_2['ten'];?>">                          
                                    
                                    <?php                               
                                    echo $tv_2['ten'];?></a> 
                            </span> vào giỏ hàng </span>
                    <?php }
                    else{
                        echo"<img src='//bizweb.dktcdn.net/100/341/555/themes/786825/assets/checked.png?1603447030866' alt='Mew Food'>Không có sản phẩm nào vừa được thêm vào ";
                    }
?>
		</div>
		
		<div class="wrap_popup">
			<div class="title-quantity-popup">
				<span class="cart_status" onclick="window.location.href='';"><?php
if($gio_hang=="khong")
	{
		echo " <span class='cart-popup-count'>Giỏ hàng của bạn có: $so_luong</span> sản phẩm </span>";
                
                ?>
                                    <div class="content-popup-cart">
				<div class="thead-popup">
					<div style="width: 40%; color: red; font-weight: bold;" class="text-left">Sản phẩm</div>
					<div style="width: 20%; color: red; font-weight: bold;" class="text-center">Đơn giá</div>
					<div style="width: 15%; color: red; font-weight: bold;" class="text-center">Số lượng</div>
					<div style="width: 15%; color: red; font-weight: bold;" class="text-center">Thành tiền</div>
                                        <div style="width: 10%; color: red; font-weight: bold;" class="text-center">Xóa</div>
				</div>
				<div class="tbody-popup scrollbar-dynamic"></div>
				<div class="tfoot-popup section">
					<div class="section footer-popup">
						<div class="inline-block f-left">
							<a class="f-left button buy_ btn-proceed-cl close-pop" title="tiếp tục mua hàng"><span>Tiếp tục mua hàng</span></a>
						</div>
						<div class="tfoot-popup-1 f-right inline-block ">
							<span class="total-p popup-total block">Thành tiền: <span class="total-price"><?php echo $tong_cong." VNĐ";?></span></span>
							
							<div class="tfoot-popup-2 clearfix section">
								<a href=""><input class="button checkout_ btn-proceed-checkout" type='submit' value='Đặt hàng' >
                                                                </a>
							</div> 
                                                        
                                                            
						</div>
					</div>
				</div>
			</div>
<?php
                                    }
        else{
            
?><span class="cart-popup-count">Giỏ hàng của bạn có: <?php echo $so_luong;?></span> sản phẩm </span>
			</div>
                    <div class="content-popup-cart">
				<div class="thead-popup">
					<div style="width: 40%; color: red; font-weight: bold;" class="text-left">Sản phẩm</div>
					<div style="width: 20%; color: red; font-weight: bold;" class="text-center">Đơn giá</div>
					<div style="width: 15%; color: red; font-weight: bold;" class="text-center">Số lượng</div>
					<div style="width: 15%; color: red; font-weight: bold;" class="text-center">Thành tiền</div>
                                        <div style="width: 10%; color: red; font-weight: bold;" class="text-center">Xóa</div>
				</div>
                    <?php
                        echo "<form action='' method='post' >"; 
                        echo "<input type='hidden' name='cap_nhat_gio_hang' value='co' > ";
                        
			
			
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
			
				$tv="select id,ten,gia from san_pham where id='".$_SESSION['id_them_vao_gio'][$i]."'";
				$tv_1=mysqli_query($connect,$tv);
				$tv_2=mysqli_fetch_array($tv_1);
				
				$tien=$tv_2['gia']*$_SESSION['sl_them_vao_gio'][$i];
				$tong_cong=$tong_cong+$tien;
				$name_id="id_".$i;
				$name_sl="sl_".$i;
				$name_ch ="ch_".$i;
				if($_SESSION['sl_them_vao_gio'][$i]!=0)
				{
                                    echo"<div class='thead-popup'>";
					echo"<div style='width: 40%;' class='text-left'>".$tv_2['ten']."</div>";
					echo"<div style='width: 20%;' class='text-center'>".$tv_2['gia']."</div>";
					echo"<div style='width: 15%;' class='text-center'>";
                                        echo "<input type='hidden' name='".$name_id."' value='".$_SESSION['id_them_vao_gio'][$i]."' >";
                                        echo "<input type='text' style='width:50px' name='".$name_sl."' value='". $_SESSION['sl_them_vao_gio'][$i]."' > ";
                                        echo "</div>";
                                        
					echo"<div style='width: 15%;' class='text-center'>".$tien."</div>";
                                        echo"<div style='width: 10%;' class='text-center'>";
                                        echo "<input type='checkbox' name='".$name_ch."' value='".$i."' >";
                                        echo"</div>";
				echo"</div>";
				
				if(isset($hang_duoc_mua1))
				{
				$hang_duoc_mua1=$hang_duoc_mua1.$_SESSION['id_them_vao_gio'][$i]."[|||]".$_SESSION['sl_them_vao_gio'][$i]."[|||||]";
				}
				}
			}	
                       
		
		
                    ?>
			
				<div class="tbody-popup scrollbar-dynamic"></div>
				<div class="tfoot-popup section">
					<div class="section footer-popup">
						<div class="inline-block f-left">
                                                    <a href="<?php echo $lien_ket_trang_truoc;?>"class="f-left button buy_ btn-proceed-cl close-pop" title="tiếp tục mua hàng"><span>Tiếp tục mua hàng</span></a>
						</div>
						<div class="tfoot-popup-1 f-right inline-block ">
							<span class="total-p popup-total block">Thành tiền: <span class="total-price"><?php echo $tong_cong." VNĐ";?></span></span>
							
							<div class="tfoot-popup-2 clearfix section">
								<a href=""><input class="button checkout_ btn-proceed-checkout" type='submit' value='Đặt hàng' >
                                                                </a>
							</div> 
                                                        
                                                            
						</div>
					</div>
				</div>
                               <?php
		echo "</form>";?>
			</div>
		</div>
             <?php } ?>
        </div>
                <?php
                echo "<form method='post' action='https://www.nganluong.vn/advance_payment.php'>";
		echo "<input type=hidden name=receiver value='lequan007@gmail.com' />";
		if(isset($hang_duoc_mua1))
		{
		echo "<input type=hidden name=product value='$hang_duoc_mua1' />";
		}
		echo "<input type=hidden name=price value='$tong_cong' />";
		echo "<input type=hidden name=return_url value='http://complete.com/thank.php' />";
		echo "<input type=hidden name=comments value='ghi chu' />";

		echo "<input type=image src='https://www.nganluong.vn/data/images/buttons/11.gif' />";
		echo "</form>";
                if(isset($_SESSION['user_id']))
		{
		echo "<form action='' method='post' >"; 
		echo "<input type='hidden' name='thong_tin_khach_hang' value='co' > ";
			echo "<br>";
			echo "<input type='submit' value='Gửi đơn hàng' >";
		echo "</form>";
			}
		else
		{
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "<a href='?thamso=dang_ky'>Đăng ký để mua hàng và nhận ưu đãi</a>"; 
			echo "<br>";
			echo "Quý khách có thể Nhập nhanh thông tin mua hàng để chúng tôi liên hệ";
			include("chuc_nang/gio_hang/bieu_mau_mua_hang.php");
		}
                ?>
	</div>
    </body>
</html>
