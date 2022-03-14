<?php 
   $_SESSION['them_gio_hang'] = "co";
        $id = $_GET['id'];
        $tv = "select * from san_pham where id='$id'";
$tv_1 = mysqli_query($connect, $tv);
$tv_2 = mysqli_fetch_array($tv_1);
$link_anh = "hinh_anh/san_pham/" . $tv_2['hinh_anh'];
	
?>
