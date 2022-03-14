

<?php 
$lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];

	if(isset($_GET['id']) and $_SESSION['trang_chi_tiet_gio_hang']=="co")
	{
		$_SESSION['trang_chi_tiet_gio_hang']="huy_bo";
		if(isset($_SESSION['id_them_vao_gio']))
		{
			$so=count($_SESSION['id_them_vao_gio']);
			$trung_lap="khong";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				if($_SESSION['id_them_vao_gio'][$i]==$_GET['id'])
				{
					$trung_lap="co";
					$vi_tri_trung_lap=$i;
					break;
				}
			}
			if($trung_lap=="khong")
			{
				$_SESSION['id_them_vao_gio'][$so]=$_GET['id'];
				$_SESSION['sl_them_vao_gio'][$so]=$_GET['so_luong'];
			}
			if($trung_lap=="co")
			{
				$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['so_luong'];
			}
		}
		else
		{
			$_SESSION['id_them_vao_gio'][0]=$_GET['id'];
			$_SESSION['sl_them_vao_gio'][0]=$_GET['so_luong'];
		}
	}
       
        if(isset($_GET['id']) and $_SESSION['them_gio_hang']=="co" )
	{   
            
		$_SESSION['them_gio_hang']="huy_bo";
		if(isset($_SESSION['id_them_vao_gio']))
		{
			$so=count($_SESSION['id_them_vao_gio']);
			$trung_lap="khong";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				if($_SESSION['id_them_vao_gio'][$i]==$_GET['id'])
				{
					$trung_lap="co";
					$vi_tri_trung_lap=$i;
					break;
				}
			}
			if($trung_lap=="khong")
			{
				$_SESSION['id_them_vao_gio'][$so]=$_GET['id'];
				$_SESSION['sl_them_vao_gio'][$so]=$_GET['so_luong'];
			}
			if($trung_lap=="co")
			{
				$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['so_luong'];
			}
		}
		else
		{
			$_SESSION['id_them_vao_gio'][0]=$_GET['id'];
			$_SESSION['sl_them_vao_gio'][0]=$_GET['so_luong'];
		}
               
                   
               
                    
        }if($_SESSION['them_gio_hang']=="huy_bo"){
             trang_truoc();
                
	}
        if(isset($_GET['id']) and $_SESSION['them_gio_hang1']=="co" )
	{   
            
		$_SESSION['them_gio_hang1']="huy_bo";
		if(isset($_SESSION['id_them_vao_gio']))
		{
			$so=count($_SESSION['id_them_vao_gio']);
			$trung_lap="khong";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				if($_SESSION['id_them_vao_gio'][$i]==$_GET['id'])
				{
					$trung_lap="co";
					$vi_tri_trung_lap=$i;
					break;
				}
			}
			if($trung_lap=="khong")
			{
				$_SESSION['id_them_vao_gio'][$so]=$_GET['id'];
				$_SESSION['sl_them_vao_gio'][$so]=$_GET['so_luong'];
			}
			if($trung_lap=="co")
			{
				$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['so_luong'];
			}
		}
		else
		{
			$_SESSION['id_them_vao_gio'][0]=$_GET['id'];
			$_SESSION['sl_them_vao_gio'][0]=$_GET['so_luong'];
		}
               
                    trang_truoc();
               
                   
                
	} 
         if(isset($_GET['id']) and $_SESSION['them_gio_hang2']=="co" )
	{   
            
		$_SESSION['them_gio_hang2']="huy_bo";
		if(isset($_SESSION['id_them_vao_gio']))
		{
			$so=count($_SESSION['id_them_vao_gio']);
			$trung_lap="khong";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				if($_SESSION['id_them_vao_gio'][$i]==$_GET['id'])
				{
					$trung_lap="co";
					$vi_tri_trung_lap=$i;
					break;
				}
			}
			if($trung_lap=="khong")
			{
				$_SESSION['id_them_vao_gio'][$so]=$_GET['id'];
				$_SESSION['sl_them_vao_gio'][$so]=$_GET['so_luong'];
			}
			if($trung_lap=="co")
			{
				$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['so_luong'];
			}
		}
		else
		{
			$_SESSION['id_them_vao_gio'][0]=$_GET['id'];
			$_SESSION['sl_them_vao_gio'][0]=$_GET['so_luong'];
		}
               
                    trang_truoc();
               
                   
                
	} 
         if(isset($_GET['id']) and $_SESSION['them_gio_hang3']=="co" )
	{   
            
		$_SESSION['them_gio_hang3']="huy_bo";
		if(isset($_SESSION['id_them_vao_gio']))
		{
			$so=count($_SESSION['id_them_vao_gio']);
			$trung_lap="khong";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				if($_SESSION['id_them_vao_gio'][$i]==$_GET['id'])
				{
					$trung_lap="co";
					$vi_tri_trung_lap=$i;
					break;
				}
			}
			if($trung_lap=="khong")
			{
				$_SESSION['id_them_vao_gio'][$so]=$_GET['id'];
				$_SESSION['sl_them_vao_gio'][$so]=$_GET['so_luong'];
			}
			if($trung_lap=="co")
			{
				$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['so_luong'];
			}
		}
		else
		{
			$_SESSION['id_them_vao_gio'][0]=$_GET['id'];
			$_SESSION['sl_them_vao_gio'][0]=$_GET['so_luong'];
		}
               
                    trang_truoc();
               
                   
                
	} 
	$gio_hang="khong";
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$so_luong=0;
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
		}
		if($so_luong!=0)
		{
			$gio_hang="co";
		}
	}
        

	$tong_cong=0;
        $sl=0
