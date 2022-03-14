<?php
if (isset($_GET['id']) and $_SESSION['trang_chi_tiet_gio_hang'] == "co") {
    $_SESSION['trang_chi_tiet_gio_hang'] = "huy_bo";
    if (isset($_SESSION['id_them_vao_gio'])) {
        $so = count($_SESSION['id_them_vao_gio']);
        $trung_lap = "khong";
        for ($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++) {
            if ($_SESSION['id_them_vao_gio'][$i] == $_GET['id']) {
                $trung_lap = "co";
                $vi_tri_trung_lap = $i;
                break;
            }
        }
        if ($trung_lap == "khong") {
            $_SESSION['id_them_vao_gio'][$so] = $_GET['id'];
            $_SESSION['sl_them_vao_gio'][$so] = $_GET['so_luong'];
        }
        if ($trung_lap == "co") {
            $_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap] = $_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap] + $_GET['so_luong'];
        }
    } else {
        $_SESSION['id_them_vao_gio'][0] = $_GET['id'];
        $_SESSION['sl_them_vao_gio'][0] = $_GET['so_luong'];
    }
}

if (isset($_GET['id']) and $_SESSION['them_gio_hang'] == "co") {

    $_SESSION['them_gio_hang'] = "huy_bo";
    if (isset($_SESSION['id_them_vao_gio'])) {
        $so = count($_SESSION['id_them_vao_gio']);
        $trung_lap = "khong";
        for ($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++) {
            if ($_SESSION['id_them_vao_gio'][$i] == $_GET['id']) {
                $trung_lap = "co";
                $vi_tri_trung_lap = $i;
                break;
            }
        }
        if ($trung_lap == "khong") {
            $_SESSION['id_them_vao_gio'][$so] = $_GET['id'];
            $_SESSION['sl_them_vao_gio'][$so] = $_GET['so_luong'];
        }
        if ($trung_lap == "co") {
            $_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap] = $_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap] + $_GET['so_luong'];
        }
    } else {
        $_SESSION['id_them_vao_gio'][0] = $_GET['id'];
        $_SESSION['sl_them_vao_gio'][0] = $_GET['so_luong'];
    }
}
$gio_hang = "khong";
if (isset($_SESSION['id_them_vao_gio'])) {
    $so_luong = 0;
    for ($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++) {
        $so_luong = $so_luong + $_SESSION['sl_them_vao_gio'][$i];
    }
    if ($so_luong != 0) {
        $gio_hang = "co";
    }
}


$tong_cong = 0;
?>


