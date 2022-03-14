<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$tv="select * from thong_tin_quan_tri where id='1' ";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ky_danh=$tv_2['ky_danh'];	
?>


        <div class="container">
            <div class="dashboard">
 <div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Chèn admin</p>
                        <div class="right__formWrapper">
                            <form action="" method="post">
                                <div class="right__inputWrapper">
                                    <label for="name">Tên admin</label>
                                    <input type="text" placeholder="Tên admin" value="<?php echo $ky_danh; ?>">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="email">Account</label>
                                    <input type="text" placeholder="Email" name="ky_danh" value="<?php echo $ky_danh; ?>">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password"  name="mat_khau" value="khong_doi" placeholder="Mật khẩu">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="image">Hình ảnh</label>
                                    <input type="file">
                                </div>
                                <div class="right__inputImageReview"><img src="assets/profile1.jpg" alt=""></div>
                                &nbsp;
                                <input class="btn"  type="submit" name="bieu_mau_sua_thong_tin_quan_tri" value="Cập nhập" >
                            </form>
                        </div>
                    </div>
                </div>
                   </div>
                    </div>
               