?>

<?php
if($gio_hang=="khong")
	{
		
                
                ?>

<section class="main-cart-page main-container col1-layout">
		<div class="main container hidden-xs hidden-sm">

			<div class="col-main cart_desktop_page cart-page" style="min-height: auto;"><p class="hidden-xs-down warr">Không có sản phẩm nào. Quay lại <a href="?thamso=xuat_san_pham_2" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p></div>

		</div>
		<div class="cart-mobile hidden-md hidden-lg container">
			<form action="/cart" method="post" novalidate="" class="margin-bottom-0">
				<div class="title_cart_mobile">

				</div>

				<div class="header-cart-content" style="background:#fff;"><div class="col-xs-12"><p class="warr">Không có sản phẩm nào. Quay lại <a href="?thamso=xuat_san_pham_2" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p></div></div>

			</form>

		</div>

	</section>

<?php
                                    }
        else{
            
?>
  <script> 
      
			function minus(){
                           
				var soluong = document.getElementById("qty");
				var gia = document.getElementById("gia").value;
				var thanhtien = document.getElementById("thanhtien");

				if(soluong.value > 1)
					soluong.value--;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                            }		
			function plus(){
                             
				var soluong = document.getElementById("qty");
				var gia = document.getElementById("gia").value;
				var thanhtien = document.getElementById("thanhtien");
				soluong.value++;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                           
			}
                        function minus1(){
                           
				var soluong = document.getElementById("qty1");
				var gia = document.getElementById("gia1").value;
				var thanhtien = document.getElementById("thanhtien1");

				if(soluong.value > 1)
					soluong.value--;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                            }			
			function plus1(){
                             
				var soluong = document.getElementById("qty1");
				var gia = document.getElementById("gia1").value;
				var thanhtien = document.getElementById("thanhtien1");
				soluong.value++;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                           
			}
                        function minus2(){
                           
				var soluong = document.getElementById("qty2");
				var gia = document.getElementById("gia2").value;
				var thanhtien = document.getElementById("thanhtien2");

				if(soluong.value > 1)
					soluong.value--;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                            }			
			function plus2(){
                             
				var soluong = document.getElementById("qty2");
				var gia = document.getElementById("gia2").value;
				var thanhtien = document.getElementById("thanhtien2");
				soluong.value++;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                           
			}
                        function minus3(){
                           
				var soluong = document.getElementById("qty3");
				var gia = document.getElementById("gia3").value;
				var thanhtien = document.getElementById("thanhtien3");

				if(soluong.value > 1)
					soluong.value--;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                            }		
			function plus3(){
                             
				var soluong = document.getElementById("qty3");
				var gia = document.getElementById("gia3").value;
				var thanhtien = document.getElementById("thanhtien3");
				soluong.value++;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                           
			}
                        function minus4(){
                           
				var soluong = document.getElementById("qty4");
				var gia = document.getElementById("gia4").value;
				var thanhtien = document.getElementById("thanhtien4");

				if(soluong.value > 1)
					soluong.value--;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                            }		
			function plus4(){
                             
				var soluong = document.getElementById("qty4");
				var gia = document.getElementById("gia4").value;
				var thanhtien = document.getElementById("thanhtien4");
				soluong.value++;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                           
			}
                        function minus5(){
                           
				var soluong = document.getElementById("qty5");
				var gia = document.getElementById("gia5").value;
				var thanhtien = document.getElementById("thanhtien5");

				if(soluong.value > 1)
					soluong.value--;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                            }		
			function plus5(){
                             
				var soluong = document.getElementById("qty5");
				var gia = document.getElementById("gia5").value;
				var thanhtien = document.getElementById("thanhtien5");
				soluong.value++;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                           
			}
                        function minus6(){
                           
				var soluong = document.getElementById("qty6");
				var gia = document.getElementById("gia6").value;
				var thanhtien = document.getElementById("thanhtien6");

				if(soluong.value > 1)
					soluong.value--;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                            }		
			function plus6(){
                             
				var soluong = document.getElementById("qty6");
				var gia = document.getElementById("gia6").value;
				var thanhtien = document.getElementById("thanhtien6");
				soluong.value++;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                           
			}
                        function minus7(){
                           
				var soluong = document.getElementById("qty7");
				var gia = document.getElementById("gia7").value;
				var thanhtien = document.getElementById("thanhtien7");

				if(soluong.value > 1)
					soluong.value--;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                            }		
			function plus7(){
                             
				var soluong = document.getElementById("qty7");
				var gia = document.getElementById("gia7").value;
				var thanhtien = document.getElementById("thanhtien7");
				soluong.value++;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                           
			}
                        function minus8(){
                           
				var soluong = document.getElementById("qty8");
				var gia = document.getElementById("gia8").value;
				var thanhtien = document.getElementById("thanhtien8");

				if(soluong.value > 1)
					soluong.value--;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                            }		
			function plus8(){
                             
				var soluong = document.getElementById("qty8");
				var gia = document.getElementById("gia8").value;
				var thanhtien = document.getElementById("thanhtien8");
				soluong.value++;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                           
			}
                        function minus9(){
                           
				var soluong = document.getElementById("qty9");
				var gia = document.getElementById("gia9").value;
				var thanhtien = document.getElementById("thanhtien9");

				if(soluong.value > 1)
					soluong.value--;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                            }		
			function plus9(){
                             
				var soluong = document.getElementById("qty9");
				var gia = document.getElementById("gia9").value;
				var thanhtien = document.getElementById("thanhtien9");
				soluong.value++;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                           
			}
                        function minus10(){
                           
				var soluong = document.getElementById("qty10");
				var gia = document.getElementById("gia10").value;
				var thanhtien = document.getElementById("thanhtien10");

				if(soluong.value > 1)
					soluong.value--;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                            }		
			function plus10(){
                             
				var soluong = document.getElementById("qty10");
				var gia = document.getElementById("gia10").value;
				var thanhtien = document.getElementById("thanhtien10");
				soluong.value++;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
                           
			}
		</script>
<section class="main-cart-page main-container col1-layout">
            <div class="main container hidden-xs hidden-sm">
    
                <div class="col-main cart_desktop_page cart-page">
    <div class="cart page_cart hidden-xs hidden-sm row">
         <div class="bg-scroll">
                <div class="cart-thead">
                    <div style="width: 22%" class="a-left">Ảnh sản phẩm</div>
                    <div style="width: 28%" class="a-left">Tên sản phẩm</div>
                    <div style="width: 15%" class="a-left">Giá bán lẻ</div>
                    <div style="width: 15%" class="a-center">Số lượng</div>
                    <div style="width: 15%" class="a-center">Tạm tính</div>
                    <div style="width: 5%" class="a-center">Xóa</div>
                </div>
         <?php
                        echo "<form action='' method='post' class='formcartpage col-lg-12 col-md-12 margin-bottom-0'novalidate='' >"; 
                        echo "<input type='hidden' name='cap_nhat_gio_hang' value='co' > ";
                        
			
			
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
			
				$tv = "select id,ten,gia,hinh_anh from san_pham where id='" . $_SESSION['id_them_vao_gio'][$i] . "'";
				$tv_1=mysqli_query($connect,$tv);
				$tv_2=mysqli_fetch_array($tv_1);
				$link_anh = "hinh_anh/san_pham/" . $tv_2['hinh_anh'];
                                $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
				$tien=$tv_2['gia']*$_SESSION['sl_them_vao_gio'][$i];
                                
				$tong_cong=$tong_cong+$tien;
				$name_id="id_".$i;
				$name_sl="sl_".$i;
				$name_ch ="ch_".$i;
                                $sl=$sl+$_SESSION['sl_them_vao_gio'][$i];
				if($_SESSION['sl_them_vao_gio'][$i]!=0)
				{?>
      
           
                <div class="cart-tbody">
                
    <div class="item-cart productid-36479846">
        <div style="width: 22%" class="image">
            <a class="product-image a-left" title="<?php echo $tv_2['ten']; ?>" href="<?php echo $link_chi_tiet; ?>">
                <img width="75" height="auto" alt="<?php echo $tv_2['ten']; ?>" src="<?php echo $link_anh; ?>">
            </a>
        </div>
        <div style="width: 28%" class="a-left contentcart">
            <h3 class="product-name"> <a class="text2line" href="<?php echo $link_chi_tiet; ?>" title="<?php echo $tv_2['ten']; ?>"><?php echo $tv_2['ten']; ?></a> </h3>
            <span class="variant-title"></span>
        </div>
        <div style="width: 15%" class="a-center">
            <span class="cart-prices">
                <span class="prices" id="gia<?php echo $i; ?>"> <?php
                                                $gia = $tv_2['gia'];
                                                    $gia = number_format($gia, 0, ",", ".");
                                                    echo $gia;
                                                 ?></span> VND
            </span>
        </div>
        <div style="width: 15%" class="a-center">
            <div class="input_qty_pr">
                <input class="variantID" type="hidden" name="<?php echo $name_id; ?>" value="<?php echo $_SESSION['id_them_vao_gio'][$i]; ?>">
                <input type="text" class="check_number_here input-text number-sidebar input_pop input_pop qtyItem36479846" id="qty<?php echo $i; ?>" name="<?php echo $name_sl; ?>" size="4" value="<?php echo $_SESSION['sl_them_vao_gio'][$i]; ?>" onkeypress="if (isNaN(this.value + String.fromCharCode(event.keyCode)))
                                                                                                                                            return false;" onchange="if (this.value == 0)
                                                                                                                                                        this.value = 1;">
                <button onclick="minus<?php echo $i; ?>();" class="reduced_pop items-count btn-minus" type="button">-</button>
                 <button onclick="plus<?php echo $i; ?>();" class="increase_pop items-count btn-plus" type="button">+</button>
<!--                <button onclick="var result = document.getElementById('qtyItem36479846'); var qtyItem36479846 = result.value; if( !isNaN( qtyItem36479846 )) result.value++;return false;" class="increase_pop items-count btn-plus" type="button">+</button>
                <button onclick="var result = document.getElementById('qtyItem36479846'); var qtyItem36479846 = result.value; if( !isNaN( qtyItem36479846 ) &amp;&amp; qtyItem36479846 > 1 ) result.value--;return false;" disabled="" class="reduced_pop items-count btn-minus" type="button">-</button>
-->            </div>
        </div>
        <div style="width: 15%" class="a-center">
            <span class="cart-price">
                <span class="price"><input type="text" value="<?php $tien = number_format($tien, 0, ",", ".");  echo $tien; ?> VNĐ" id="thanhtien<?php echo $i; ?>" readonly="" name="thanhtien"></span> 
            </span>
        </div>
        <div style="width: 5%" class="a-center"> 
            <a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" data-id="36479846">
                <input type="checkbox" name="<?php echo $name_ch;?>" value="<?php echo $i;?>" >
                <span>
                    <input type="submit" value="" style="position: relative; top:0px; background-image: url('http://bizweb.dktcdn.net/100/341/555/themes/786825/assets/error.png?1608568857115'); background-color: #fff; height: 12px; width: 12px; background-position: center;background-repeat: no-repeat;background-size: cover; " >
                    
                </span>
                
                    
               
            </a>
        </div>
    </div>
    </div>
           
    <?php    if(isset($hang_duoc_mua1))
				{
				$hang_duoc_mua1=$hang_duoc_mua1.$_SESSION['id_them_vao_gio'][$i]."[|||]".$_SESSION['sl_them_vao_gio'][$i]."[|||||]";
				}
                                
				}
			}	
                       
		
		
                    ?>
        </form>
     </div>
    <div class="col-lg-12 col-md-12">
        <div class="f-left section continued">
            <a href="?thamso=xuat_san_pham_2" class="form-cart-continue">Tiếp tục mua hàng</a>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-lg-offset-8 col-md-offset-8">
                <div class="section bg_cart shopping-cart-table-total">
                    <div class="table-total">
                        <div class="total-text">Tổng tiền:</div>
                        <div class="txt-right totals_price price_end a-right"><?php echo $tong_cong . " VNĐ"; ?></div>
                       
                    </div>
                    
                         <?php
