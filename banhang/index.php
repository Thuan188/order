<?php
	ob_start();
	session_start();
    include("ket_noi1.php");	
    include("chuc_nang/ham/ham.php");	
	if(isset($_POST['thong_tin_khach_hang']))
	{
		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	}
	if(isset($_POST['cap_nhat_gio_hang']))
	{
		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
		include("chuc_nang/gio_hang/xoa_san_pham_gio_hang.php");
		
		trang_truoc();
	}
		
?> 
<html>
	<head>
		<meta charset="UTF-8">
		<title>Web bán hàng</title>
		
				<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
				 <link rel="stylesheet" type="text/css" href="../banhang/giao_dien/media.css"> 

				<link rel="stylesheet" type="text/css" href="../banhang/giao_dien/demo1.css">
				<link rel="stylesheet" type="text/css" href="../banhang/giao_dien/main1.css">
				<style>
					canvas {
    position:absolute;
    top: 0;
    left: 0;
    margin: 0;
    padding: 0;
    display: block;
    -ms-touch-action: none;
    touch-action: none;
    z-index: 1;
}
				</style>
	</head>
	<body>
            <div  class="slqc">
            <?php
				include("chuc_nang/slideshow/slideshow.php");
				
                include("chuc_nang/dang_nhap/dieu_huong_dn.php");
            ?>
                
		</div>
			
				<div >
						<?php
							include("chuc_nang/menu_ngang/menu_ngang.php");
                                                        
						?> 
                                </div>
            <div style="position: relative; top: 150px;">
           
            <div id="content2" class="dh">
				<?php 
                                    include("chuc_nang/dieu_huong.php");
				?>
                                        
                                </div>
            
            <div id="footer1" class="footer">
				   <?php 
				  include("chuc_nang/footer/footer_top.php");
                                  include("chuc_nang/footer/footer.php");
				    ?></div></div>
             <?php 
				   include("chuc_nang/slideshow/slideUp.php");
					?>
				
			<script src="main.min.js"></script>
	</body>

	
	
</html>