<div id="wrapper">
<header class="header_container" id="header_container">
<div class="container mb_c">
    <div class="row ">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 z-indexlogo"> 
                            <!-- Header Logo -->
                            <div class="logo moble">
                                <a title="Mew Food" href="/">
                                   <span>New</span><br>
                                    <span>Food</span> 
                                    <!-- <picture>
                                     
                                       
                                        <source media="(max-width: 768px;)" srcset="http://bizweb.dktcdn.net/thumb/small/100/341/555/themes/786825/assets/logo.png?1608568857115">
                                        <source media="(min-width: 320px)" srcset="http://bizweb.dktcdn.net/thumb/small/100/341/555/themes/786825/assets/logo.png?1608568857115">
                                        <img alt="Mew Food" src="http://bizweb.dktcdn.net/thumb/small/100/341/555/themes/786825/assets/logo.png?1608568857115">
                                    </picture> -->
                                </a> 
                            </div>
                            <!-- mobile-menu -->
                            <div class="hidden-desktop" id="mobile-menu">
                                <div class="navmenu">
                                    <div class="menutop">
                                        <div class="toggle">
                                            <div class="line_mn">
                                                <span class="icon-bar"></span> 
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End mobile-menu -->
                            <?php include("chuc_nang/gio_hang/vung_gio_hang.php"); ?>
        </div>

    </div>
    
</div>
</header>
<?php 

        


        echo "<div class='menu'>";
                echo "<div class='logo'>";
                    echo "<a class='nf' title='Mew Food' href=''>";
                       echo"<span>NewFood</span>";
                    echo "</a> ";
                echo "</div>";
                echo "<nav>";
                    echo "<div class='nav-inner clearfix'>";
                        echo "<ul id='nav' class=' nav_main'>";
                             echo "<li class='level0 parent active_menu'><a  style='color: #fff;background: #18d864;border-radius: 5px;' href='index.php' title='Trang ch???'><span>Trang ch???</span></a></li>";
      $tv="select id,ten,loai_menu from menu_ngang order by id";
	$tv_1=mysqli_query($connect,$tv);
                             while($tv_2=mysqli_fetch_array($tv_1))
	{
		if($tv_2['loai_menu']==""){$link_menu="?thamso=xuat_mot_tin&id=".$tv_2['id'];}
		if($tv_2['loai_menu']=="san_pham"){$link_menu="?thamso=xuat_san_pham_2";}
                    echo "<li class='level0 parent'>";
                       echo"<a  href='$link_menu'>";
                           echo"<span>";
                               echo $tv_2['ten']; 
                           echo"</span>";
                       echo"</a>";
                       if($tv_2['loai_menu']=="san_pham"){
                           ?>
                               <div class="level0-wrapper dropdown-6col" >
                                    <div class="level0-wrapper2">
                                        <div class="nav-block nav-block-center">
                                            <ul class="level0">	   
                                                <li class="level1 parent item" style="height: 120px"> <a href="/Shop_guiter/demo.php" title="Dinh d?????ng"><span>Dinh d?????ng</span></a> 
                                                    <ul class="level1">

                                                        <li class="level2"><a href="/Shop_guiter/demo.php" title="Ph???"><span>Ph???</span></a> </li>

                                                        <li class="level2"><a href="/Shop_guiter/demo.php" title="B??nh m??"><span>B??nh m??</span></a> </li>

                                                        <li class="level2"><a href="/Shop_guiter/demo.php" title="C??m c?? ri"><span>C??m c?? ri</span></a> </li>

                                                    </ul>
                                                </li>



                                                <li class="level1 parent item"> <a href="/Shop_guiter/demo.php" title="Kh??ng Gluten"><span>Kh??ng Gluten</span></a> 
                                                    <ul class="level1">

                                                        <li class="level2"><a href="/Shop_guiter/demo.php" title="Salads"><span>Salads</span></a> </li>

                                                        <li class="level2"><a href="/Shop_guiter/demo.php" title="M?? x??o"><span>M?? x??o</span></a> </li>

                                                        <li class="level2"><a href="/Shop_guiter/demo.php" title="Tr??ng mi???ng"><span>Tr??ng mi???ng</span></a> </li>

                                                    </ul>
                                                </li>



                                                <li class="level1 item"> <a href="/Shop_guiter/demo.php" title="Allergens"><span>Allergens</span></a> 



                                                </li><li class="level1 item"> <a href="/Shop_guiter/demo.php" title="Th???c ????n chay"><span>Th???c ????n chay</span></a> 


                                                </li></ul>
                                            <div class="banner_mega">
                                                <img alt="Mew Food" class="lazyload loaded" src="hinh_anh/menu/bn_mg.jpg" data-src="bn_mg.jpg" data-was-processed="true">
                                            </div>
                                        </div>
                                     </div>
                                    </div>
                               <?php
                       }
                    echo"</li>";
		
	}
                          	
              echo"</div>";
              echo "</nav>";
              echo"<div class='search_cart'>";
              include("chuc_nang/gio_hang/vung_gio_hang.php");
              include("chuc_nang/tim_kiem/vung_tim_kiem.php"); 
              
              echo"</div>";
              
echo"</div>";  
include("chuc_nang/gio_hang/vung_phone.php");
echo"<a href='#' id='toTop' style='display: block;'><span id='toTopHover' style='opacity: 0;'></span><span id='toTopHover' style='opacity: 0;'></span></a>";
 echo"</div>";
              
                                 ?>
                                    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
        <script type="text/javascript">
            $(document).on('click', 'ul.nav_main li', function(){
                $(this).addClass('active_menu').siblings().removeClass('active_menu')
           
            })
            </script>
