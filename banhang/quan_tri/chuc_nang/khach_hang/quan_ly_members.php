<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$so_dong_tren_mot_trang=20;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	
	$tv="select count(*) from members";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	$tv="select * from members order by id desc limit $vtbd,$so_dong_tren_mot_trang";
	$tv_1=mysqli_query($connect,$tv);
?>
<div class="wrapper">
        <div class="container">
            <div class="dashboard">
               
                <div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Xem đơn hàng</p>
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Họ Tên</th>
                                            <th>UserName</th>
                                            <th>Số điện thoại</th>                                           
                                            <th>Email</th>                                            
                                            <th>Địa chỉ</th>
                                            <th>Ngày sinh</th>
                                            <th>Admin</th>
                                            <th>Xoá</th>
                                            <th>Xem</th>
                                            
                                        </tr>
                                    </thead>
                            <?php 
                            $i=0;
		while($tv_2=mysqli_fetch_array($tv_1))
		{
                    $i=$i+1;
			$id=$tv_2['id'];
			$ten=$tv_2['Name'];
                        $ten_tk=$tv_2['username'];
			$email=$tv_2['email'];
                        $url=$tv_2['URLS'];                       
                        $ngays=$tv_2['Birthday'];                                    
			$dien_thoai=$tv_2['dienthoai'];                        
                        $admin=$tv_2['admin'];
			$link_xem="?thamso=xem_hoa_don&id=".$id."&trang=".$_GET['trang'];
			$link_xoa="?xoa_hoa_don=co&id=".$id;
			$link_cap_nhat="?cap_nhat_hoa_don=co&id=".$id;
			?>
                                    <tbody>
                                        <tr>
                                            <td data-label="STT"><?php echo $i; ?></td>
                                            <td data-label="Họ tên"><?php echo $ten; ?></td>
                                            <td data-label="username"><?php echo $ten_tk; ?></td>
                                            <td data-label="Số điện thoại"><?php echo $dien_thoai; ?></td>
                                            <td data-label="Email"><?php echo $email; ?></td>                                            
                                            <td data-label="Địa chỉ"><?php echo $url; ?></td>
                                            <td data-label="Ngày sinh"><?php echo $ngays; ?></td>
                                            <td data-label="Admin"><?php echo $admin; ?></td>                                            
                                            <td data-label="Xoá" class="right__iconTable"><a href="<?php echo $link_xoa; ?>"><img src="assets/icon-trash-black.svg" alt=""></a></td>
                                            <td data-label="Thanh toán" class="right__confirm">
                                                <a href="<?php echo $link_xem; ?>" class="right__iconTable"><img src="assets/icon-check.svg" alt=""></a>
                                                <a href="<?php echo $link_xoa; ?>" class="right__iconTable"><img src="assets/icon-x.svg" alt=""></a>
                                            </td>
                                        </tr>
                                        
                <?php }?>            
                                    <tr>
		<td colspan="5" align="center" >
			<br>
			<?php 
				for($i=1;$i<=$so_trang;$i++)
				{
					$link_phan_trang="?thamso=hoa_don&trang=".$i;
					echo "<a href='$link_phan_trang' class='phan_trang' >";
						echo $i;
					echo "</a> ";
				}
			?>
			<br><br>
		</td>
	</tr></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
