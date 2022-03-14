<br><br>
<br><br>
<br><br>
<div class="container1">
	<div class="b_tab">
		<div class="tab_1 tab-content slider-items ajaxcol current">
			<div class="box_ajax">
		
							<div class="b_bn_tt">
								<img alt="Sản phẩm nổi bật" class="lazyload loaded" src="//bizweb.dktcdn.net/100/341/555/themes/786825/assets/bn_cl_r.png?1608568857115" data-src="//bizweb.dktcdn.net/100/341/555/themes/786825/assets/bn_cl_r.png?1608568857115" data-was-processed="true">
							</div>
							<div class="b_bn_tt1">
							<h1>Sản phẩm nổi bật </h1>
							<?php 
		$tv="select id,ten,hinh_anh from san_pham where noi_bat='co' order by id desc limit 0,3";
		$tv_1=mysqli_query($connect,$tv);
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
			$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
			echo "<div class='item_img'>";
			echo "<a href='$link_chi_tiet' >";
				echo "<img src='$link_anh' width='100px' >";
			echo "</a>";
			echo "<br><br>";
			echo $tv_2['ten'];
			echo "</div>";
		}
	?>



</div>
<div class="desx">
								<p class="b">
									Tất cả các món ăn nhanh yêu thích của bạn hiện có sẵn, chỉ bằng một cú nhấp tay của bạn. (Tại một số cơ sở nhà hàng Mew-Food luôn mở cửa hàng ngày trong tuần).
								</p>
								<div class="view_more">
									<a href="?thamso=xuat_san_pham_2" title="Sản phẩm nổi bật">Xem tất cả</a>
								</div>
							</div>
			</div>
		</div></div>
</div>

