<!DOCTYPE html>
<!-- saved from url=(0069)https://mew-food.mysapo.net/checkout/ee667f95d9f545518f3cbecbaf725f40 -->
<html class="floating-labels"><head>
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="Mew Food - Thanh toán đơn hàng">
	<title>Mew Food - Thanh toán đơn hàng</title> -->
	<!-- <link rel="shortcut icon" href="https://bizweb.dktcdn.net/assets/sapo_favicon.png" type="image/x-icon"> -->
	<link href="./select2-v4.1.0.min.css" rel="stylesheet">
	<!-- <link href="./fontawesome.min.css" rel="stylesheet"> -->
	
	<link rel="stylesheet" href="./checkout.min.css">
	
	<style>
		.displ_1{
			position: absolute;
    left: 0;
    z-index: -1;
		}
	</style>
	<script src="./jquery-1.12.4.min.js.tải xuống"></script>
	<script src="./select2-v4.1.0.min.js.tải xuống"></script>
	<script src="./turbograft.min.js.tải xuống"></script>
	<script src="./twine.min.js.tải xuống"></script>
	
	<script src="./checkout.min.js.tải xuống"></script>
	
	<!-- <script>
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
	</script> -->
	
	
	
	
</head>

<body data-no-turbolink="">
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
						Đơn hàng (2 sản phẩm)
					</span>
					<span class="order-summary-toggle__total-recap" data-bind="getTextTotalPrice()">210.000₫</span>
				</span>
			</span>
		</button>
	</aside>
	<div class="content">
		<form data-tg-refresh="checkout" id="checkoutForm" method="post" data-define="{
				loadingShippingErrorMessage: &#39;Không thể load phí vận chuyển. Vui lòng thử lại&#39;,
				loadingReductionCodeErrorMessage: &#39;Có lỗi xảy ra khi áp dụng khuyến mãi. Vui lòng thử lại&#39;,
				submitingCheckoutErrorMessage: &#39;Có lỗi xảy ra khi xử lý. Vui lòng thử lại&#39;,
				requireShipping: true,
				requireDistrict: false,
				requireWard: false,
				shouldSaveCheckoutAbandon: false}" action="" data-bind-event-submit="handleCheckoutSubmit(event)" data-bind-event-keypress="handleCheckoutKeyPress(event)" data-bind-event-change="handleCheckoutChange(event)">
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
					<div class="main__content">
						<article class="animate-floating-labels row">
							<div class="col col--two">
								<section class="section">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>
												
												Thông tin nhận hàng
												
											</h2>
											
											
											<a href="">
												<i class="fa fa-user-circle-o fa-lg"></i>
												<span>Đăng nhập </span>
											</a>
											
											
										</div>
									</div>
									<div class="section__content">
										<div class="fieldset">
											

											
											
											<div class="field  field--show-floating-label" data-bind-class="{&#39;field--show-floating-label&#39;: email}">
												<div class="field__input-wrapper">
													<label for="email" class="field__label">
														Email
													</label>
													<input name="email" id="email" type="email" class="field__input" data-bind="email" value="nguyenquan52000@gmail.com">
												</div>
												
											</div>
											
											

											<div class="field  field--show-floating-label" data-bind-class="{&#39;field--show-floating-label&#39;: billing.name}">
												<div class="field__input-wrapper">
													<label for="billingName" class="field__label">Họ và tên</label>
													<input name="billingName" id="billingName" type="text" class="field__input" data-bind="billing.name" value="nguyen quan">
												</div>
												
											</div>
											
											<div class="field " data-bind-class="{&#39;field--show-floating-label&#39;: billing.phone}">
												<div class="field__input-wrapper">
													<label for="billingPhone" class="field__label">
														Số điện thoại (tùy chọn)
													</label>
													<input name="billingPhone" id="billingPhone" type="tel" class="field__input" data-bind="billing.phone" value="">
												</div>
												
											</div>
											
											
											<div class="field " data-bind-class="{&#39;field--show-floating-label&#39;: billing.address}">
												<div class="field__input-wrapper">
													<label for="billingAddress" class="field__label">
														Địa chỉ (tùy chọn)
													</label>
													<input name="billingAddress" id="billingAddress" type="text" class="field__input" data-bind="billing.address" value="">
												</div>
												
											</div>
											
											
											<div class="field field--show-floating-label ">
												<div class="field__input-wrapper field__input-wrapper--select2">
													<label for="billingProvince" class="field__label">Tỉnh thành</label>
													<select name="billingProvince" id="billingProvince" size="1" type="text" class="field__input field__input--select select2-hidden-accessible" data-bind="billing.province" value="17" data-address-type="province" data-address-zone="billing" data-select2-id="select2-data-billingProvince" tabindex="-1" aria-hidden="true"><option value="" hidden="">---</option><option value="1">Hà Nội</option><option value="2">TP Hồ Chí Minh</option><option value="3">An Giang</option><option value="4">Bà Rịa-Vũng Tàu</option><option value="5">Bắc Giang</option><option value="6">Bắc Kạn</option><option value="7">Bạc Liêu</option><option value="8">Bắc Ninh</option><option value="9">Bến Tre</option><option value="10">Bình Dương</option><option value="11">Bình Định</option><option value="12">Bình Phước</option><option value="13">Bình Thuận</option><option value="14">Cà Mau</option><option value="15">Cao Bằng</option><option value="16">Cần Thơ</option><option value="17" selected="" data-select2-id="select2-data-4-70f0">Đà Nẵng</option><option value="18">Đắk Lắk</option><option value="19">Đắk Nông</option><option value="20">Điện Biên</option><option value="21">Đồng Nai</option><option value="22">Đồng Tháp</option><option value="23">Gia Lai</option><option value="24">Hà Giang</option><option value="25">Hà Nam</option><option value="26">Hà Tĩnh</option><option value="27">Hải Dương</option><option value="28">Hải Phòng</option><option value="29">Hậu Giang</option><option value="30">Hòa Bình</option><option value="31">Hưng Yên</option><option value="32">Khánh Hòa</option><option value="33">Kiên Giang</option><option value="34">Kon Tum</option><option value="35">Lai Châu</option><option value="36">Lâm Đồng</option><option value="37">Lạng Sơn</option><option value="38">Lào Cai</option><option value="39">Long An</option><option value="40">Nam Định</option><option value="41">Nghệ An</option><option value="42">Ninh Bình</option><option value="43">Ninh Thuận</option><option value="44">Phú Thọ</option><option value="45">Phú Yên</option><option value="46">Quảng Bình</option><option value="47">Quảng Nam</option><option value="48">Quảng Ngãi</option><option value="49">Quảng Ninh</option><option value="50">Quảng Trị</option><option value="51">Sóc Trăng</option><option value="52">Sơn La</option><option value="53">Tây Ninh</option><option value="54">Thái Bình</option><option value="55">Thái Nguyên</option><option value="56">Thanh Hóa</option><option value="57">Thừa Thiên Huế</option><option value="58">Tiền Giang</option><option value="59">Trà Vinh</option><option value="60">Tuyên Quang</option><option value="61">Vĩnh Long</option><option value="62">Vĩnh Phúc</option><option value="63">Yên Bái</option>
													</select>
													<span class="select2 select2-container select2-container--default displ_1" dir="ltr" data-select2-id="select2-data-1-u5ig" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-billingProvince-container"><span class="select2-selection__rendered" id="select2-billingProvince-container" role="textbox" aria-readonly="true" title="Đà Nẵng">Đà Nẵng</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
												
											</div>
											
											<div class="field field--show-floating-label ">
												<div class="field__input-wrapper field__input-wrapper--select2">
													<label for="billingDistrict" class="field__label">
														Quận huyện (tùy chọn)
													</label>
													<select name="billingDistrict" id="billingDistrict" size="1" type="text" class="field__input field__input--select select2-hidden-accessible" value="" data-bind="billing.district" data-address-type="district" data-address-zone="billing" data-select2-id="select2-data-billingDistrict" tabindex="-1" aria-hidden="true"><option value="" hidden="" data-select2-id="select2-data-5-6eea">---</option><option value="184">Quận Hải Châu</option><option value="185">Quận Thanh Khê</option><option value="186">Quận Sơn Trà</option><option value="187">Quận Ngũ Hành Sơn</option><option value="188">Quận Liên Chiểu</option><option value="189">Quận Cẩm Lệ</option><option value="190">Huyện Hòa Vang</option><option value="191">Huyện đảo Hoàng Sa</option>
												</select>
												<span class="select2 select2-container select2-container--default displ_1" dir="ltr" data-select2-id="select2-data-3-b8fy" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-billingDistrict-container"><span class="select2-selection__rendered" id="select2-billingDistrict-container" role="textbox" aria-readonly="true" title="---">---</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
												
											</div>
											
											
											
											
										</div>
									</div>
								</section>
								
								<div class="fieldset">
									<h3 class="visually-hidden">Ghi chú</h3>
									<div class="field " data-bind-class="{&#39;field--show-floating-label&#39;: note}">
										<div class="field__input-wrapper">
											<label for="note" class="field__label">
												Ghi chú (tùy chọn)
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
												Vận chuyển
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
											<span data-bind="loadingShippingErrorMessage">Không thể load phí vận chuyển. Vui lòng thử lại</span> <i class="fa fa-refresh"></i>
										</div>

										

										
										
										
										
										
										
										<div class="content-box" data-bind-show="!isLoadingShippingMethod &amp;&amp; !isAddressSelecting &amp;&amp; !isLoadingShippingError" data-define="{shippingMethod: &#39;478155_0,40.000 VND&#39;}">

											
											
											
											
											
											<div class="content-box__row" data-define-array="{shippingMethods: {name: &#39;478155_0,40.000 VND&#39;, textPrice: &#39;40.000₫&#39;, subtotalPriceWithShippingFee: &#39;210.000₫&#39;}}">
												<div class="radio-wrapper">
													<div class="radio__input">
														<input type="radio" class="input-radio" name="shippingMethod" id="shippingMethod-478155_0" value="478155_0,40.000 VND" data-bind="shippingMethod">
													</div>
													<label for="shippingMethod-478155_0" class="radio__label">
														<span class="radio__label__primary">Giao hàng tận nơi</span>
														<span class="radio__label__accessory">
															<span class="content-box__emphasis">
																40.000₫
															</span>
														</span>
													</label>
												</div>
											</div>
											
										</div>
										
										<div class="alert alert--info hide" data-bind-show="!isLoadingShippingMethod &amp;&amp; isAddressSelecting">
											Vui lòng nhập thông tin giao hàng
										</div>
									</div>
								</section>
								
								<section class="section">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-credit-card fa-lg section__title--icon hide-on-desktop"></i>
												Thanh toán
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
														<span class="radio__label__primary">Thanh toán khi giao hàng (COD)</span>
														<span class="radio__label__accessory">
															<span class="radio__label__icon">
																<i class="payment-icon payment-icon--4"></i>
															</span>
														</span>
													</label>
												</div>
												
												<div class="content-box__row__desc" data-bind-show="paymentMethod == 406268">
													<p>Bạn chỉ phải thanh toán khi nhận được hàng</p>
													
												</div>
												
											</div>
											
										</div>
									</div>
								</section>
							</div>
						</article>
						<div class="field__input-btn-wrapper field__input-btn-wrapper--vertical hide-on-desktop">
							<button type="submit" class="btn btn-checkout spinner" data-bind-class="{&#39;spinner--active&#39;: isSubmitingCheckout}" data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
								<span class="spinner-label">ĐẶT HÀNG</span>
								<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
									<use href="#spinner"></use>
								</svg>
							</button>
							
							<a href="" class="previous-link">
								<i class="previous-link__arrow">❮</i>
								<span class="previous-link__content">Quay về giỏ hàng</span>
							</a>
							
						</div>

						<div id="common-alert" data-tg-refresh="refreshError">
							
							
							<div class="alert alert--danger hide-on-desktop hide" data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError" data-bind="submitingCheckoutErrorMessage">Có lỗi xảy ra khi xử lý. Vui lòng thử lại</div>
						</div>
					</div>
					





				</main>
				<aside class="sidebar">
					<div class="sidebar__header">
						<h2 class="sidebar__title">
							Đơn hàng (2 sản phẩm)
						</h2>
					</div>
					<div class="sidebar__content">
						<div id="order-summary" class="order-summary order-summary--is-collapsed">
							<div class="order-summary__sections">
								<div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
									<table class="product-table">
										<caption class="visually-hidden">Chi tiết đơn hàng</caption>
										<thead class="product-table__header">
											<tr>
												<th>
													<span class="visually-hidden">Ảnh sản phẩm</span>
												</th>
												<th>
													<span class="visually-hidden">Mô tả</span>
												</th>
												<th>
													<span class="visually-hidden">Sổ lượng</span>
												</th>
												<th>
													<span class="visually-hidden">Đơn giá</span>
												</th>
											</tr>
										</thead>
										<tbody>
											
											<tr class="product">
												<td class="product__image">
													<div class="product-thumbnail">
														<div class="product-thumbnail__wrapper" data-tg-static="">
															
															<img src="./nom-bap-bo-rau-muong-bo-to-quan-moc-2.jpg" alt="" class="product-thumbnail__image">
															
														</div>
														<span class="product-thumbnail__quantity">1</span>
													</div>
												</td>
												<th class="product__description">
													<span class="product__description__name">
														
														NỘM BẮP BÒ RAU MUỐNG
													</span>
													
													
												</th>
												<td class="product__quantity visually-hidden"><em>Số lượng:</em> 1</td>
												<td class="product__price">
													125.000₫
												</td>
											</tr>
											
										
											
										</tbody>
									</table>
								</div>
								<div class="order-summary__section order-summary__section--discount-code" data-tg-refresh="refreshDiscount" id="discountCode">
									<h3 class="visually-hidden">Mã khuyến mại</h3>
									<div class="edit_checkout animate-floating-labels">
										<div class="fieldset">
											<div class="field  ">
												<div class="field__input-btn-wrapper">
													<div class="field__input-wrapper">
														<label for="reductionCode" class="field__label">Nhập mã giảm giá</label>
														<input name="reductionCode" id="reductionCode" type="text" class="field__input" autocomplete="off" data-bind-disabled="isLoadingReductionCode" data-bind-event-keypress="handleReductionCodeKeyPress(event)" data-define="{reductionCode: null}" data-bind="reductionCode">
													</div>
													<button class="field__input-btn btn spinner btn--disabled" type="button" data-bind-disabled="isLoadingReductionCode || !reductionCode" data-bind-class="{&#39;spinner--active&#39;: isLoadingReductionCode, &#39;btn--disabled&#39;: !reductionCode}" data-bind-event-click="applyReductionCode()" disabled="">
														<span class="spinner-label">Áp dụng</span>
														<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
															<use href="#spinner"></use>
														</svg>
													</button>
												</div>
												
												<p class="field__message field__message--error field__message--error-always-show hide" data-bind-show="!isLoadingReductionCode &amp;&amp; isLoadingReductionCodeError" data-bind="loadingReductionCodeErrorMessage">Có lỗi xảy ra khi áp dụng khuyến mãi. Vui lòng thử lại</p>
											</div>
											
										</div>
									</div>
								</div>
								<div class="order-summary__section order-summary__section--total-lines order-summary--collapse-element" data-define="{subTotalPriceText: &#39;170.000₫&#39;}" data-tg-refresh="refreshOrderTotalPrice" id="orderSummary">
									<table class="total-line-table">
										<caption class="visually-hidden">Tổng giá trị</caption>
										<thead>
											<tr>
												<td><span class="visually-hidden">Mô tả</span></td>
												<td><span class="visually-hidden">Giá tiền</span></td>
											</tr>
										</thead>
										<tbody class="total-line-table__tbody">
											<tr class="total-line total-line--subtotal">
												<th class="total-line__name">
													Tạm tính
												</th>
												<td class="total-line__price">170.000₫</td>
											</tr>
											
											<tr class="total-line total-line--shipping-fee">
												<th class="total-line__name">
													Phí vận chuyển
												</th>
												<td class="total-line__price" data-bind="getTextShippingPrice()">40.000₫</td>
											</tr>
											
										</tbody>
										<tfoot class="total-line-table__footer">
											<tr class="total-line payment-due">
												<th class="total-line__name">
													<span class="payment-due__label-total">
														Tổng cộng
													</span>
												</th>
												<td class="total-line__price">
													<span class="payment-due__price" data-bind="getTextTotalPrice()">210.000₫</span>
												</td>
											</tr>
										</tfoot>
									</table>
								</div>
								<div class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
									<button type="submit" class="btn btn-checkout spinner" data-bind-class="{&#39;spinner--active&#39;: isSubmitingCheckout}" data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
										<span class="spinner-label">ĐẶT HÀNG</span>
										<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
											<use href="#spinner"></use>
										</svg>
									</button>

									
									<a href="" class="previous-link">
										<i class="previous-link__arrow">❮</i>
										<span class="previous-link__content">Quay về giỏ hàng</span>
									</a>
									
								</div>
								
								<div id="common-alert-sidebar" data-tg-refresh="refreshError">
									
									
									<div class="alert alert--danger hide-on-mobile hide" data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError" data-bind="submitingCheckoutErrorMessage">Có lỗi xảy ra khi xử lý. Vui lòng thử lại</div>
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

</body></html>