<?php
if ($gio_hang == "khong") {
    
    ?>
 <div style="" class="top-cart-content arrow_box">                                                   
     <ul id="cart-sidebar" class="mini-products-list">
    <h5>Không có món ăn trong giỏ hàng</h5>
            <div class="tbody-popup scrollbar-dynamic"></div>
            <div class="tfoot-popup section">
                <div class="section footer-popup">

                    <div class="tfoot-popup-1 f-right inline-block ">
                        <span class="total-p popup-total block">Thành tiền: <span class="total-price"><?php echo $tong_cong . " VNĐ"; ?></span></span>




                    </div>
                </div>
                </div>
         </ul>   
      </div>
     
        <?php
    } else {
        ?> 
<div> 
    <div style="" class="top-cart-content arrow_box">                                                   
                <ul id="cart-sidebar" class="mini-products-list"><ul class="list-item-cart">
    <?php
    echo "<form action='' method='post' >";
    echo "<input type='hidden' name='cap_nhat_gio_hang' value='co' /> ";



    for ($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++) {

        $tv = "select id,ten,gia,hinh_anh from san_pham where id='" . $_SESSION['id_them_vao_gio'][$i] . "'";
        $tv_1 = mysqli_query($connect, $tv);
        $tv_2 = mysqli_fetch_array($tv_1);
        $link_anh = "hinh_anh/san_pham/".$tv_2['hinh_anh'];
        $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
        $tien = $tv_2['gia'] * $_SESSION['sl_them_vao_gio'][$i];
        $tong_cong = $tong_cong + $tien;
        $name_id = "id_" . $i;
        $name_sl = "sl_" . $i;
        $name_ch = "ch_" . $i;
        if ($_SESSION['sl_them_vao_gio'][$i] != 0) {
            ?>
           
                        <li class="item productid-36479808">
                            <div class="border_list"><div class="image_drop">
                                    <a class="product-image" href="<?php echo $link_chi_tiet; ?>" title="<?php echo $tv_2['ten']; ?>">
                                        <img alt="<?php echo $tv_2['ten']; ?>" src="<?php echo $link_anh; ?>" >
                                    </a>
                                </div>
                                <div class="detail-item">
                                    <div class="product-details">
                                        <input style="position: relative; top:20px; left: 110px;" type="checkbox" name="<?php echo $name_ch;?>" value="<?php echo $i;?>" >
                <span>
                    <input type="submit" value="" style="position: relative; top:20px; left: 110px; background-image: url('http://bizweb.dktcdn.net/100/341/555/themes/786825/assets/error.png?1608568857115'); background-color: #fff; height: 12px; width: 12px; background-position: center;background-repeat: no-repeat;background-size: cover; " >
                    
                </span>
                                        <p class="product-name"> <a href="<?php echo $link_chi_tiet; ?>" title="<?php echo $tv_2['ten']; ?>"><?php echo $tv_2['ten']; ?></a></p></div>
                                    <div class="product-details-bottom"><span class="price"><?php echo $tv_2['gia']." VNĐ"; ?></span>
                                        <div class="quantity-select qty_drop_cart">

                                            <input class="variantID" type="hidden" name="<?php echo $name_id; ?>" value="<?php echo $_SESSION['id_them_vao_gio'][$i]; ?>">
                                            <button onclick="var result = document.getElementById('qty36479808'); var qty36479808 = result.value; if (!isNaN(qty36479808) & amp; & amp; qty36479808 > 1) result.value--; return false;" class=" btn_reduced reduced items-count btn-minus" disabled="" type="button">–</button>
                                            <input type="text" maxlength="3" min="1" readonly="" class="input-text number-sidebar qty36479808" id="qty36479808" name="<?php echo $name_sl; ?>" size="4" value="<?php echo $_SESSION['sl_them_vao_gio'][$i]; ?>">
                                            <button onclick="var result = document.getElementById('qty36479808'); var qty36479808 = result.value; if (!isNaN(qty36479808))
                                                        result.value++;
                                                    return false;" class=" btn_increase increase items-count btn-plus" type="button">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    
            <?php
            if (isset($hang_duoc_mua1)) {
                $hang_duoc_mua1 = $hang_duoc_mua1 . $_SESSION['id_them_vao_gio'][$i] . "[|||]" . $_SESSION['sl_them_vao_gio'][$i] . "[|||||]";
            }
        }
    }
    ?>                                                    
            <div class="pd"><div class="top-subtotal">Tổng cộng: <span class="price price_big"><?php echo $tong_cong . " VNĐ"; ?></span></div></div>
            <div class="pd right_ct">
                <a href="?thamso=gio_hang" class="btn btn-white"><span>Giỏ hàng</span></a>
                <a href="" class="btn btn-primary"><span>Thanh toán</span></a>
            </div>
               

</form>
     </ul></ul>
    </div>
</div>
     <?php
   
}
?>
<script>
    document.getElementById('ttmh').onclick = function () {
//                   document.getElementById("popup-cart").classList.add('MyClass');
        if (document.getElementById("popup-cart").classList.contains('popcart')) {
//                       document.getElementById("img1").classList.add('MyClass');
            document.getElementById("popup-cart").classList.toggle('opencart');
        }



    }</script>