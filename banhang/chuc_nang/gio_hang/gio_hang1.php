 <?php
 if(isset($_GET['id']) and $_SESSION['trang_chi_tiet_gio_hang']=="co")
	{
		$_SESSION['trang_chi_tiet_gio_hang']="huy_bo";
		if(isset($_SESSION['id_them_vao_gio']))
		{
			$so=count($_SESSION['id_them_vao_gio']);
			$trung_lap="khong";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				if($_SESSION['id_them_vao_gio'][$i]==$_GET['id'])
				{
					$trung_lap="co";
					$vi_tri_trung_lap=$i;
					break;
				}
			}
			if($trung_lap=="khong")
			{
				$_SESSION['id_them_vao_gio'][$so]=$_GET['id'];
				$_SESSION['sl_them_vao_gio'][$so]=$_GET['so_luong'];
			}
			if($trung_lap=="co")
			{
				$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['so_luong'];
			}
		}
		else
		{
			$_SESSION['id_them_vao_gio'][0]=$_GET['id'];
			$_SESSION['sl_them_vao_gio'][0]=$_GET['so_luong'];
		}
	}
       
        if(isset($_GET['id']) and $_SESSION['them_gio_hang']=="co" )
	{   
            
		$_SESSION['them_gio_hang']="huy_bo";
		if(isset($_SESSION['id_them_vao_gio']))
		{
			$so=count($_SESSION['id_them_vao_gio']);
			$trung_lap="khong";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				if($_SESSION['id_them_vao_gio'][$i]==$_GET['id'])
				{
					$trung_lap="co";
					$vi_tri_trung_lap=$i;
					break;
				}
			}
			if($trung_lap=="khong")
			{
				$_SESSION['id_them_vao_gio'][$so]=$_GET['id'];
				$_SESSION['sl_them_vao_gio'][$so]=$_GET['so_luong'];
			}
			if($trung_lap=="co")
			{
				$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['so_luong'];
			}
		}
		else
		{
			$_SESSION['id_them_vao_gio'][0]=$_GET['id'];
			$_SESSION['sl_them_vao_gio'][0]=$_GET['so_luong'];
		}
               
                   
               
                   
                
	} 
	$gio_hang="khong";
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$so_luong=0;
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
		}
		if($so_luong!=0)
		{
			$gio_hang="co";
		}
	}
        

	$tong_cong=0;    
        $tong_cong1=0;
  ?>



<!DOCTYPE html>
<!-- saved from url=(0069)https://mew-food.mysapo.net/checkout/ee667f95d9f545518f3cbecbaf725f40 -->
<html class="floating-labels" >
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Mew Food - Thanh to??n ????n h??ng">
        <title>Mew Food - Thanh to??n ????n h??ng</title> 
         <link rel="shortcut icon" href="https://bizweb.dktcdn.net/assets/sapo_favicon.png" type="image/x-icon"> 
        <link href="./select2-v4.1.0.min.css" rel="stylesheet">
         <link href="/DEMO_WEB_ORDER/banhang/chuc_nang/gio_hang/fontawesome.min.css" rel="stylesheet"> 

        <link rel="stylesheet" href="/DEMO_WEB_ORDER/banhang/chuc_nang/gio_hang/checkout.min1.css">

        <style>
           
            .displ_1{
                position: absolute;
                left: 0;
                z-index: -1;
                
            }
            td, th {
     border: #bdbdbd solid 0px; 
     background: #fff; 
}
        </style>
        <script src="/DEMO_WEB_ORDER/banhang/chuc_nang/gio_hang/jquery-1.12.4.min.js.t???i xu???ng"></script>
        <script src="/DEMO_WEB_ORDER/banhang/chuc_nang/gio_hang/select2-v4.1.0.min.js.t???i xu???ng"></script>
        <script src="/DEMO_WEB_ORDER/banhang/chuc_nang/gio_hang/turbograft.min.js.t???i xu???ng"></script>
        <script src="/DEMO_WEB_ORDER/banhang/chuc_nang/gio_hang/twine.min.js.t???i xu???ng"></script>

        <script src="/DEMO_WEB_ORDER/banhang/chuc_nang/gio_hang/checkout.min.js.t???i xu???ng"></script>

 <script>
        var Bizweb = Bizweb || {};
        Bizweb.Checkout = {};
        Bizweb.Checkout.token = "ee667f95d9f545518f3cbecbaf725f40"
        Bizweb.Checkout.apiHost = "mew-food.mysapo.net"
