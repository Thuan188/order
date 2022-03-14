
<?php 
//	
//	$tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham where trang_chu='co' order by sap_xep_trang_chu desc limit 0,15";
//	$tv_1=mysqli_query($connect,$tv);
//	echo "<table>";
//	while($tv_2=mysqli_fetch_array($tv_1))
//	{
//		echo "<tr>";
//			for($i=1;$i<=3;$i++)
//			{
//				echo "<td align='center' width='215px' valign='top' >";
//					if($tv_2!=false)
//					{
//						$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
//						$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
//						$gia=$tv_2['gia'];
//						$gia=number_format($gia,0,",",".");
//						echo "<a href='$link_chi_tiet' >";
//							echo "<img src='$link_anh' width='150px' >";
//						echo "</a>";
//						echo "<br>";
//						echo "<br>";
//						echo "<a href='$link_chi_tiet' >";
//							echo $tv_2['ten'];
//						echo "</a>";
//						echo "<div style='margin-top:5px' >";						
//						echo $gia;
//						echo "</div>";
//						echo "<br>";
//					}
//					else 
//					{
//						echo "&nbsp;";
//					}
//				echo "</td>";
//				if($i!=3)
//				{
//					$tv_2=mysqli_fetch_array($tv_1);
//				}
//			}
//		echo "</tr>";
//	}
//	echo "</table>";
?>
<?php

echo"<div class='container1' >";?>
           
<?php

                                    echo"<div class='b_tab'>";

                                        echo"<div class='tab-1 tab-content slider-items ajaxcol current'>";

                                            echo"<div class='box_ajax'>";
                                          $tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham where trang_chu='co' order by sx_trangchu desc limit 0,15";
	$tv_1=mysqli_query($connect,$tv);
	//echo "<table>";
	while($tv_2=mysqli_fetch_array($tv_1))
	{
            
			for($i=4;$i<=100;$i++)
			{
//				echo "<td align='center' width='215px' valign='top' >";
					if($tv_2!=false)
					{
						
                                                echo"<div class='col-md-3 col-sm-4 col-xs-6 item_cl i-$i ' >";

                                                    echo"<div class='col-item'>";
                                                        echo"<div class='item-inner'>";



                                                            echo"<div class='product-wrapper'>";
                                                                echo"<div class='thumb-wrapper' onclick='window.location.href = '/cari''>";
                                                                    $link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
                                                                    $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
                                                                    
                                                                    $gio_hang_tc=$tv_2['id'];
                                                                    $gia=$tv_2['gia'];
                                                                    $gia=number_format($gia,0,",",".");
                                                                    
                                                                    echo"<a href='$link_chi_tiet' title='" .$tv_2['ten'] . "'>";
                                                                        echo"<img class='lazyload loaded' src='$link_anh' data-src='https://bizweb.dktcdn.net/100/341/555/products/5.jpg?v=1600662243000' alt='" .$tv_2['ten'] . "' data-was-processed='true'>";
                                                                    echo"</a>";
                                                                echo"</div>";
                                                            echo"</div>";
                                                            echo"<div class='item-info'>";
                                                                echo"<div class='info-inner'>";
                                                                    
                                                                    echo"<h3 class='item-title'> <a href='$link_chi_tiet' title='" .$tv_2['ten'] . "'>"; 
                                                                    echo $tv_2['ten'];
                                                                    echo"</a> </h3>";
                                                                    echo"<div class='item-content'>";
                                                                        echo"<div class='item-price'>";
                                                                            
                                                                            echo"<div class='price-box'>"; 

                                                                                echo"<span class='regular-price'> <span class='price'>";
                                                                                echo $gia;
                                                                                echo"</span> </span>";

                                                                            echo"</div>";

                                                                        echo"</div>";
                                                                        
                                                                    echo"</div>";
                                                                echo"</div>";

                                                                echo"<div class='actions hidden-xs hidden-sm remove_html'>";
//                                                                    echo"<form action='' method='post' class='variants form-nut-grid form-ajaxtocart has-validation-callback' data-id='product-actions-19200463' enctype='multipart/form-data'>";?>
                                                                       
    
                                                           <form>             
                                                                <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='<?php echo $link_chi_tiet ;?>'"> Chi tiết </button>
                                                                       
                                                                                                                                
                                                        <?php 
                                                           
                                                                $_SESSION['them_gio_hang'] = "co";
                                                                $_SESSION['trang_chi_tiet_gio_hang'] = "ko";
                                                                $_SESSION['them_gio_hang1']="ko";
                                                                $_SESSION['them_gio_hang2']="ko";
                                                                $_SESSION['them_gio_hang3']="ko";
                                                                     $id = $gio_hang_tc ;
                                                                     $tv1 = "select * from san_pham where id='$id'";
                                                             $tv_11 = mysqli_query($connect, $tv1);
                                                             $tv_21 = mysqli_fetch_array($tv_11);
                                                             $link_anh = "hinh_anh/san_pham/" . $tv_21['hinh_anh'];
	
//                                                            echo "<input type='hidden' name='them_vao_gio' value='co' > ";
//                                                            
//                                                            echo "<input type='hidden' name='id' value='" . $gio_hang_tc . "' > ";
                                                            echo "<input type='hidden' name='thamso' value='gio_hang' > ";
                                                            echo "<input type='hidden' name='id' value='" . $gio_hang_tc . "' > ";
                                                            echo "<input style='position: fixed; z-index: -1; display: none;' type='text' name='so_luong' value='1' style='width:50px' > ";
//                                                            echo "<input type='submit' value='Thêm vào giỏ' style='margin-left:15px' > ";
                                                               
                                                        
                                                                    echo"<button   class='button btn-cart add_to_cart' title='Mua hàng'>Thêm món</button>"; 
                                                                    echo "</form>";
                                                                echo"</div>";
                                                            echo"</div>";
                                                        echo"</div>";
                                                    echo"</div>";
                                                echo"</div>";

                                                


                                        
					}
					else 
					{
						echo "&nbsp;";
					}
//				echo "</td>";
				if($i!=3)
				{
					$tv_2=mysqli_fetch_array($tv_1);
				}
			}
//		echo "</tr>";
	}
