<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="DELETE FROM members WHERE id = $id ";
	mysqli_query($connect,$tv);
?>
