
<!--<div class="left-footer kt">-->
<?php 
//	$tv="select * from footer limit 0,1";
//	$tv_1=mysqli_query($connect,$tv);
//	$tv_2=mysqli_fetch_array($tv_1);
//	echo $tv_2['html'];
//        
?>

<!--</div>
<div class="center1-footer kt"></div>
<div class="center2-footer kt"></div>
<div class="right-footer kt"></div>-->
<footer>
<div class="container">
		<div class="footer-inner">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 foo_cl">
					<div class="footer-column dq-toggle">
						<h4>Thông tin</h4>
						<ul class="links">
							
							<li><a href="?thamso=xuat_mot_tin&id=1" title="Giới thiệu">Giới thiệu</a></li>
							
							<li><a href="?thamso=xuat_mot_tin&id=4" title="Tin tức">Tin tức</a></li>
							
							<li><a href="?thamso=xuat_mot_tin&id=5" title="Liên hệ">Liên hệ</a></li>
							
							<li><a href="#" title="Hệ thống cửa hàng">Hệ thống cửa hàng</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 foo_cl">
					<div class="footer-column dq-toggle">
						<h4>Hỗ trợ</h4>
						<ul class="links">
							
							<li><a href="#" title="Hướng dẫn mua hàng">Hướng dẫn mua hàng</a></li>
							
							<li><a href="#" title="Giao nhận và thanh toán">Giao nhận và thanh toán</a></li>
							
							<li><a href="#" title="Đổi trả và bảo hành">Đổi trả và bảo hành</a></li>
							
							<li><a href="#" title="Đăng ký thành viên">Đăng ký thành viên</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 foo_cl">
					<div class="footer-column dq-toggle">
						<h4>Chính sách</h4>
						<ul class="links">
							
							<li><a href="#" title="Chính sách giao nhận">Chính sách giao nhận</a></li>
							
							<li><a href="#" title="Chính sách chi nhánh">Chính sách chi nhánh</a></li>
							
							<li><a href="#" title="Chính sách đặt bàn">Chính sách đặt bàn</a></li>
							
							<li><a href="#" title="Chính sách thanh toán">Chính sách thanh toán</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3 col-xs-12 foo_cl">
					<div class="footer-column-last vbline">
						<h4>Liên hệ</h4>
						
						<address>
							<img class="mg_r_2" src="//bizweb.dktcdn.net/100/341/555/themes/786825/assets/on-maps.png?1608568857115" alt="Mew Food">
							<span>48 Cao Thắng - Hải Châu - Đà Nẵng</span>
						</address>
						<div class="phone-footer">
							<img class="mg_r_2" src="//bizweb.dktcdn.net/100/341/555/themes/786825/assets/old-phone.png?1608568857115" alt="Mew Food">
							<a href="tel:0373951042" title="0373951042">0373951042</a>
						</div>
						<div class="email-footer">
							<img class="mg_r_2" src="//bizweb.dktcdn.net/100/341/555/themes/786825/assets/email-envelope.png?1608568857115" alt="Mew Food">
							<a href="mailto:nguyenquan52000@gmail.com" title="nguyenquan52000@gmail.com">nguyenquan52000@gmail.com</a>
						</div>
						

					</div>
				</div>
			</div>
			<div class="row b_f">
				<div class="col-md-6 col-sm-6 col-xs-12">
					
					
					<div class="coppyright">Bản quyền thuộc về <a rel="nofollow" href="" title="MewTheme" target="_blank">MewTheme</a>. Cung cấp bởi Sapo.</div>
					
					
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="footer-column dq-toggle">
						<ul class="links">
                                                    <li><a href="?index.php" title="Trang chủ">Trang chủ</a></li>
                                               <?php       $tv="select id,ten,loai_menu from menu_ngang order by id";
	$tv_1=mysqli_query($connect,$tv);
                             while($tv_2=mysqli_fetch_array($tv_1))
	{
		if($tv_2['loai_menu']==""){$link_menu="?thamso=xuat_mot_tin&id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="san_pham"){$link_menu="?thamso=xuat_san_pham_2";}
                    echo "<li>";?>
                     <a href="<?php echo $link_menu; ?>" title="<?php echo $tv_2['ten']; ?>"><?php echo $tv_2['ten']; ?></a>
                     <?php  echo "</li>";
        }
			?>				
							
							
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    </footer>