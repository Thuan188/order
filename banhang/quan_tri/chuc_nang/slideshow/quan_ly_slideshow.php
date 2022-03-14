<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$tv="select * from slideshow order by id ";
	$tv_1=mysqli_query($connect,$tv);
?>



 <div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Xem slides</p>
                        <div class="right__slidesWrapper">
                            <div class="right__slides">
                   <?php              while($tv_2=mysqli_fetch_array($tv_1))
		{
			$id=$tv_2['id'];
                        $ten=$tv_2['hinh'];
			$link_hinh="../hinh_anh/slideshow/".$tv_2['hinh'];
			$link_sua="?thamso=sua_slideshow&id=".$id;
			$link_xoa="?xoa_slideshow=co&id=".$id;
			?>
                                <div class="right__slide">
                                    <div class="right__slideTitle"><?php echo $ten; ?></div>
                                    <div class="right__slideImage"><a href="<?php echo $link_sua; ?>" ><img src="<?php echo $link_hinh; ?>" alt=""></a></div>
                                    <div class="right__slideIcons">
                                        <a class="right__slideIcon" href="<?php echo $link_sua; ?>"><img src="assets/icon-pencil.svg" alt=""></a>
                                        <a class="right__slideIcon" href="<?php echo $link_xoa; ?>"><img src="assets/icon-trash.svg" alt=""></a>
                                    </div>
                                </div>
                               <?php 
		}
	?>
                               
                            </div>
                        </div>
                    </div>
                </div>