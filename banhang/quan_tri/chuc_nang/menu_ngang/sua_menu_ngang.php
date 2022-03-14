<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	//include('ket_noi.php');
	if(isset($_GET['id'])) {	$id=$_GET['id'];
	$tv="select * from menu_ngang where id='$id' ";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ten=$tv_2['ten'];
	$loai_menu=$tv_2['loai_menu'];
	$noi_dung=$tv_2['noi_dung'];
	$link_dong="?thamso=quan_ly_menu_ngang&trang=".$_GET['trang'];
	}
?>

<div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Chèn danh mục</p>
                        <a href="<?php echo $link_dong; ?>" class="lk_a1" style="margin-right:30px" >Đóng</a><br>
                        <div class="right__formWrapper">
                            <form action="" method="post">
                                <div class="right__inputWrapper">
                                    <label for="title">Tiêu đề</label>
                                    <input type="text" placeholder="Tiêu đề" name="ten"value="<?php echo $ten; ?>" >
                                    
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="title">Loại menu</label>
                                    
                                
                                <?php
					$a_1="";
					$a_2="";
					if($loai_menu=="san_pham")
					{
						$a_2="selected";
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
                                    <textarea name="noi_dung" id="noi_dung" cols="30" rows="10" placeholder="Mô tả"><?php echo $noi_dung; ?></textarea>
                                </div>
                                &nbsp;
<!--                                <button  type="submit">Chèn</button>-->
                                <input class="btn" type="submit" name="bieu_mau_sua_menu_ngang" value="Sửa menu" >
                            </form>
                        </div>
                    </div>
                </div>