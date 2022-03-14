
<?php
$lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
$_SESSION['trang_chi_tiet_gio_hang'] = "co";
$_SESSION['them_gio_hang']="ko";
$_SESSION['them_gio_hang1']="ko";
$_SESSION['them_gio_hang2']="ko";
$_SESSION['them_gio_hang3']="ko";
$id = $_GET['id'];
$tv = "select * from san_pham where id='$id'";
$tv_1 = mysqli_query($connect, $tv);
$tv_2 = mysqli_fetch_array($tv_1);
$link_anh = "hinh_anh/san_pham/" . $tv_2['hinh_anh'];

?>
<div class="bg_t">
    <div class="main container" >
        <div class="col-main details-product">
            <div class="w_975">
                <div class="row">
                    <div class="product-view form-product">
                        <div class="product-essential">
                            <div class="product-img-box col-sm-6 col-xs-12">

                                <div class="product-detail-left product-images">
                                    <div class="col_large_full large-image">



                                       

                                            <div id='img1' style="height:426px;width:478px;" class="zoomWrapper">
                                                <?php
                                               
                                                echo"<img  class='img-responsive' alt='" . $tv_2['ten'] . "' src='$link_anh' data-zoom-image='$link_anh' style='position: absolute;'></div>";
                                                ?>
                                                
                                        

                                        <div class="offset_nop hidden">




                                            <div class="item">
                                                <a class="check_data_img" href="<?php echo"$link_anh"; ?>" data-image="<?php echo"$link_anh"; ?>">										
                                                </a>
                                            </div>	

                                        </div>
                                    </div>
                                            <div id="htsp" class="imgvisible" >
                                                
                                                <img id="close"     class="pp_close" src="/DEMO_WEB_ORDER/banhang/hinh_anh/close.png" >
                                                 <?php
                                               
                                                echo"<img class='imsp'   alt='" . $tv_2['ten'] . "' src='$link_anh' >";
                                                ?>
                                                
                                            </div>

                                    <div class="thumb_gallary">

                                    </div>
                                </div>
                            </div>
                            <div class="product-shop col-sm-6 col-xs-12 details-pro">
                                <h1 class="tr">
                                    <?php
                                    echo $tv_2['ten'];?>
                                </h1>
                                <div class="price-block">
                                    <div class="price-box">



                                        <p class="special-price"><span class="price">Giá bán:
                                                <?php
                                                $gia = $tv_2['gia'];
                                                    $gia = number_format($gia, 0, ",", ".");
                                                    echo $gia;
                                                ?>
                                                </span> </p>



                                    </div>
                                </div>

                                <div class="box_green o2">

                                    <div class="product_sku" id="vendor"><span class="fnew">Hãng sản xuất:</span> Đang cập nhật...</div>


                                    <div class="product_sku" id="type"><span class="fnew">Loại:</span> Khai Vị</div>

                                </div>

                                <div class="add-to-box form-product ">
                                    <script>
			function minus(){
				var soluong = document.getElementById("qtym");
				var gia = document.getElementById("gia").value;
				var thanhtien = document.getElementById("thanhtien");

				if(soluong.value > 1)
					soluong.value--;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";
			}

			function plus(){
				var soluong = document.getElementById("qtym");
				var gia = document.getElementById("gia").value;
				var thanhtien = document.getElementById("thanhtien");
				soluong.value++;

				thanhtien.value = (soluong.value * gia).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ".000 VNĐ";

			}
		</script>
                                    <div class="add-to-cart">
                                        <form  id="add-to-cart-form" class="form-inline">


                                            <div class="box-variant clearfix ">

                                               

                                            </div>
                                            <div class="box_buy ">
                                                <label class="hqty hidden-xs fixprice box">Số lượng</label>
                                                <div class="hqty ct2 pull-left fixprice box">
                                                    <div class="custom pull-left">
                                                        <?php
//                                                        echo "<form>";
                                                            echo "<input type='hidden' name='thamso' value='gio_hang' > ";
                                                            echo "<input type='hidden' name='id' value='" . $_GET['id'] . "' > ";
