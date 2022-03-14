<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	if(!isset($_GET['id_menu']))
	{
		$id_menu="toan_bo_san_pham";
	}
	else 
	{
		if($_GET['id_menu']!="" and $_GET['id_menu']!="toan_bo_san_pham")
		{
			$id_menu=$_GET['id_menu'];
		}
		else 
		{
			$id_menu="toan_bo_san_pham";
		}
	}
?>
<div class="right">
    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc"><select name="danh_muc" onchange="window.location='?thamso=quan_ly_san_pham&id_menu='+this.value" >
	<option value="" >Toàn bộ sản phẩm</option>
	<?php 
		$tv="select * from menu_doc order by id ";
		$tv_1=mysqli_query($connect,$tv);
		$a="";
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$ten=$tv_2['ten'];
			$id=$tv_2['id'];
			if($id_menu==$id)
			{
				$a="selected";
			}
			echo "<option value='$id' $a >";
				echo $ten;
			echo "</option>";
			$a="";
		}
	?>
	</select></p>

	

<?php 
	$so_dong_tren_mot_trang=10;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	
	if($id_menu=="toan_bo_san_pham")
	{
		$tv="select count(*) from san_pham";
	}
	else 
	{
		$tv="select count(*) from san_pham where thuoc_menu='$id_menu' ";
	}
		$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	if($id_menu=="toan_bo_san_pham")
	{
		$tv="select id,ten,gia,hinh_anh from san_pham order by id  limit $vtbd,$so_dong_tren_mot_trang";
	}
	else 
	{
		$tv="select id,ten,gia,hinh_anh from san_pham where thuoc_menu='$id_menu' order by id  limit $vtbd,$so_dong_tren_mot_trang";
	}
		$tv_1=mysqli_query($connect,$tv);
?>



    
                    
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Giá SP</th>
                                            <th>Đã bán</th>
                                            <th>Từ khoá</th>
                                            <th>Thời gian</th>
                                            <th>Sửa</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>
                            
                                    <tbody>
                                        <?php 
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$id=$tv_2['id'];
			$ten=$tv_2['ten'];
			$gia=$tv_2['gia'];
			$gia=number_format($gia,0,",",".");
			$link_hinh="../hinh_anh/san_pham/".$tv_2['hinh_anh'];
			$link_sua="?thamso=sua_san_pham&id_menu=".$id_menu."&id=".$id."&trang=".$_GET['trang'];
			$link_xoa="?xoa_san_pham=co&id=".$id;
			?>
                                        <tr>
                                            <td data-label="STT"><?php echo $id; ?></td>
                                            <td data-label="Tên sản phẩm"><?php echo $ten; ?></td>
                                            <td data-label="Hình ảnh"><img src="<?php echo $link_hinh; ?>" alt=""></td>
                                            <td data-label="Giá SP"><?php echo $gia; ?></td>
                                            <td data-label="Đã bán">1</td>
                                            <td data-label="Từ khoá">dress, vay</td>
                                            <td data-label="Thời gian">2020-07-13 21:31:05</td>
                                            <td data-label="Sửa" class="right__iconTable"><a href="<?php echo $link_sua; ?>"><img src="assets/icon-edit.svg" alt=""></a></td>
                                            <td data-label="Xoá" class="right__iconTable"><a href="<?php echo $link_xoa; ?>"><img src="assets/icon-trash-black.svg" alt=""></a></td>
                                        </tr>
                                        	</tr>
			<?php 
		}
	?>
                                     <tr>
		<td colspan="5" align="center" >
			<br>
			<?php 
				for($i=1;$i<=$so_trang;$i++)
				{
					$link_phan_trang="?thamso=quan_ly_san_pham&id_menu=".$id_menu."&trang=".$i;
					echo "<a href='$link_phan_trang' class='phan_trang' >";
						echo $i;
					echo "</a> ";
				}
			?>
			<br><br>
		</td>
	</tr>           
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>