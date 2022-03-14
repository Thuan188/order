
	
    
   
     <div class="search-box search">
                        <div id="op_seach" class="open_search">

                            <img src="../banhang/chuc_nang/tim_kiem/seach_img_web.png" alt="Mew Food">
                        </div>
         <form id="search_mini_form" class="ops"  action="" method="get" >
                            <input type="hidden" name="thamso" value="tim_kiem" class="form-control" name="type" >
                            <input type="text" name="tu_khoa" class="change_pl" placeholder="Tìm kiếm..." value="" maxlength="70"  id="search">
                            <button class="btn btn-default  search-btn-bg"> <img src="../banhang/chuc_nang/tim_kiem/seach_img_web.png" alt="Mew Food"></button>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                    <script>
 document.getElementById('op_seach').onclick = function(){
//                   document.getElementById("popup-cart").classList.add('MyClass');
                   
                       document.getElementById("search_mini_form").classList.toggle('seachvisble');
                   
                   
 
                            
               }</script>
<!--             <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
        <script type="text/javascript">
            $(document).on('click', 'op_seach', function(){
                $(this).addClass('seachvisble').siblings().removeClass('active')
           
            })
            </script>     -->