//                                                            echo "<input type='text' name='so_luong' value='1' style='width:50px' > ";
//                                                            echo "<input type='submit' value='Thêm vào giỏ' style='margin-left:15px' > ";
//                                                            echo "</form>";
//                                                        ?>  
                                                        <!--                                                            onclick="var result = document.getElementById('qtym'); var qtyas = result.value; if( !isNaN( qtyas ) && qtyas > 1 ) result.value--;return false;" -->
                                                       
                                                        <button onclick="minus();"
                                                            class="reduced items-count-s" type="button">-</button>												
                                                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="3" id="qtym" name='so_luong' onkeypress="if (isNaN(this.value + String.fromCharCode(event.keyCode)))
                                                                                                                                            return false;" onchange="if (this.value == 0)
                                                                                                                                                        this.value = 1;">
     <!--                                                            onclick="var result = document.getElementById('qtym');
                                                                                                                                        var qtyas = result.value;
                                                                                                                                        if (!isNaN(qtyas))
                                                                                                                                            result.value++;
                                                                                                                                        return false;" -->
                                                        <button onclick="plus();"

                                                                                                                                        class="increase items-count-s" type="button">+</button> 
                                                                                                                                        

                                                                          
                                                                       
                                                                        
                                     <div class="price-block">
                                    <div class="price-box">



                                        <p class="special-price"><span class="price">TỔNG TIỀN:
                                               <input type="text" value="<?php
                                                $gia = $tv_2['gia'];
                                                    $gia = number_format($gia, 0, ",", ".");
                                                    echo $gia;
                                                ?> VNĐ" id="thanhtien" readonly="" name="thanhtien">
                                                </span> </p>

<input type="hidden" value=" <?php  echo($gia)?> " name="gia" id="gia">

                                    </div>
                                </div>
                                                                </div>
                                                                
                                                    </div>
                                                </div>

                                                <div class="tfoot-popup-2 clearfix section" style="margin: 10px; float: left;">

                                                    <button class="button checkout_ btn-proceed-checkou" title="Thêm vào giỏ"><span>Thêm vào giỏ</span></button>

                                                </div>
                                                
                                                <div class="inline-block f-left" style="margin: 10px; float: left;">
                                                    <a  href="<?php echo $lien_ket_trang_truoc;?>" class="f-left button buy_ btn-proceed-cl close-pop" title="tiếp tục mua hàng"><span>Tiếp tục mua hàng</span></a>
						</div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="short-description rte justify">
                                    <?php
                                    echo $tv_2['noi_dung'];?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
    document.getElementById('img1').onclick = function(){

                   
                  
                       
                       document.getElementById("htsp").classList.toggle('visiblet');
                       
                   
 
                            
               }
               document.getElementById('close').onclick = function(){

                   
                  
                       
                       document.getElementById("htsp").classList.toggle('visiblet');
                       
                   
 
                            
               }
    </script>
    
    <div class="product-collateral">
			<div class="line">
				<div class="main container">
					<div class="col-main details-product">
						<div class="w_975">
							<div class="row">
								<div class="col-xs-12">
									<ul id="product-detail-tab" class="nav nav-tabs product-tabs">
										<li> <a href="#product_tabs_description" data-toggle="tab" class="active">Thông tin chi tiết</a> </li>        
										<li><a href="#product_tabs_custom" data-toggle="tab" class="">Câu hỏi thường gặp</a> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main container">
				<div class="col-main details-product">
					<div class="w_975">
						<div class="row">
							<div class="col-xs-12">
								<div id="productTabContent" class="tab-content-pr">
									<div class="tab-pane fade active show" id="product_tabs_description">
										<div class="std justify product_description_content">
											
											Nội dung đang cập nhật ...
											
										</div>
									</div>
									
									<div class="tab-pane fade" id="product_tabs_custom">
										<div class="product-tabs-content-inner clearfix">
											
											<p>Ở đây có ghế riêng dành cho trẻ em không?
