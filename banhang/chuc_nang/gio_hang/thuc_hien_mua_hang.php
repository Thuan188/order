<?php 
	
	require_once("ket_noi1.php");
	if(isset($_SESSION['id_them_vao_gio']))
	{
	if(isset($_SESSION['user_id']))
		{
			$user_id = intval($_SESSION['user_id']);
			$tv= "SELECT * FROM members WHERE id= '$user_id'";
			$sql_query = mysqli_query($connect,$tv);
			
			$member = mysqli_fetch_array($sql_query); 
			$ten_nguoi_mua =trim($_POST['ten_nguoi_dung']);
			$dien_thoai = trim($_POST['dien_thoai']);
			$dia_chi = trim($_POST['url']);
			$email = trim($_POST['email']);
			$noi_dung="chưa duyệt";
                        $sl=trim($_POST['so_luong']);
                        $tong_tien=trim($_POST['tong_tien']);
                        
                       
                        
		}
		else
		{
                    $user_id="";
		$ten_nguoi_mua=trim($_POST['ten_nguoi_dung']);
		$email=trim($_POST['email']);
		$dien_thoai=trim($_POST['dien_thoai']);
		$dia_chi=trim(nl2br($_POST['url']));
		$noi_dung="chưa duyệt";
                $sl=trim($_POST['so_luong']);
                $tong_tien=trim($_POST['tong_tien']);
		}
		
		if($ten_nguoi_mua!="" and $dien_thoai!="" and $dia_chi!="")
		{
			$hang_duoc_mua="";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				$hang_duoc_mua=$hang_duoc_mua.$_SESSION['id_them_vao_gio'][$i]."[|||]".$_SESSION['sl_them_vao_gio'][$i]."[|||||]";
			}		
			$tv="INSERT INTO hoa_don (
            id ,
            ten_nguoi_mua ,
            email ,
            dia_chi ,
            dien_thoai ,
            noi_dung ,
            hang_duoc_mua,so_luong,tong_tien,id_members
            )
            VALUES (
            NULL ,
            '$ten_nguoi_mua',
            '$email',
            '$dia_chi',
            '$dien_thoai',
            '$noi_dung',
            '$hang_duoc_mua','$sl','$tong_tien',$user_id
            );";
			mysqli_query($connect,$tv);
			unset($_SESSION['id_them_vao_gio']);
			unset($_SESSION['sl_them_vao_gio']);
			
			thong_bao_html_roi_chuyen_trang("Cảm ơn bạn đã mua hàng tại web site chúng tôi","index.php");
		}
		else 
		{
			thong_bao_html("Thao tác thực hiện bị sai");
			trang_truoc();
			exit();
		}
	}
?>