<?php 
	if(!isset($bien_bao_mat)){exit();}
         $tv="select * from menu_doc  ";
	$tv_1=mysqli_query($connect,$tv);
	
        $i=0;
        while($tv_2=mysqli_fetch_array($tv_1))
		{ $i++;
                }
?>

<div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Bảng điều khiển</p>
                        <div class="right__cards">
                            <a class="right__card" href="?thamso=them_menu_doc">
                                <div class="right__cardTitle">Thêm danh mục</div>
                                <div class="right__cardNumber"><?php echo $i;?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                            </a>
                            <a class="right__card" href="?thamso=quan_ly_menu_doc">
                                <div class="right__cardTitle">Quản lý danh mục</div>
                                <div class="right__cardNumber">???</div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="assets/arrow-right.svg" alt=""></div>
                            </a>
                           
                            
                        </div>
                         </div>
     </div>