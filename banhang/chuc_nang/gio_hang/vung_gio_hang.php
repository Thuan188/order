

<?php 
	$so_luong=0;
	if(isset($_SESSION['id_them_vao_gio']))
	{
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
		}
	}
?>





                    <div class="search-box mini-cart">
                        <div class="basket dropdown-toggle">
                            <a href="?thamso=gio_hang" title="Giỏ hàng"> 

                                <img src="../banhang/chuc_nang/gio_hang/cart_img_web.png" alt="Mew Food">
                                <div class="cart-box">
                                    <span id="cart-total">
                                        <b class="count_item_pr"><?php
                               
                                    echo $so_luong ;
                                
                                 ?></b>
                                    </span>
                                </div>
                            </a>
                        </div>
                                                                      
                                <?php
                                    include("chuc_nang/gio_hang/gio_hang2.php");
                                    
                                
                                 ?>
                           
                    </div>
<script>
document.getElementById('oclgh').onclick = function(){
//                   document.getElementById("popup-cart").classList.add('MyClass');
                   if ( document.getElementById("popup-cart").classList.contains('popcart') ){
//                       document.getElementById("img1").classList.add('MyClass');
                       document.getElementById("popup-cart").classList.toggle('opencart');
                   }
                   
 
                            
               }
</script>