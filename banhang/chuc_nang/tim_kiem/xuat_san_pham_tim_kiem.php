<?php 
	if(trim($_GET['tu_khoa'])!=""){ 
		$m=explode(" ",$_GET['tu_khoa']);    
		$chuoi_tim_sql="";
		for($i=0;$i<count($m);$i++)
		{
			$tu=trim($m[$i]);
			if($tu!="")
			{
				$chuoi_tim_sql=$chuoi_tim_sql." ten like '%".$tu."%' or";
			}
		}

		$m_2=explode(" ",$chuoi_tim_sql);    
		$chuoi_tim_sql_2="";
		for($i=0;$i<count($m_2)-1;$i++)
		{
			$chuoi_tim_sql_2=$chuoi_tim_sql_2.$m_2[$i]." ";
		} 

		$so_du_lieu=15;
		$tv="select count(*) from san_pham  where $chuoi_tim_sql_2";
		$tv_1=mysqli_query($connect,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		$so_trang=ceil($tv_2[0]/$so_du_lieu);
		
		if(!isset($_GET['trang'])){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;}
		
		$tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham where $chuoi_tim_sql_2 order by id desc limit $vtbd,$so_du_lieu";

		$tv_1=mysqli_query($connect,$tv);
		echo"<div class='container'>";
                                    echo"<div class='b_tab'>";

                                        echo"<div class='tab-1 tab-content slider-items ajaxcol current'>";

                                            echo"<div class='box_ajax'>";
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
                                                                    ?>
                                                                       
    
                                                           <form>             
                                                                <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='<?php echo $link_chi_tiet ;?>'"> Chi tiết </button>
                                                                       
                                                                                                                                
                                                        <?php 
                                                           
                                                                $_SESSION['them_gio_hang3'] = "co";
                                                                
$_SESSION['them_gio_hang1']="ko";
$_SESSION['them_gio_hang2']="ko";
$_SESSION['them_gio_hang']="ko";


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
                                    
        }
	else
	{
	echo "Bạn chưa nhập từ khóa";
	}

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
                                     if($so_trang>1){
                                     echo"<div class='view-more-product'>";
                                     echo "<table>";
	echo "<tr>";
			echo "<td colspan='3' align='center' >";
				echo "<div class='phan_trang' >";
					for($i=1;$i<=$so_trang;$i++)
					{
						$link="?thamso=tim_kiem&tu_khoa=".$_GET['tu_khoa']."&trang=".$i;
						echo "<a href='$link' >";
							echo $i;echo " ";
						echo "</a>";
					}
				echo "</div>";
			echo "</td>";
		echo "</tr>";
	echo "</table>";
        echo"</div>";}
                                echo"</div>";
                              
       
		
	 echo"</div>";
         
	
        
?>