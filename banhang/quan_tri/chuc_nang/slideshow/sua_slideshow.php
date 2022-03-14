<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="select * from slideshow where id='$id' ";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ten_anh=$tv_2['hinh'];
	$lien_ket=$tv_2['lien_ket'];
	$link_hinh="../hinh_anh/slideshow/".$tv_2['hinh'];
	$link_dong="?thamso=quan_ly_slideshow";
?>


<div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Chèn slide</p>
                        <a href="<?php echo $link_dong; ?>" class="lk_a1" style="margin-right:30px" >Đóng</a><br>
                        <br>
                        <div class="right__formWrapper">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="right__inputWrapper">
                                    <label for="name">Tên SlideShow</label>
                                    <input  type="text" placeholder="Tên slide">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="url">Url</label>
                                    <input name="lien_ket"  type="text" placeholder="Url" value="<?php echo $lien_ket; ?>">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc">Mô tả</label>
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="image">Hình ảnh</label>
                                   
                                    <input type="file" name="hinh_anh" >
                                    <input type="hidden" name="ten_anh" value="<?php echo $ten_anh; ?>" >
                                   
                                </div> 
                                <div class="right__inputImageReview"><img src="<?php echo $link_hinh; ?>" alt="<?php echo $ten_anh; ?>"></div>
                                &nbsp;
                                <input class="btn" type="submit" name="bieu_mau_them_slideshow" value="Chèn"  >
                            </form>
                        </div>
                    </div>
                </div>