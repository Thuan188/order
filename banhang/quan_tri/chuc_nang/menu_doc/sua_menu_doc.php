<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="select * from menu_doc where id='$id' ";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ten=$tv_2['name'];
	$link_dong="?thamso=quan_ly_menu_doc&trang=".$_GET['trang'];
?>
<!--<form action="" method="post">
	<table width="990px" >
		<tr>
			<td width="180px" ><b style="color:blue;font-size:20px" >Sửa menu dọc</b><br><br> </td>
			<td width="810px" align="right" >
				<a href="<?php // echo $link_dong; ?>" class="lk_a1" style="margin-right:30px" >Đóng</a>
			</td>
		</tr>
		<tr>
			<td >Tên : </td>
			<td >
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ten" value="<?php // echo $ten; ?>" >
			</td>
		</tr>		
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_sua_menu_doc" value="Sửa menu" style="width:200px;height:50px;font-size:24px" >
			</td>
		</tr>
	</table>
</form>-->

  <div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Chèn danh mục</p>
                        <div class="right__formWrapper">
                            <form action="" method="post">
                                <div class="right__inputWrapper">
                                    <label for="title">Tiêu đề</label>
                                    <input type="text" placeholder="Tiêu đề" name="ten" value="<?php echo $ten; ?>">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc">Mô tả</label>
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                                </div>
                                &nbsp;
<!--                                <button  type="submit">Chèn</button>-->
                                <input class="btn" type="submit" name="bieu_mau_sua_menu_doc" value="Sửa menu" >
                            </form>
                        </div>
                    </div>
                </div>