<?php
	$tenmaychu="localhost";
	$tentaikhoan="root";
	$pass="";
	$csdl="shoe";
	$site_url = 'http://localhost/phpmyadmin/db_structure.php?db=shoe';
	$site_admin = 'http://localhost/shoe/admin/';
	$conn=mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl) or die("Không kết nối được");
	mysqli_set_charset($conn,"utf8");
?>