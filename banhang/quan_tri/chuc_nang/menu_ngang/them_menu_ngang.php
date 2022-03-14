<?php 
	if(!isset($bien_bao_mat)){exit();}
?>

  <div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Chèn danh mục</p>
                        
                        <div class="right__formWrapper">
                            <form action="" method="post">
                                <div class="right__inputWrapper">
                                    <label for="title">Tiêu đề</label>
                                    <input type="text" placeholder="Tiêu đề" name="ten" >
                                    
                                    
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="title">Loại menu</label>
                                    
                                
                                <?php
					$a_1="";
					$a_2="";
					if(isset($_SESSION['loai_menu_wr8']))
					{
						if($_SESSION['loai_menu_wr8']=="san_pham")
						{
							$a_2="selected";
						}
					}
				?>
				<select name="loai_menu" style="margin-top:3px;margin-bottom:3px;" >
					<option value="" <?php echo $a_1; ?> >Bình thường</option>
					<option value="san_pham" <?php echo $a_2; ?> >Sản phẩm</option>
				</select>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc">Mô tả</label>
                                    <script type="text/javascript">
				  tinymce.init({
					selector: '#noi_dung',
					theme: 'modern',
					width: 320,
					height: 300,
					plugins: [
					  'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
					  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
					  'save table contextmenu directionality emoticons template paste textcolor jbimages'
					],
					toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons jbimages',
					relative_urls: false
				  });
				  
				  </script>
                                    <textarea name="noi_dung" id="noi_dung" cols="30" rows="10" placeholder="Mô tả"></textarea>
                                </div>
                                &nbsp;
<!--                                <button  type="submit">Chèn</button>-->
                                <input class="btn" type="submit" name="bieu_mau_them_menu_ngang" value="Thêm menu" >
                            </form>
                        </div>
                    </div>
                </div>