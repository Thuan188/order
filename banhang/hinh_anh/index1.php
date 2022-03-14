<?php
//	ob_start();
//	session_start();
//    include("ket_noi.php");	
//    include("chuc_nang/ham/ham.php");	
//	if(isset($_POST['thong_tin_khach_hang']))
//	{
//		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
//	}
//	if(isset($_POST['cap_nhat_gio_hang']))
//	{
//		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
//		include("chuc_nang/gio_hang/xoa_san_pham_gio_hang.php");
//		
//		trang_truoc();
//	}
		
?> 
<html>
	<head>
		<meta charset="UTF-8">
		<title>Web bán hàng</title>
                <link rel="stylesheet" type="text/css" href="../banhang/giao_dien/main2.css">
	</head>
	<body>
            <div>
                <image id="img" src="bg_m_1.png"  >
                <image id="img2" src="bg_m_1.png"  >
                <image id="img1" src="bg_m_1.png">
            //<?php
//            include("chuc_nang/slideshow/slideshow.php");
//            ?>
		</div>
			
				<div>
						//<?php
//							include("chuc_nang/menu_ngang/menu_ngang.php");
//                                                        
//						?> </div>
					<div>
						//<?php 
//							include("chuc_nang/dieu_huong.php");
//						?></div>
            <div>
					//<?php 
////						include("chuc_nang/menu_doc/menu_doc.php");
//						include("chuc_nang/san_pham/moi.php"); 
//						include("chuc_nang/quang_cao/trai.php"); 
//					?>					
		</div>			
					    //<?php
//						include("chuc_nang/dang_nhap/dieu_huong_dn.php");
//						
//						 
//						include("chuc_nang/san_pham/noi_bat.php"); 
//						include("chuc_nang/quang_cao/phai.php"); 
//						?>
            <div>
				   //<?php //include("chuc_nang/footer/footer.php"); ?>
            </div>
	</body>
</html>
<script>
               document.getElementById('img').onclick = function(){
//                   var x =document.getElementById('popup-cart');
                   if(document.getElementById('img1').src.endsWith("bg_m_1.png")){
                       document.getElementById('img1').src="bg_m_2.png";
                        
                   }else{
                       document.getElementById('img1').src="bg_m_1.png";
                       
                   }
               }   
               document.getElementById("img1").classList.add('MyClass');
               document.getElementById('img').onclick = function(){
                   document.getElementById("img1").classList.add('MyClass');
                   if ( document.getElementById("img1").classList.contains('MyClass') ){
//                       document.getElementById("img1").classList.add('MyClass');
                       document.getElementById("img1").classList.toggle('MyClass1');
                   }
                   
 
                            
               }
                document.getElementById('img2').onclick = function(){
                   document.getElementById("img1").classList.add('MyClass');
                   if ( document.getElementById("img1").classList.contains('MyClass') ){
//                       document.getElementById("img1").classList.add('MyClass');
                       document.getElementById("img1").classList.toggle('MyClass1');
                   }
                   
 
                            
               }
     </script>