//	echo "</table>";
                                       

                                        echo"<div class='tab-2 tab-content slider-items ajaxcol'></div>";

                                        

                                        echo"<div class='tab-3 tab-content slider-items ajaxcol'></div>";

                                        

                                        echo"<div class='tab-4 tab-content slider-items ajaxcol'></div>";

                                        

                                        echo"<div class='tab-5 tab-content slider-items ajaxcol'></div>";

                                        

                                        echo"<div class='tab-6 tab-content slider-items ajaxcol'></div>";

                                        

                                        echo"<div class='tab-7 tab-content slider-items ajaxcol'></div>";

                                        

                                        echo"<div class='tab-8 tab-content slider-items ajaxcol'></div>";

                                        

                                        echo"<div class='tab-9 tab-content slider-items ajaxcol'></div>";

                                        

                                        echo"<div class='tab-10 tab-content slider-items ajaxcol'></div>";

                                        
echo"</div>";
  
                                    echo"</div>";
                                    ?>
<p class="view-more-product">
								<a href="?thamso=xuat_san_pham_2" title="Xem tất cả">Xem tất cả</a>
							</p>
      <?php 
                                    echo"</div>";
                                   
?>

 

	
 
  
<?php echo"</div>";

?>
<script>
//               document.getElementById('oclgh').onclick = function(){
////                   var x =document.getElementById('popup-cart');
//                   if(document.getElementById('popup-cart').class.endsWith("popcart")){
//                       document.getElementById('popup-cart').class="popcart opencart";
//                        
//                   }else{
//                       document.getElementById('popup-cart').class="popcart";
//                       
//                   }
//               }   
//               document.getElementById('oclgh').onclick = function(){
//                   alert(id);
//               }
                    document.getElementById('close').onclick = function(){
//                   document.getElementById("popup-cart").classList.add('MyClass');
                   if ( document.getElementById("popup-cart").classList.contains('popcart') ){
//                       document.getElementById("img1").classList.add('MyClass');
                       document.getElementById("popup-cart").classList.toggle('opencart');
                   }
                   
 
                            
               }
                   document.getElementById('oclgh1').onclick = function(){
//                   document.getElementById("popup-cart").classList.add('MyClass');
//                   if ( document.getElementById("popup-cart").classList.contains('popcart') ){
////                       document.getElementById("img1").classList.add('MyClass');
//                       document.getElementById("popup-cart").classList.toggle('opencart');
//                   }
                   window.history.back();
                   
 
                            
               }
               document.getElementById('oclgh2').onclick = function(){
//                   document.getElementById("popup-cart").classList.add('MyClass');
                   if ( document.getElementById("popup-cart").classList.contains('popcart') ){
//                       document.getElementById("img1").classList.add('MyClass');
                       document.getElementById("popup-cart").classList.toggle('opencart');
                   }
                   
 
                            
               }
               document.getElementById('oclgh3').onclick = function(){
//                   document.getElementById("popup-cart").classList.add('MyClass');
                   if ( document.getElementById("popup-cart").classList.contains('popcart') ){
//                       document.getElementById("img1").classList.add('MyClass');
                       document.getElementById("popup-cart").classList.toggle('opencart');
                   }
                   
 
                            
               }
               document.getElementById('oclgh4').onclick = function(){
//                   document.getElementById("popup-cart").classList.add('MyClass');
                   if ( document.getElementById("popup-cart").classList.contains('popcart') ){
//                       document.getElementById("img1").classList.add('MyClass');
                       document.getElementById("popup-cart").classList.toggle('opencart');
                   }
                   
 
                            
               }
               document.getElementById('oclgh5').onclick = function(){
//                   document.getElementById("popup-cart").classList.add('MyClass');
                   if ( document.getElementById("popup-cart").classList.contains('popcart') ){
//                       document.getElementById("img1").classList.add('MyClass');
                       document.getElementById("popup-cart").classList.toggle('opencart');
                   }
                   
 
                            
               }
//               Để thay thế tất cả các lớp hiện có bằng một hoặc nhiều lớp mới, hãy đặt thuộc tính className:
//document.getElementById("MyElement").className = "MyClass";
//Để thêm một lớp vào một thành phần, mà không xóa / ảnh hưởng đến các giá trị hiện có, hãy thêm một khoảng trắng và tên lớp mới, như vậy:
//document.getElementById("MyElement").className += " MyClass
//Để loại bỏ một lớp duy nhất thành một phần tử, mà không ảnh hưởng đến các lớp tiềm năng khác, yêu cầu thay thế regex đơn giản:
//document.getElementById("MyElement").className =
//   document.getElementById("MyElement").className.replace
//      ( /(?:^|\s)MyClass(?!\S)/g , '' )
     </script>

            