<br>
- Nhà hàng có ghế cho trẻ em riêng an toàn tuyệt đối
</p>
											
										</div>
									</div>
									
								</div>

								<div class="aside sock_to_day product_other_outer">
									<div class="product-sok">
										
										<div class="new_title">
											<h2>
												<a href="san-pham-noi-bat" title="Sản phẩm cùng loại">
													Sản phẩm cùng loại
												</a>
											</h2>
										</div>
										
										<div class="row sock_slide slider-items slick_margin">
											
											
																				
											<div class="col-md-3 col-sm-4 col-xs-6 item">
												




 














<div class="col-item">
	<div class="item-inner">
		
		
		
		<div class="product-wrapper">
			<div class="thumb-wrapper" onclick="window.location.href='/nom-bap-bo-rau-muong'">
				<a href="/nom-bap-bo-rau-muong" class="thumb flip" title="NỘM BẮP BÒ RAU MUỐNG">
					<img class="lazyload loaded" src="https://bizweb.dktcdn.net/100/341/555/products/nom-bap-bo-rau-muong-bo-to-quan-moc-2.jpg?v=1598954866000" data-src="https://bizweb.dktcdn.net/100/341/555/products/nom-bap-bo-rau-muong-bo-to-quan-moc-2.jpg?v=1598954866000" alt="NỘM BẮP BÒ RAU MUỐNG" data-was-processed="true">
				</a>
			</div>
		</div>
		<div class="item-info">
			<div class="info-inner">
				<h3 class="item-title"> <a href="/nom-bap-bo-rau-muong" title="NỘM BẮP BÒ RAU MUỐNG">NỘM BẮP BÒ RAU MUỐNG </a> </h3>
				<div class="item-content">
					<div class="item-price">    
						
						<div class="price-box"> 
							
							<span class="regular-price"> <span class="price">125.000₫</span> </span>
							
						</div>
						
					</div>
					<!-- Holder for Product Review -->
				</div>
			</div>

			<div class="actions hidden-xs hidden-sm remove_html">
				<form action="/cart/add" method="post" class="variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-19020326" enctype="multipart/form-data">
					<button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/nom-bap-bo-rau-muong'">
						Chi tiết
					</button>
					
					
					<input type="hidden" name="variantId" value="35909733">
					<button class="button btn-cart add_to_cart" title="Mua hàng">
						Mua hàng
					</button>
					
					
				</form>       
			</div>
		</div>
	</div>
</div>
											</div>
																				
											<div class="col-md-3 col-sm-4 col-xs-6 item">
												




 














<div class="col-item">
	<div class="item-inner">
		
		
		
		<div class="product-wrapper">
			<div class="thumb-wrapper" onclick="window.location.href='/rau-mung-toi-xao-toi'">
				<a href="/rau-mung-toi-xao-toi" class="thumb flip" title="RAU MÙNG TƠI XÀO TỎI">
					<img class="lazyload loaded" src="https://bizweb.dktcdn.net/100/341/555/products/mung-toi-bo-to-quan-moc-1560583012.jpg?v=1598954173000" data-src="https://bizweb.dktcdn.net/100/341/555/products/mung-toi-bo-to-quan-moc-1560583012.jpg?v=1598954173000" alt="RAU MÙNG TƠI XÀO TỎI" data-was-processed="true">
				</a>
			</div>
		</div>
		<div class="item-info">
			<div class="info-inner">
				<h3 class="item-title"> <a href="/rau-mung-toi-xao-toi" title="RAU MÙNG TƠI XÀO TỎI">RAU MÙNG TƠI XÀO TỎI </a> </h3>
				<div class="item-content">
					<div class="item-price">    
						
						<div class="price-box"> 
							
							<span class="regular-price"> <span class="price">45.000₫</span> </span>
							
						</div>
						
					</div>
					<!-- Holder for Product Review -->
				</div>
			</div>

			<div class="actions hidden-xs hidden-sm remove_html">
				<form action="/cart/add" method="post" class="variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-19020282" enctype="multipart/form-data">
					<button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/rau-mung-toi-xao-toi'">
						Chi tiết
					</button>
					
					
					<input type="hidden" name="variantId" value="35909567">
					<button class="button btn-cart add_to_cart" title="Mua hàng">
						Mua hàng
					</button>
					
					
				</form>       
			</div>
		</div>
	</div>