</script>

<script>
        window.BizwebAnalytics = window.BizwebAnalytics || {};
        window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
        window.BizwebAnalytics.meta.currency = 'VND';
        var meta = {};
        for (var attr in meta) {
                window.BizwebAnalytics.meta[attr] = meta[attr];
        }
</script> 

    </head>
    <body  data-no-turbolink>
        <div  >
        <header class="banner">
            <div class="wrap">
                <div class="logo logo--left ">

                    <h1 class="shop__name">
                        <a href="">
                            New Food
                        </a>
                    </h1>
                </div>
            </div>
        </header>
        <aside>
            <button class="order-summary-toggle" data-toggle="#order-summary" data-toggle-class="order-summary--is-collapsed">
                <span class="wrap">
                    <span class="order-summary-toggle__inner">
                        <span class="order-summary-toggle__text expandable">
                            ????n h??ng (2 s???n ph???m)
                        </span>
                        <span class="order-summary-toggle__total-recap" data-bind="getTextTotalPrice()">210.000???</span>
                    </span>
                </span>
            </button>
        </aside>
        <div class="content">
            <form  id="checkoutForm" method="post" action=""   >
                <input type="hidden" name="_method" value="patch">
                <div class="wrap">
                    <main class="main">
                        <header class="main__header">
                            <div class="logo logo--left ">

                                <h1 class="shop__name">
                                    <a href="">
                                        New Food
                                    </a>
                                </h1>

                            </div>

                        </header>
                        <?php 

                       

                        if(isset($_SESSION['id_them_vao_gio']))
	{
                        if (isset($_SESSION['user_id'])) {
                            $user_id = intval($_SESSION['user_id']);
                            $tv = "SELECT * FROM members WHERE id= '$user_id'";
                            $sql_query = mysqli_query($connect, $tv);

                            $member = mysqli_fetch_array($sql_query);
                            $ten_nguoi_mua = $member['Name'];
                            $dien_thoai = $member['dienthoai'];
                            $dia_chi = $member['URLS'];
                            $email = $member['email'];
                            $noi_dung = "ch??a duy???t";
//                            $sl = trim($_POST['so_luong']);
//                            $tong_tien = trim($_POST['tong_tien']);
                           
                        } else {
                               
                            $noi_dung = "ch??a duy???t";
//                            $sl = trim($_POST['so_luong']);
//                            $tong_tien = trim($_POST['tong_tien']);
                           
                        }
                        }
                        ?>
                        <div class="main__content">
                            <article class="animate-floating-labels row">
                                <div class="col col--two">
                                    <section class="section">
                                        <div class="section__header">
                                            <div class="layout-flex">
                                                <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                                    <i class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i> Th??ng tin nh???n h??ng
                                                </h2>
                                                <?php if (isset($_SESSION['user_id'])) { ?>
                                                <a href="?thamso=thoat">
												<i class="fa fa-sign-out fa-lg"></i>
												<span>????ng xu???t</span>
											</a> 
                                                        
                                                <?php }else{ ?> 
                                                <a href="?thamso=dang_nhap">
                                                    <i class="fa fa-user-circle-o fa-lg"></i>
                                                    <span>????ng nh???p </span>
                                                </a>
                                                        
                                              <?php  } ?>
                                            </div>
                                        </div>
                                        <div class="section__content">
                                            <div class="fieldset">
                                                <div class="field  field--show-floating-label" data-bind-class="{&#39;field--show-floating-label&#39;: email}">
                                                    <div class="field__input-wrapper">
                                                        <label for="email" class="field__label">
                                                            Email
                                                        </label>
                                                        <input name="email" id="email" type="email" class="field__input"  value="<?php if (isset($_SESSION['user_id'])) { echo $email;}?>">
                                                    </div>

                                                </div>
                                                <div class="field  field--show-floating-label" data-bind-class="{&#39;field--show-floating-label&#39;: billing.name}">
                                                    <div class="field__input-wrapper">
                                                        <label for="billingName" class="field__label">H??? v?? t??n</label>
                                                        <input name="ten_nguoi_dung" id="billingName" type="text" class="field__input" data-bind="billing.name" value="<?php if (isset($_SESSION['user_id'])) { echo $ten_nguoi_mua;}?>">
                                                    </div>
                                                </div>

                                                <div class="field " data-bind-class="{&#39;field--show-floating-label&#39;: billing.phone}">
                                                    <div class="field__input-wrapper">
                                                        <label for="billingPhone" class="field__label">
                                                       
                                                             
                                                        </label>
                                                        <input name="dien_thoai" placeholder="<?php if (isset($_SESSION['user_id'])) {  }else{ echo 'S??? ??i???n tho???i (t??y ch???n)'; } ?>" 
                                                               id="billingPhone" type="tel" class="field__input" data-bind="billing.phone" value="<?php if (isset($_SESSION['user_id'])) { echo $dien_thoai;}?>">
                                                    </div>
                                                </div>
                                                <div class="field " data-bind-class="{&#39;field--show-floating-label&#39;: billing.address}">
                                                    <div class="field__input-wrapper">
                                                        <label for="billingAddress" class="field__label" title="" >
                                                            
                                                            
                                                        </label>
                                                        <input placeholder="<?php    if (isset($_SESSION['user_id'])) {  }
                                                            else{ echo '?????a ch??? (t??y ch???n)'; } ?>" name="url" id="billingAddress" type="text" class="field__input" data-bind="billing.address" value="<?php if (isset($_SESSION['user_id'])) { echo $dia_chi;}?>">
                                                    </div>

                                                </div>
   <div class="field field--show-floating-label ">
                                                    <div class="field__input-wrapper field__input-wrapper--select2">
                                                        <label for="billingProvince" class="field__label">T???nh th??nh</label>
                                                        <select name="billingProvince" id="billingProvince" size="1" type="text" class="field__input field__input--select select2-hidden-accessible" data-bind="billing.province" value="17" data-address-type="province" data-address-zone="billing" data-select2-id="select2-data-billingProvince" tabindex="-1" aria-hidden="true"><option value="17" selected="" data-select2-id="select2-data-4-70f0">???? N???ng</option></select>
                                                        <span class="select2 select2-container select2-container--default displ_1" dir="ltr" data-select2-id="select2-data-1-u5ig" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-billingProvince-container"><span class="select2-selection__rendered" id="select2-billingProvince-container" role="textbox" aria-readonly="true" title="???? N???ng">???? N???ng</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>

                                                </div>

                                                <div class="field field--show-floating-label ">
                                                    <div class="field__input-wrapper field__input-wrapper--select2">
                                                        <label for="billingDistrict" class="field__label">
                                                            Qu???n huy???n (t??y ch???n)
                                                        </label>
                                                        <select name="billingDistrict" id="billingDistrict" size="1" type="text" class="field__input field__input--select select2-hidden-accessible" value="" data-bind="billing.district" data-address-type="district" data-address-zone="billing" data-select2-id="select2-data-billingDistrict" tabindex="-1" aria-hidden="true"><option value="" hidden="" data-select2-id="select2-data-5-6eea">---</option><option value="184">Qu???n H???i Ch??u</option><option value="185">Qu???n Thanh Kh??</option><option value="186">Qu???n S??n Tr??</option><option value="187">Qu???n Ng?? H??nh S??n</option><option value="188">Qu???n Li??n Chi???u</option><option value="189">Qu???n C???m L???</option><option value="190">Huy???n H??a Vang</option><option value="191">Huy???n ?????o Ho??ng Sa</option>
                                                        </select>
                                                        <span class="select2 select2-container select2-container--default displ_1" dir="ltr" data-select2-id="select2-data-3-b8fy" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-billingDistrict-container"><span class="select2-selection__rendered" id="select2-billingDistrict-container" role="textbox" aria-readonly="true" title="---">---</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </section>

                                    <div class="fieldset">
                                        <h3 class="visually-hidden">Ghi ch??</h3>
                                        <div class="field " data-bind-class="{&#39;field--show-floating-label&#39;: note}">
                                            <div class="field__input-wrapper">
                                                <label for="note" class="field__label">
                                                    Ghi ch?? (t??y ch???n)
                                                </label>
                                                <textarea name="note" id="note" type="text" class="field__input" data-bind="note"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col col--two">

                                    <section class="section">
                                        <div class="section__header">
                                            <div class="layout-flex">
                                                <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                                    <i class="fa fa-truck fa-lg section__title--icon hide-on-desktop"></i>
                                                    V???n chuy???n
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="section__content" data-tg-refresh="refreshShipping" id="shippingMethodList" data-define="{isAddressSelecting: false, shippingMethods: []}">
                                            <div class="alert alert--loader spinner spinner--active hide" data-bind-show="isLoadingShippingMethod">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                                <use href="#spinner"></use>
                                                </svg>
                                            </div>


                                            <div class="alert alert-retry alert--danger hide" data-bind-event-click="handleShippingMethodErrorRetry()" data-bind-show="!isLoadingShippingMethod &amp;&amp; !isAddressSelecting &amp;&amp; isLoadingShippingError">
                                                <span data-bind="loadingShippingErrorMessage">Kh??ng th??? load ph?? v???n chuy???n. Vui l??ng th??? l???i</span> <i class="fa fa-refresh"></i>
                                            </div>

                                            <div class="content-box">
                                                <div class="content-box__row" data-define-array="{shippingMethods: {name: &#39;478155_0,40.000 VND&#39;, textPrice: &#39;40.000???&#39;, subtotalPriceWithShippingFee: &#39;210.000???&#39;}}">
                                                    <div class="radio-wrapper">
                                                        <div class="radio__input">
                                                            <input type="radio" class="input-radio" name="shippingMethod" id="shippingMethod-478155_0" value="478155_0,40.000 VND" data-bind="shippingMethod">
                                                        </div>
                                                        <label for="shippingMethod-478155_0" class="radio__label">
                                                            <span class="radio__label__primary">Giao h??ng t???n n??i</span>
                                                            <span class="radio__label__accessory">
                                                                <span class="content-box__emphasis">
                                                                    40.000???
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="alert alert--info hide" data-bind-show="!isLoadingShippingMethod &amp;&amp; isAddressSelecting">
                                                Vui l??ng nh???p th??ng tin giao h??ng
                                            </div>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <div class="section__header">
                                            <div class="layout-flex">
                                                <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                                    <i class="fa fa-credit-card fa-lg section__title--icon hide-on-desktop"></i>
                                                    Thanh to??n
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="section__content">

                                            <div class="content-box">






                                                <div class="content-box__row">
                                                    <div class="radio-wrapper">
                                                        <div class="radio__input">
                                                            <input name="paymentMethod" id="paymentMethod-406268" type="radio" class="input-radio" data-bind="paymentMethod" value="406268" checked="">
                                                        </div>
                                                        <label for="paymentMethod-406268" class="radio__label">
                                                            <span class="radio__label__primary">Thanh to??n khi giao h??ng (COD)</span>
                                                            <span class="radio__label__accessory">
                                                                <span class="radio__label__icon">
                                                                    <i class="payment-icon payment-icon--4"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="content-box__row__desc" data-bind-show="paymentMethod == 406268">
                                                        <p>B???n ch??? ph???i thanh to??n khi nh???n ???????c h??ng</p>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </article>
                            <div class="field__input-btn-wrapper field__input-btn-wrapper--vertical hide-on-desktop">
                                <button type="submit" class="btn btn-checkout spinner" data-bind-class="{&#39;spinner--active&#39;: isSubmitingCheckout}" data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
                                    <span class="spinner-label">?????T H??NG</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                    <use href="#spinner"></use>
                                    </svg>
                                </button>

                                <a href="" class="previous-link">
                                    <i class="previous-link__arrow">???</i>
                                    <span class="previous-link__content">Quay v??? gi??? h??ng</span>
                                </a>

                            </div>

                            <div id="common-alert" data-tg-refresh="refreshError">


                                <div class="alert alert--danger hide-on-desktop hide" data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError" data-bind="submitingCheckoutErrorMessage">C?? l???i x???y ra khi x??? l??. Vui l??ng th??? l???i</div>
                            </div>
                        </div>






                    </main>

                    <aside class="sidebar">
                        <div class="sidebar__header">
                            <h2 class="sidebar__title">
               <?php          
               $sl=0;
               for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
                            
                                $sl=$sl+intval($_SESSION['sl_them_vao_gio'][$i]);
                                
                                }?>
                                ????n h??ng (<?php echo $sl;?> s???n ph???m)
                            </h2>
                        </div>
                        <div class="sidebar__content">
                            <div id="order-summary" class="order-summary order-summary--is-collapsed">
                                <div class="order-summary__sections">
                                    <div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
                                        <table class="product-table">
                                            <caption class="visually-hidden">Chi ti???t ????n h??ng</caption>
                                            <thead class="product-table__header">
                                                <tr>
                                                    <th>
                                                        <span class="visually-hidden">???nh s???n ph???m</span>
                                                    </th>
                                                    <th>
                                                        <span class="visually-hidden">M?? t???</span>
                                                    </th>
                                                    <th>
                                                        <span class="visually-hidden">S??? l?????ng</span>
                                                    </th>
                                                    <th>
                                                        <span class="visually-hidden">????n gi??</span>
                                                    </th>
                                                </tr>
                                            </thead> 
                                              <?php
                        echo "<form action='' method='post' >"; 
                        echo "<input type='hidden' name='cap_nhat_gio_hang' value='co' > ";
                        
			
			
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
			
				$tv="select id,ten,gia,hinh_anh from san_pham where id='".$_SESSION['id_them_vao_gio'][$i]."'";
				$tv_1=mysqli_query($connect,$tv);
				$tv_2=mysqli_fetch_array($tv_1);
				$link_anh = "hinh_anh/san_pham/" . $tv_2['hinh_anh'];
                                $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
				$tien=$tv_2['gia']*$_SESSION['sl_them_vao_gio'][$i];
				$tong_cong=$tong_cong+$tien;
				$name_id="id_".$i;
				$name_sl="sl_".$i;
				$name_ch ="ch_".$i;
                                
				if($_SESSION['sl_them_vao_gio'][$i]!=0)
				{
                                    ?>

				<tbody>
                                           
                                               <?php echo "<input type='hidden' name='".$name_id."' value='".$_SESSION['id_them_vao_gio'][$i]."' >";
                                        echo "<input type='hidden' style='width:50px' name='".$name_sl."' value='". $_SESSION['sl_them_vao_gio'][$i]."' > ";?>
                                                <tr class="product">
                                                    <td class="product__image">
                                                        <div class="product-thumbnail">
                                                            <div class="product-thumbnail__wrapper" data-tg-static="">

                                                                <img src="<?php echo $link_anh;?>" alt="" class="product-thumbnail__image">

                                                            </div>
                                                            <span class="product-thumbnail__quantity"><?php echo $_SESSION['sl_them_vao_gio'][$i]; ?></span>
                                                        </div>
                                                    </td>
                                                    <th class="product__description">
                                                        <span class="product__description__name">
                                                            <?php echo $tv_2['ten'] ;?>
                                                        </span>


                                                    </th>
                                                    <td class="product__quantity visually-hidden"><em>S??? l?????ng:</em> <?php echo $_SESSION['sl_them_vao_gio'][$i]; ?></td>
                                                    <td class="product__price">
                                                        <?php echo $tien ;?> ??
                                                    </td>
                                                </tr>
</tbody>
<?php
				if(isset($hang_duoc_mua1))
				{
				$hang_duoc_mua1=$hang_duoc_mua1.$_SESSION['id_them_vao_gio'][$i]."[|||]".$_SESSION['sl_them_vao_gio'][$i]."[|||||]";
				}
				}
			}	
                       
		
		
                    ?>

                                            
                                        </table>
                                    </div>
                                    <div class="order-summary__section order-summary__section--discount-code" data-tg-refresh="refreshDiscount" id="discountCode">
                                        <h3 class="visually-hidden">M?? khuy???n m???i</h3>
                                        <div class="edit_checkout animate-floating-labels">
                                            <div class="fieldset">
                                                <div class="field  ">
                                                    <div class="field__input-btn-wrapper">
                                                        <div class="field__input-wrapper">
                                                            <label for="reductionCode" class="field__label">Nh???p m?? gi???m gi??</label>
                                                            <input name="reductionCode" id="reductionCode" type="text" class="field__input" autocomplete="off" data-bind-disabled="isLoadingReductionCode" data-bind-event-keypress="handleReductionCodeKeyPress(event)" data-define="{reductionCode: null}" data-bind="reductionCode">
                                                        </div>
                                                        <button class="field__input-btn btn spinner btn--disabled" type="button" data-bind-disabled="isLoadingReductionCode || !reductionCode" data-bind-class="{&#39;spinner--active&#39;: isLoadingReductionCode, &#39;btn--disabled&#39;: !reductionCode}" data-bind-event-click="applyReductionCode()" disabled="">
                                                            <span class="spinner-label">??p d???ng</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                                            <use href="#spinner"></use>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <p class="field__message field__message--error field__message--error-always-show hide" data-bind-show="!isLoadingReductionCode &amp;&amp; isLoadingReductionCodeError" data-bind="loadingReductionCodeErrorMessage">C?? l???i x???y ra khi ??p d???ng khuy???n m??i. Vui l??ng th??? l???i</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-summary__section order-summary__section--total-lines order-summary--collapse-element" data-define="{subTotalPriceText: &#39;170.000???&#39;}" data-tg-refresh="refreshOrderTotalPrice" id="orderSummary">
                                        <table class="total-line-table">
                                            <caption class="visually-hidden">T???ng gi?? tr???</caption>
                                            <thead>
                                                <tr>
                                                    <td><span class="visually-hidden">M?? t???</span></td>
                                                    <td><span class="visually-hidden">Gi?? ti???n</span></td>
                                                </tr>
                                            </thead>
                                            <tbody class="total-line-table__tbody">
                                                <tr class="total-line total-line--subtotal">
                                                    <th class="total-line__name">
                                                        T???m t??nh
                                                    </th>
                                                    <td class="total-line__price"><?php echo $tong_cong;?>???</td>
                                                </tr>

                                                <tr class="total-line total-line--shipping-fee">
                                                    <th class="total-line__name">
                                                        Ph?? v???n chuy???n
                                                    </th>
                                                    <td class="total-line__price" >40.000???</td>
                                                </tr>

                                            </tbody>
                                            <tfoot class="total-line-table__footer">
                                                <tr class="total-line payment-due">
                                                    <th class="total-line__name">
                                                        <span class="payment-due__label-total">
                                                            T???ng c???ng
                                                        </span>
                                                    </th>
                                                    <td class="total-line__price">
                                                        <span class="payment-due__price" ><?php $tong_cong1=$tong_cong+40000; echo $tong_cong1 ;?>???</span>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <?php //}
                                     echo "<input type='hidden' name='thong_tin_khach_hang' value='co' > ";
                                     echo "<input type='hidden' name='so_luong' value='$sl' > ";
                echo "<input type='hidden' name='tong_tien' value='$tong_cong1' > ";
                                    ?>
                                    <div class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
                                        
<!--                                        <button type="submit"  >
                                            <span class="spinner-label">?????T H??NG</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                            <use href=""></use>
                                            </svg>
                                        </button>-->
                                        <input class="btn btn-checkout spinner" type='submit' value='?????t h??ng' >

                                        <a href="/DEMO_WEB_ORDER/banhang/index.php?thamso=gio_hang"  class="previous-link">
                                            <i class="previous-link__arrow">???</i>
                                            <span class="previous-link__content">Quay v??? gi??? h??ng</span>
                                        </a>

                                    </div>

                                    <div id="common-alert-sidebar" data-tg-refresh="refreshError">


                                        <div class="alert alert--danger hide-on-mobile hide" data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError" data-bind="submitingCheckoutErrorMessage">C?? l???i x???y ra khi x??? l??. Vui l??ng th??? l???i</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>

            </form>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="spinner">
                <svg viewBox="0 0 30 30">
                <circle stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-dasharray="85%" cx="50%" cy="50%" r="40%">
                <animatetransform attributeName="transform" type="rotate" from="0 15 15" to="360 15 15" dur="0.7s" repeatCount="indefinite"></animatetransform>
                </circle>
                </svg>
            </symbol>
            </svg>
        </div>
</div>
    </body></html>