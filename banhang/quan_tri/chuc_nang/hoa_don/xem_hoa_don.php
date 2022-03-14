<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="select * from hoa_don where id='$id' ";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ten_nguoi_mua=$tv_2['ten_nguoi_mua'];
	$email=$tv_2['email'];
	$dien_thoai=$tv_2['dien_thoai'];
	$dia_chi=$tv_2['dia_chi'];
	$noi_dung=$tv_2['noi_dung'];
	$hang_duoc_mua=$tv_2['hang_duoc_mua'];
	$link_dong="?thamso=hoa_don&&trang=".$_GET['trang'];
	$link_xoa="?xoa_hoa_don_o_trang_chi_tiet=co&id=".$id."&trang=".$_GET['trang'];
	$link_cap_nhat="?cap_nhat_hoa_don=co&id=".$id."&trang=".$_GET['trang'];
?>






        <div class="container">
            <div class="dashboard">
               
                <div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        
                        <a class="right__desc" href="<?php echo $link_dong; ?>" class="lk_a1"  >Đóng</a>
                        <br><br>
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    
		
			
	
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên</th>
                                            <th>Giá bán</th>
                                            <th>Số lượng</th>
                                            <th>Tổng cộng</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php 
					$m=explode("[|||||]",$hang_duoc_mua);	
					$tong_lon=0;
					for($i=0;$i<count($m);$i++)
					{
						if(isset($m[$i]))
						{
							if($m[$i]!="")
							{
								$stt=$i+1;
								$m_2=explode("[|||]",$m[$i]);
								$id_sp=$m_2[0];
								$sl_sp=$m_2[1];
								$tv_sp="select id,ten,gia from san_pham where id='$id_sp' ";
								$tv_sp_1=mysqli_query($connect,$tv_sp);
								$tv_sp_2=mysqli_fetch_array($tv_sp_1);
								$ten=$tv_sp_2['ten'];
								$gia=$tv_sp_2['gia'];
								$gia_duoc_dinh_dang=number_format($gia,0,",",".");
								$tong=$gia*$sl_sp;
								$tong_duoc_dinh_dang=number_format($tong,0,",",".");
								$tong_lon=$tong_lon+$tong;
								if($sl_sp!=0)
								{
								?>
									
								
                                    
                                        <tr>
                                            <td data-label="STT"><?php echo $stt; ?></td>
                                            <td data-label="Họ tên"><?php echo $ten; ?></td>
                                            <td data-label="Số điện thoại"><?php echo $gia_duoc_dinh_dang; ?></td>
                                            <td data-label="Số hoá đơn"><?php echo $sl_sp; ?></td>
                                            <td data-label="Email"><?php echo $tong_duoc_dinh_dang; ?></td>
                                            
                                        </tr>
                                    <?php
								}								
							}
						}
					}
				?>    
                        
                                   <tr>
					<td colspan="5">
						<br><br>
						Tổng tiền của đơn hàng là : 
						<?php 
							$tong_lon_duoc_dinh_dang=number_format($tong_lon,0,",",".");
							echo "<b>".$tong_lon_duoc_dinh_dang."</b>";
						?>
						<br><br>
					</td>
				</tr></tbody>
                                    
                                </table>
                                
                            </div>
                            </div>
                            <table width="990px" >
	
                                    
                                    
	
</table>
                        
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                   
                                    <thead>
                                        <tr>
                                            <th>Tên người mua</th>
                                            <th>Email</th>
                                            <th>Điện thoại</th>
                                            <th>Địa chỉ</th>
                                            <th>Trạng thái</th>
                                           
                                        </tr>
                         
                                    </thead>
                                    <tbody>
                           
									
								
                                    
                                        <tr>
                                            <td data-label="STT"><?php echo $ten_nguoi_mua; ?></td>
                                            <td data-label="Họ tên"><?php echo $email; ?></td>
                                            <td data-label="Số điện thoại"><?php echo $dien_thoai; ?></td>
                                            <td data-label="Số hoá đơn"><?php echo $dia_chi; ?></td>
                                            <td data-label="Email"><?php echo $noi_dung; ?></td>
                                                          
	<tr height="30px" >		<td>&nbsp;</td>        <td>			<a href="<?php echo $link_cap_nhat; ?>" class="lk_a1" >Duyệt hóa đơn</a>	</td>		<td>
			<a href="<?php echo $link_xoa; ?>" class="lk_a1" >Xóa</a>
		</td>
	</tr>
                                            
                                     
                                   
                        </tbody>
                                    
                                </table>
                                
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
