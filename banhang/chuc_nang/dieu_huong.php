<?php 
	if(isset($_GET['thamso'])){$tham_so=$_GET['thamso'];}else{$tham_so="";}
	switch($tham_so)
	{
		case "xuat_san_pham":
                   echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                        echo"</div>";
//                        echo "<div id='left1' class='qcsptrai'>";
//					
//
//						include("chuc_nang/san_pham/moi.php"); 
//						include("chuc_nang/quang_cao/trai.php"); 
//										
//		echo"</div>";
                echo"<div id='content1' class='dh'>";
                         include("chuc_nang/menu_doc/menu_doc.php");
			include("chuc_nang/san_pham/xuat.php");
                        include("chuc_nang/san_pham/uudai.php");
                        include("chuc_nang/san_pham/tintuc.php");
                        echo"</div>";
//                        echo"<div id='right1' class='qcspphai'>";
//					    
//						include("chuc_nang/dang_nhap/dieu_huong_dn.php");
//						
//						 
//						include("chuc_nang/san_pham/noi_bat.php"); 
//						include("chuc_nang/quang_cao/phai.php"); 
//						
//            echo"</div>";
		break;
		case "chi_tiet_san_pham":
			 echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                        echo"</div>";
//                    echo "<div id='left1' class='qcsptrai'>";
//					
//
//						include("chuc_nang/san_pham/moi.php"); 
//						include("chuc_nang/quang_cao/trai.php"); 
//										
//		echo"</div>";
                echo"<div id='content1' class='dh'>";
                        include("chuc_nang/san_pham/chi_tiet_san_pham.php");
                        echo"</div>";
//                        echo"<div id='right1' class='qcspphai'>";
//					    
//						include("chuc_nang/dang_nhap/dieu_huong_dn.php");
//						
//						 
//						include("chuc_nang/san_pham/noi_bat.php"); 
//						include("chuc_nang/quang_cao/phai.php"); 
//						
//            echo"</div>";
		break;
		case "xuat_san_pham_2":
                    echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                        echo"</div>";
//                        echo "<div id='left1' class='qcsptrai'>";
//					
//
//						include("chuc_nang/san_pham/moi.php"); 
//						include("chuc_nang/quang_cao/trai.php"); 
//										
//		echo"</div>";
                echo"<div id='content1' class='dh'>";
                        include("chuc_nang/menu_doc/menu_doc.php");
			include("chuc_nang/san_pham/xuat_toan_bo_san_pham.php");
                        echo"</div>";
//                        echo"<div id='right1' class='qcspphai'>";
//					    
//						include("chuc_nang/dang_nhap/dieu_huong_dn.php");
//						
//						 
//						include("chuc_nang/san_pham/noi_bat.php"); 
//						include("chuc_nang/quang_cao/phai.php"); 
//						
//            echo"</div>";
		break;
		case "xuat_mot_tin":
			 echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                       
                        echo"</div>";
//                    echo "<div id='left1' class='qcsptrai'>";
//					
//
//						include("chuc_nang/san_pham/moi.php"); 
//						include("chuc_nang/quang_cao/trai.php"); 
//										
//		echo"</div>";
                echo"<div id='content1' class='dh'>";
                        include("chuc_nang/xuat_mot_tin.php");
                         include("chuc_nang/san_pham/noi_bat.php");
                        include("chuc_nang/san_pham/tintuc.php");
                        echo"</div>";
//                        echo"<div id='right1' class='qcspphai'>";
//					    
//						include("chuc_nang/dang_nhap/dieu_huong_dn.php");
//						
//						 
//						include("chuc_nang/san_pham/noi_bat.php"); 
//						include("chuc_nang/quang_cao/phai.php"); 
//						
//            echo"</div>";
		break;
		case "tim_kiem":
                   echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                        echo"</div>";
//                        echo "<div id='left1' class='qcsptrai'>";
//					
//
//						include("chuc_nang/san_pham/moi.php"); 
//						include("chuc_nang/quang_cao/trai.php"); 
//										
//		echo"</div>";
                echo"<div id='content1' class='dh'>";
                          include("chuc_nang/menu_doc/menu_doc.php");
			include("chuc_nang/tim_kiem/xuat_san_pham_tim_kiem.php");
                        echo"</div>";
//                        echo"<div id='right1' class='qcspphai'>";
//					    
//						include("chuc_nang/dang_nhap/dieu_huong_dn.php");
//						
//						 
//						include("chuc_nang/san_pham/noi_bat.php"); 
//						include("chuc_nang/quang_cao/phai.php"); 
//						
//            echo"</div>";
		break;
		case "gio_hang":
			 echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                        echo"</div>";
//                    echo "<div id='left1' class='qcsptrai'>";
//					
//
//						include("chuc_nang/san_pham/moi.php"); 
//						include("chuc_nang/quang_cao/trai.php"); 
//										
//		echo"</div>";
                echo"<div id='content1' class='dh'>";
                       include("chuc_nang/gio_hang/gio_hang.php");
                        echo"</div>";
//                        echo"<div id='right1' class='qcspphai'>";
//					    
//						include("chuc_nang/dang_nhap/dieu_huong_dn.php");
//						
//						 
//						include("chuc_nang/san_pham/noi_bat.php"); 
//						include("chuc_nang/quang_cao/phai.php"); 
//						
//            echo"</div>";
		break;
		case "dang_ky":
			 echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                        echo"</div>";
//                    echo "<div id='left1' class='qcsptrai'>";
//					
//
//						include("chuc_nang/san_pham/moi.php"); 
//						include("chuc_nang/quang_cao/trai.php"); 
//										
//		echo"</div>";
                echo"<div id='content1' class='dh'>";
                       include("chuc_nang/dang_nhap/register.php");	
                     
                        echo"</div>";
//                        echo"<div id='right1' class='qcspphai'>";
//					    
//						include("chuc_nang/dang_nhap/dieu_huong_dn.php");
//						
//						 
//						include("chuc_nang/san_pham/noi_bat.php"); 
//						include("chuc_nang/quang_cao/phai.php"); 
//						
//            echo"</div>";
		break;
            case "dang_nhap":
			 echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                        echo"</div>";
//                    echo "<div id='left1' class='qcsptrai'>";
//					
//
//						include("chuc_nang/san_pham/moi.php"); 
//						include("chuc_nang/quang_cao/trai.php"); 
//										
//		echo"</div>";
                echo"<div id='content1' class='dh'>";
                       include("chuc_nang/dang_nhap/login.php");	
                     
                        echo"</div>";
//                        echo"<div id='right1' class='qcspphai'>";
//					    
//						include("chuc_nang/dang_nhap/dieu_huong_dn.php");
//						
//						 
//						include("chuc_nang/san_pham/noi_bat.php"); 
//						include("chuc_nang/quang_cao/phai.php"); 
//						
//            echo"</div>";
		break;
		case "xldangky":
			 echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                        echo"</div>";
//                    echo "<div id='left1' class='qcsptrai'>";
//					
//
//						include("chuc_nang/san_pham/moi.php"); 
//						include("chuc_nang/quang_cao/trai.php"); 
//										
//		echo"</div>";
                echo"<div id='content1' class='dh'>";
                       include("chuc_nang/dang_nhap/xu_ly_register.php");
                        echo"</div>";
//                        echo"<div id='right1' class='qcspphai'>";
//					    
//						include("chuc_nang/dang_nhap/dieu_huong_dn.php");
//						
//						 
//						include("chuc_nang/san_pham/noi_bat.php"); 
//						include("chuc_nang/quang_cao/phai.php"); 
//						
//            echo"</div>";
		break;
		case "suathongtin_dn":
			 echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                        echo"</div>";

                echo"<div id='content1' class='dh'>";
                       include("chuc_nang/dang_nhap/suathongtin_dn.php");
                       
                        echo"</div>";

		break;
                case "donhang_nguoidung":
			 echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                        echo"</div>";

                echo"<div id='content1' class='dh'>";
                       include("chuc_nang/dang_nhap/don_hang_cua_ban.php");
                       
                        echo"</div>";

		break;
              case "donhang_chi_tiet":
			 echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                        echo"</div>";

                echo"<div id='content1' class='dh'>";
                       include("chuc_nang/dang_nhap/chi_tiet_don_hang.php");
                       
                        echo"</div>";

		break;
             case "check_out":
			

                       include("chuc_nang/gio_hang/gio_hang1.php");
                   
                       
                       
                       

		break;
            case "doi_mk":
			 echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                        echo"</div>";

                echo"<div id='content1' class='dh'>";
                       include("chuc_nang/dang_nhap/doi_mat_khau.php");
                       
                        echo"</div>";

		break;
             case "uu_dai_page":
			 echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                        echo"</div>";

                echo"<div id='content1' class='dh'>";
                       include("chuc_nang/san_pham/uudai_page.php");
                       
                        echo"</div>";

		break;
		case "sua_user":
                     echo"<div style='display:none;'>";
			include("chuc_nang/slideshow/index.php");
                        echo"</div>";
//                    echo "<div id='left1' class='qcsptrai'>";
//					
//
//						include("chuc_nang/san_pham/moi.php"); 
//						include("chuc_nang/quang_cao/trai.php"); 
//										
//		echo"</div>";
                echo"<div id='content1' class='dh'>";
                       include("chuc_nang/dang_nhap/xu_ly_suathongtin.php");	
                        include("chuc_nang/san_pham/noi_bat.php"); 
                        include("chuc_nang/san_pham/tintuc.php"); 
                        echo"</div>";
//                        echo"<div id='right1' class='qcspphai'>";
//					    
////						include("chuc_nang/dang_nhap/dieu_huong_dn.php");
//						
//						 
//						include("chuc_nang/san_pham/noi_bat.php"); 
//						include("chuc_nang/quang_cao/phai.php"); 
//						
//            echo"</div>";
		break;
		default:
                    
                    include("chuc_nang/slideshow/demo/index.php");
                        include("chuc_nang/slideshow/index.php");

//                    echo "<div id='left1' class='qcsptrai'>";
//					
//
//						include("chuc_nang/san_pham/moi.php"); 
//						include("chuc_nang/quang_cao/trai.php"); 
//										
//		echo"</div>";
                echo"<div id='content1' class='dh'>";
                include("chuc_nang/san_pham/uudai.php"); 
                        include("chuc_nang/menu_doc/menu_doc.php");
				
			include("chuc_nang/san_pham/san_pham_trang_chu.php");	
                        include("chuc_nang/san_pham/noi_bat.php"); 
                        include("chuc_nang/san_pham/tintuc.php"); 
                        echo"</div>";
//                        echo"<div id='right1' class='qcspphai'>";
//					    
//						
//						
//						 
						
//						include("chuc_nang/quang_cao/phai.php"); 
						
//            echo"</div>";
	}
?>
