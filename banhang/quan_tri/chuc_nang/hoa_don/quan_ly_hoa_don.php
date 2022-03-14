<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$so_dong_tren_mot_trang=20;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	
	$tv="select count(*) from hoa_don";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	$tv="select * from hoa_don order by id desc limit $vtbd,$so_dong_tren_mot_trang";
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
                                            <th>Tên</th>
                                            <th>Số đt</th>
                                            <th>Số hóa đơn</th>
                                            <th>Email</th>
                                            <th>Số lượng</th>
                                            <th>Địa chỉ</th>
                                            <th>Ngày</th>
                                            <th>Tổng</th>
                                            <th>Trạng thái</th>
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
			$ten=$tv_2['ten_nguoi_mua'];
			$email=$tv_2['email'];
                        $sl=$tv_2['so_luong'];
                        $tt=$tv_2['tong_tien'];
                        $ngay=$tv_2['ngaytaohd'];
                        $url=$tv_2['dia_chi'];                       
			$dien_thoai=$tv_2['dien_thoai'];
                        $trang_thai=$tv_2['noi_dung'];
			$link_xem="?thamso=xem_hoa_don&id=".$id."&trang=".$_GET['trang'];
			$link_xoa="?xoa_members=co&id=".$id;
			$link_cap_nhat="?cap_nhat_hoa_don=co&id=".$id;
			?>
                                    <tbody>
                                        <tr>
                                            <td data-label="STT"><?php echo $i; ?></td>
                                            <td data-label="Họ tên"><?php echo $ten; ?></td>
                                            <td data-label="Số điện thoại"><?php echo $dien_thoai; ?></td>
                                            <td data-label="Số hoá đơn"><?php echo $id; ?></td>
                                            <td data-label="Email"><?php echo $email; ?></td>
                                            <td data-label="Số lượng"><?php echo $sl; ?></td>
                                            <td data-label="Địa chỉ"><?php echo $url; ?></td>
                                            <td data-label="Ngày"><?php echo $ngay; ?></td>
                                            <td data-label="Tổng"><?php echo $tt; ?></td>
                                            <td data-label="Trạng thái"><?php echo $trang_thai; ?></td>
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
