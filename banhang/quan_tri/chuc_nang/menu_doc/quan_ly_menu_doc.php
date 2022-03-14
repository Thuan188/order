<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$so_dong_tren_mot_trang=20;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	
	$tv="select count(*) from menu_doc";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	$tv="select * from menu_doc order by id limit $vtbd,$so_dong_tren_mot_trang";
	$tv_1=mysqli_query($connect,$tv);
?>


              
                <div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Xem danh mục</p>
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tiêu đề</th>
                                            <th>Mô tả</th>
                                            <th>Sửa</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>
                                    <?php 
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$id=$tv_2['id'];
			$ten=$tv_2['name'];
			$link_sua="?thamso=sua_menu_doc&id=".$id."&trang=".$_GET['trang'];
			$link_xoa="?xoa_menu_doc=co&id=".$id;
			?>
                                    <tbody>
                                        <tr>
                                            <td data-label="STT"><?php echo $id; ?></td>
                                            <td data-label="Tiêu đề"><?php echo $ten; ?></td>
                                            <td data-label="Mô tả">Thiết kế nhẹ nhàng, trẻ trung và lãng đãng!</td>
                                            <td data-label="Sửa" class="right__iconTable"><a href="<?php echo $link_sua; ?>"><img src="assets/icon-edit.svg" alt=""></a></td>
                                            <td data-label="Xoá" class="right__iconTable"><a href="<?php echo $link_xoa; ?>"><img src="assets/icon-trash-black.svg" alt=""></a></td>
                                        </tr>
                                      
                                    </tbody>
                                    <?php 
		}
	?>
                                    <tr>
		<td colspan="3" align="center" class="right__iconTable" >
			<br>
			<?php 
				for($i=1;$i<=$so_trang;$i++)
				{
					$link_phan_trang="?thamso=quan_ly_menu_doc&trang=".$i;
					echo "<a href='$link_phan_trang' class='phan_trang' >";
						echo $i;
					echo "</a> ";
				}
			?>
			<br><br>
		</td>
	</tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
           

    <script src="js/main.js"></script>