</div>
											</div>
																				
											<div class="col-md-3 col-sm-4 col-xs-6 item">
												




 














<div class="col-item">
	<div class="item-inner">
		
		
		
		<div class="product-wrapper">
			<div class="thumb-wrapper" onclick="window.location.href='/rau-cu-qua-luoc-cham-kho-quet'">
				<a href="/rau-cu-qua-luoc-cham-kho-quet" class="thumb flip" title="RAU CỦ QUẢ LUỘC CHẤM KHO QUẸT">
					<img class="lazyload loaded" src="https://bizweb.dktcdn.net/100/341/555/products/cu-qua-luoc-cham-kho-quet-2.jpg?v=1598954010000" data-src="https://bizweb.dktcdn.net/100/341/555/products/cu-qua-luoc-cham-kho-quet-2.jpg?v=1598954010000" alt="RAU CỦ QUẢ LUỘC CHẤM KHO QUẸT" data-was-processed="true">
				</a>
			</div>
		</div>
		<div class="item-info">
			<div class="info-inner">
				<h3 class="item-title"> <a href="/rau-cu-qua-luoc-cham-kho-quet" title="RAU CỦ QUẢ LUỘC CHẤM KHO QUẸT">RAU CỦ QUẢ LUỘC CHẤM KHO QUẸT </a> </h3>
				<div class="item-content">
					<div class="item-price">    
						
						<div class="price-box"> 
							
							<span class="regular-price"> <span class="price">85.000₫</span> </span>
							
						</div>
						
					</div>
					<!-- Holder for Product Review -->
				</div>
			</div>

			<div class="actions hidden-xs hidden-sm remove_html">
				<form action="/cart/add" method="post" class="variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-19020266" enctype="multipart/form-data">
					<button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/rau-cu-qua-luoc-cham-kho-quet'">
						Chi tiết
					</button>
					
					
					<input type="hidden" name="variantId" value="35909541">
					<button class="button btn-cart add_to_cart" title="Mua hàng">
						Mua hàng
					</button>
					
					
				</form>       
			</div>
		</div>
	</div>
</div>
											</div>
																				
											<div class="col-md-3 col-sm-4 col-xs-6 item">
												




 














<div class="col-item">
	<div class="item-inner">
		
		
		
		<div class="product-wrapper">
			<div class="thumb-wrapper" onclick="window.location.href='/lau-bo-sai-gon-thap-cam'">
				<a href="/lau-bo-sai-gon-thap-cam" class="thumb flip" title="LẨU BÒ SÀI GÒN THẬP CẨM">
					<img class="lazyload loaded" src="https://bizweb.dktcdn.net/100/341/555/products/71401059-382625639072325-1925446457410715648-n.png?v=1598952865000" data-src="https://bizweb.dktcdn.net/100/341/555/products/71401059-382625639072325-1925446457410715648-n.png?v=1598952865000" alt="LẨU BÒ SÀI GÒN THẬP CẨM" data-was-processed="true">
				</a>
			</div>
		</div>
		<div class="item-info">
			<div class="info-inner">
				<h3 class="item-title"> <a href="/lau-bo-sai-gon-thap-cam" title="LẨU BÒ SÀI GÒN THẬP CẨM">LẨU BÒ SÀI GÒN THẬP CẨM </a> </h3>
				<div class="item-content">
					<div class="item-price">    
						
						<div class="price-box"> 
							
							<span class="regular-price"> <span class="price">295.000₫</span> </span>
							
						</div>
						
					</div>
					<!-- Holder for Product Review -->
				</div>
			</div>

			<div class="actions hidden-xs hidden-sm remove_html">
				<form action="/cart/add" method="post" class="variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-19020105" enctype="multipart/form-data">
					<button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/lau-bo-sai-gon-thap-cam'">
						Chi tiết
					</button>
					
					
					<input type="hidden" name="variantId" value="35909209">
					<button class="button btn-cart add_to_cart" title="Mua hàng">
						Mua hàng
					</button>
					
					
				</form>       
			</div>
		</div>
	</div>