//                echo "<form method='post' action='https://www.nganluong.vn/advance_payment.php'>";
//		echo "<input type=hidden name=receiver value='lequan007@gmail.com' />";
//		if(isset($hang_duoc_mua1))
//		{
//		echo "<input type=hidden name=product value='$hang_duoc_mua1' />";
//		}
//		echo "<input type=hidden name=price value='$tong_cong' />";
//		echo "<input type=hidden name=return_url value='http://complete.com/thank.php' />";
//		echo "<input type=hidden name=comments value='ghi chu' />";
//
//		echo "<input type=image src='https://www.nganluong.vn/data/images/buttons/11.gif' />";
//		echo "</form>";
                if(isset($_SESSION['user_id']))
		{
                   
                    
		echo "<form action='' method='post' >"; 
//		echo "<input type='hidden' name='thamso' value='check_out' > ";
//                echo "<input type='hidden' name='thong_tin_khach_hang' value='co' > ";
//                echo "<input type='hidden' name='user_id' value=' $gh_id' > ";
//                echo "<input type='hidden' name='gh_id' value='$gh_id' > ";
//                 echo "<input type='hidden' name='so_luong' value='$sl' > ";
//                echo "<input type='hidden' name='tong_tien' value='$tong_cong' > ";
			echo "<br>";
//			echo "<input class='btn-checkout-cart button_checkfor_buy' type='submit' value='Tiến hành thanh toán' >";
                      echo "<a class='btn-checkout-cart button_checkfor_buy' href='?thamso=check_out'>Tiến hành thanh toán</a>";    
		echo "</form>";
			}
		else
		{
			
			
                       echo "<form action='' method='post' >"; 

//                 echo "<input type='hidden' name='so_luong' value='$sl' > ";
//                echo "<input type='hidden' name='tong_tien' value='$tong_cong' > ";
			echo "<br>";
			echo "<a class='btn-checkout-cart button_checkfor_buy' href='?thamso=check_out'>Tiến hành thanh toán</a>";  
                      
		echo "</form>";
              
			echo "<a href='?thamso=dang_ky'>Đăng ký để mua hàng và nhận ưu đãi</a>";                        
			echo "<br>";
			echo "Quý khách có thể Nhập nhanh thông tin mua hàng để chúng tôi liên hệ";
//			include("chuc_nang/gio_hang/bieu_mau_mua_hang.php");
		}
                ?>
                </div>
            </div>
        </div>
    </div>
    </div>
               
    </div>
    
            </div>
            <div class="cart-mobile hidden-md hidden-lg container">
                 <?php
                        echo "<form action='' method='post' class='margin-bottom-0' novalidate='' >"; 
                        echo "<input type='hidden' name='cap_nhat_gio_hang' value='co' > ";
                        
			
			
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
			
				$tv = "select id,ten,gia,hinh_anh from san_pham where id='" . $_SESSION['id_them_vao_gio'][$i] . "'";
				$tv_1=mysqli_query($connect,$tv);
				$tv_2=mysqli_fetch_array($tv_1);
				 $link_anh = "hinh_anh/san_pham/".$tv_2['hinh_anh'];
        $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
				$tien=$tv_2['gia']*$_SESSION['sl_them_vao_gio'][$i];
				$tong_cong=$tong_cong+$tien;
				$name_id="id_".$i;
				$name_sl="sl_".$i;
				$name_ch ="ch_".$i;
				if($_SESSION['sl_them_vao_gio'][$i]!=0)
				{ ?>
               
                    <div class="title_cart_mobile">
    
                    </div>
    
                    <div class="header-cart-content" style="background:#fff;"><div class="cart_page_mobile content-product-list">
    <div class="item-product item productid-36479846 ">
        <div class="item-product-cart-mobile">
            <a href="<?php echo $link_chi_tiet; ?>">	
                </a><a class="product-images1" href="<?php echo $link_chi_tiet; ?>" title="<?php echo $tv_2['ten']; ?>">
                    <img width="80" height="150" src="<?php echo $link_anh; ?>" alt="<?php echo $tv_2['ten']; ?>">
                </a>
            
        </div>
        <div class="title-product-cart-mobile">
            <h3>
                <a href="<?php echo $link_chi_tiet; ?>" title="<?php echo $tv_2['ten']; ?>"><?php echo $tv_2['ten']; ?></a>
            </h3>
            <p>
                Giá: <span><?php echo $tien." VNĐ"; ?></span>
            </p>
        </div>
        <div class="select-item-qty-mobile">
            <div class="txt_center">
                <input class="variantID" type="hidden" name="<?php echo $name_id; ?>" value="<?php echo $_SESSION['id_them_vao_gio'][$i]; ?>">
                <button onclick="var result = document.getElementById('qtyMobile36479846'); var qtyMobile36479846 = result.value; if( !isNaN( qtyMobile36479846 ) && qtyMobile36479846 > 1 ) result.value--;return false;" class="reduced items-count btn-minus" type="button">-</button>
                <input type="text" maxlength="3" min="1" class="input-text number-sidebar qtyMobile36479846" id="qtyMobile36479846" name="<?php echo $name_sl; ?>" size="4" value="<?php echo $_SESSION['sl_them_vao_gio'][$i]; ?>">
                <button onclick="var result = document.getElementById('qtyMobile36479846'); var qtyMobile36479846 = result.value; if( !isNaN( qtyMobile36479846 )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button>
            </div>
            <br>
            <input type="hidden" name="<?php echo $name_ch;?>" value="<?php echo $i;?>" >
              
                    <input type="submit" value="Xóa" class="button remove-item remove-item-cart" >
                    
               
        </div>
    </div>
    </div>
   
    </div>
     <?php    if(isset($hang_duoc_mua1))
				{
				$hang_duoc_mua1=$hang_duoc_mua1.$_SESSION['id_them_vao_gio'][$i]."[|||]".$_SESSION['sl_them_vao_gio'][$i]."[|||||]";
				}
				}
			}	
                       
		
		
                    ?>
                </form>
     <div class="header-cart-price">
        <div class="title-cart">
            <h3 class="text-xs-left">Tổng tiền:</h3>
            <a class="text-xs-right  totals_price_mobile"><?php echo $tong_cong . " VNĐ"; ?></a>
        </div>
        <div class="checkout">
      <?php      if(isset($_SESSION['user_id']))
		{
		echo "<form action='check_out/check_out.php' method='post' >"; 
		echo "<input type='hidden' name='thong_tin_khach_hang' value='co' > ";
                 echo "<input type='hidden' name='so_luong' value='$sl' > ";
                echo "<input type='hidden' name='tong_tien' value='$tong_cong' > ";
			echo "<br>";
			echo "<input class='btn-checkout-cart button_checkfor_buy' type='submit' value='Tiến hành thanh toán' >";
                      
		echo "</form>";
			}
		else
		{
			
			
                       echo "<form action='check_out/check_out.php' method='post' >"; 

                 echo "<input type='hidden' name='so_luong' value='$sl' > ";
                echo "<input type='hidden' name='tong_tien' value='$tong_cong' > ";
			echo "<br>";
			echo "<input class='btn-checkout-cart button_checkfor_buy' type='submit' value='Tiến hành thanh toán' >";
                      
		echo "</form>";
              
			echo "<a href='?thamso=dang_ky'>Đăng ký để mua hàng và nhận ưu đãi</a>";                        
			echo "<br>";
			echo "Quý khách có thể Nhập nhanh thông tin mua hàng để chúng tôi liên hệ";
//			include("chuc_nang/gio_hang/bieu_mau_mua_hang.php");
		}
                ?>
            <button class="btn btn-white form-cart-continue" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='?thamso=xuat_san_pham_2'">
                <span>Tiếp tục mua hàng</span>
            </button>
        </div>
    </div>
                
            </div>
    
        </section>
<?php } ?>

        