<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="select * from san_pham where id='$id' ";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ten=$tv_2['ten'];
	$gia=$tv_2['gia'];
        $menu=$tv_2['thuoc_menu'];
	$trang_chu=$tv_2['trang_chu'];
	$noi_bat=$tv_2['noi_bat'];
	$noi_dung=$tv_2['noi_dung'];
	$ten_anh=$tv_2['hinh_anh'];
	$link_hinh="../hinh_anh/san_pham/".$tv_2['hinh_anh'];
	$link_dong="?thamso=quan_ly_san_pham&id_menu=".$_GET['id_menu']."&trang=".$_GET['trang'];
?>

<div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <a href="<?php echo $link_dong; ?>" class="lk_a1" style="margin-right:30px" >Đóng</a>
                        <p class="right__desc">Chèn danh mục</p>
                        <div class="right__formWrapper">
                            <form action="" method="post" enctype="multipart/form-data" >
                                <div class="right__inputWrapper">
                                    <label for="title">Tiêu đề</label>
                                    <input type="text" name="ten" placeholder="Tiêu đề" value="<?php echo $ten; ?>">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="p_category">Danh mục</label>                                   
                                    <?php
					
				?>
				<select name="danh_muc" >
                                    <option disabled selected>Chọn danh mục</option>
					<?php 
						
						
							
                                                        $tv1="select * from menu_doc order by id ";
						$tv_11=mysqli_query($connect,$tv1);
						$a="";
						while($tv_21=mysqli_fetch_array($tv_11))
						{
							$ten1=$tv_21['name'];
							$id_menu=$tv_2['id'];
							if($menu)
							{
								$a="selected";
							}
							echo "<option value='$id_menu' $a >";
								echo $ten1;
							echo "</option>";
							$a="";
						}
						
					?>
                                    <option disabled selected><?php echo $ten1;?></option>
				</select>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="category">Thể loại</label>
                                    
                                    <?php
					$a_1="";
					$a_2="";
					if($trang_chu=="co")
					{
						$a_2="selected";
					}
				?>
				<select name="trang_chu" style="margin-top:3px;margin-bottom:3px;" >
                                    <option disabled selected>Chọn thể loại</option>
					<option value="" <?php echo $a_1; ?> >Không</option>
					<option value="co" <?php echo $a_2; ?> >Có</option>
				</select>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="image">Hình ảnh 1</label>
                                     
                                     <input type="file" name="hinh_anh" value="<?php echo $ten_anh; ?>">
                                    <input type="hidden" name="ten_anh" value="<?php echo $ten_anh; ?>" >
                                    
				
                                </div>
                                <div class="right__inputImageReview"><a href="<?php echo $link_hinh; ?>" class="lk_a1"  target="_blank" ><img src="<?php echo $link_hinh; ?>" alt="<?php echo $ten_anh; ?>"></a></div>
<!--                                <div class="right__inputWrapper">
                                    <label for="image">Hình ảnh 2</label>
                                    <input type="file">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="image">Hình ảnh 3</label>
                                    <input type="file">
                                </div>-->
                               <div class="right__inputWrapper">
                                    <label for="label">Nhãn sản phẩm</label> 
                                         
                                    <?php
					$a_1="";
					$a_2="";
					if($noi_bat=="co")
					{
						$a_2="selected";
					}
				?>
				<select name="trang_chu" style="margin-top:3px;margin-bottom:3px;" >
                                    <option disabled selected>Chọn thể loại</option>
					<option value="" <?php echo $a_1; ?> >Không</option>
					<option value="co" <?php echo $a_2; ?> >Có</option>
				</select>
                                  
				
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="title">Giá sản phẩm</label>
                                    <input type="text" name="gia" value="<?php echo $gia; ?>" placeholder="Giá sản phẩm">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="title">Giá giảm sản phẩm</label>
                                    <input type="text" placeholder="Giá giảm sản phẩm">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="title">Từ khoá</label>
                                    <input type="text" placeholder="Từ khoá">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc">Mô tả</label>
                                    <script type="text/javascript">
				  tinymce.init({
					selector: '#noi_dung',
					theme: 'modern',
					width: 320,
					height: 200,
					plugins: [
					  'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
					  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
					  'save table contextmenu directionality emoticons template paste textcolor jbimages'
					],
					toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons jbimages',
					relative_urls: false
				  });
				  
				  </script>
                                    <textarea id="noi_dung" name="noi_dung" cols="30" rows="10" placeholder="Mô tả"><?php echo $noi_dung; ?></textarea>
                                   
                                    
				  
                                </div><div>&nbsp;</div>
                                <button class="btn" name="bieu_mau_them_san_pham" type="submit">Chèn</button>
                            
                          </form>
                        </div>
                    </div>
                </div>