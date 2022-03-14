<?php 
	if(!isset($bien_bao_mat)){exit();}
?>

<div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Chèn danh mục</p>
                        <div class="right__formWrapper">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="right__inputWrapper">
                                    <label for="title">Tiêu đề</label>
                                    <input type="text" name="ten" placeholder="Tiêu đề">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="p_category">Danh mục</label>                                   
                                    <?php
					if(!isset($_SESSION['danh_muc_menu']))
					{
						$_SESSION['danh_muc_menu']="";
					}
				?>
				<select name="danh_muc" >
                                    <option disabled selected>Chọn danh mục</option>
					<?php 
						$tv="select * from menu_doc order by id ";
						$tv_1=mysqli_query($connect,$tv);
						$a="";
						while($tv_2=mysqli_fetch_array($tv_1))
						{
							$ten=$tv_2['name'];
							$id_menu=$tv_2['id'];
							if($_SESSION['danh_muc_menu']==$id_menu)
							{
								$a="selected";
							}
							echo "<option value='$id_menu' $a >";
								echo $ten;
							echo "</option>";
							$a="";
						}
					?>
				</select>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="category">Thể loại</label>
                                    
                                    <?php
					$a_1="";
					$a_2="";
					if(isset($_SESSION['tuy_chon_trang_chu']))
					{
						if($_SESSION['tuy_chon_trang_chu']=="co")
						{
							$a_2="selected";
						}
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
                                    <input type="file" name="hinh_anh">
                                </div>
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
					if(isset($_SESSION['tuy_chon_noi_bat']))
					{
						if($_SESSION['tuy_chon_noi_bat']=="co")
						{
							$a_2="selected";
						}
					}
				?>
                                    <select name="noi_bat">
                                        <option disabled selected>Nhãn sản phẩm</option>
                                        <option value="" <?php echo $a_1; ?> >Không</option>
					<option value="co" <?php echo $a_2; ?> >Có</option>
                                    </select>
                                   
				
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="title">Giá sản phẩm</label>
                                    <input type="text" name="gia" placeholder="Giá sản phẩm">
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
                                    <textarea id="noi_dung" name="noi_dung" cols="30" rows="10" placeholder="Mô tả"></textarea>
                                    
				  
                                </div><div>&nbsp;</div>
                                <button class="btn" name="bieu_mau_them_san_pham" type="submit">Chèn</button>
                            
                          </form>
                        </div>
                    </div>
                </div>