</div>
											</div>
																				
											<div class="col-md-3 col-sm-4 col-xs-6 item">
												




 














<div class="col-item">
	<div class="item-inner">
		
		
		
		<div class="product-wrapper">
			<div class="thumb-wrapper" onclick="window.location.href='/bo-to-nuong-tang'">
				<a href="/bo-to-nuong-tang" class="thumb flip" title="BÒ TƠ NƯỚNG TẢNG">
					<img class="lazyload loaded" src="https://bizweb.dktcdn.net/100/341/555/products/bo-nuong-tang-to-menu.jpg?v=1598952713000" data-src="https://bizweb.dktcdn.net/100/341/555/products/bo-nuong-tang-to-menu.jpg?v=1598952713000" alt="BÒ TƠ NƯỚNG TẢNG" data-was-processed="true">
				</a>
			</div>
		</div>
		<div class="item-info">
			<div class="info-inner">
				<h3 class="item-title"> <a href="/bo-to-nuong-tang" title="BÒ TƠ NƯỚNG TẢNG">BÒ TƠ NƯỚNG TẢNG </a> </h3>
				<div class="item-content">
					<div class="item-price">    
						
						<div class="price-box"> 
							
							<span class="regular-price"> <span class="price">185.000₫</span> </span>
							
						</div>
						
					</div>
					<!-- Holder for Product Review -->
				</div>
			</div>

			<div class="actions hidden-xs hidden-sm remove_html">
				<form action="/cart/add" method="post" class="variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-19020084" enctype="multipart/form-data">
					<button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/bo-to-nuong-tang'">
						Chi tiết
					</button>
					
					
					<input type="hidden" name="variantId" value="35909180">
					<button class="button btn-cart add_to_cart" title="Mua hàng">
						Mua hàng
					</button>
					
					
				</form>       
			</div>
		</div>
	</div>
</div>
											</div>
																				
											<div class="col-md-3 col-sm-4 col-xs-6 item">
												




 














<div class="col-item">
	<div class="item-inner">
		
		
		
		<div class="product-wrapper">
			<div class="thumb-wrapper" onclick="window.location.href='/mang-truc-yen-tu-xao-nam'">
				<a href="/mang-truc-yen-tu-xao-nam" class="thumb flip" title="MĂNG TRÚC YÊN TỬ XÀO NẤM">
					<img class="lazyload loaded" src="https://bizweb.dktcdn.net/100/341/555/products/mang-truc-xao-nam-bo-to-quan-moc-menu-to.jpg?v=1598952593000" data-src="https://bizweb.dktcdn.net/100/341/555/products/mang-truc-xao-nam-bo-to-quan-moc-menu-to.jpg?v=1598952593000" alt="MĂNG TRÚC YÊN TỬ XÀO NẤM" data-was-processed="true">
				</a>
			</div>
		</div>
		<div class="item-info">
			<div class="info-inner">
				<h3 class="item-title"> <a href="/mang-truc-yen-tu-xao-nam" title="MĂNG TRÚC YÊN TỬ XÀO NẤM">MĂNG TRÚC YÊN TỬ XÀO NẤM </a> </h3>
				<div class="item-content">
					<div class="item-price">    
						
						<div class="price-box"> 
							
							<span class="regular-price"> <span class="price">75.000₫</span> </span>
							
						</div>
						
					</div>
					<!-- Holder for Product Review -->
				</div>
			</div>

			<div class="actions hidden-xs hidden-sm remove_html">
				<form action="/cart/add" method="post" class="variants form-nut-grid form-ajaxtocart has-validation-callback" data-id="product-actions-19020070" enctype="multipart/form-data">
					<button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/mang-truc-yen-tu-xao-nam'">
						Chi tiết
					</button>
					
					
					<input type="hidden" name="variantId" value="35909153">
					<button class="button btn-cart add_to_cart" title="Mua hàng">
						Mua hàng
					</button>
					
					
				</form>       
			</div>
		</div>
	</div>
</div>
											</div>
											
										</div>
										<a href="/san-pham-noi-bat" class="btn-view-more" title="Xem thêm">
											Xem thêm &gt;&gt;
										</a>
											
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>