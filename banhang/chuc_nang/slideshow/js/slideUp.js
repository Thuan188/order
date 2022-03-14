
	$(document).ready(function ($) {
		if ($(window).width() >= 768 ){
			SalesPop();
		}
	});
	function fisherYates ( myArray ) {
		var i = myArray.length, j, temp;
		if ( i === 0 ) return false;
		while ( --i ) {
			j = Math.floor( Math.random() * ( i + 1 ) );
			temp = myArray[i];
			myArray[i] = myArray[j]; 
			myArray[j] = temp;
		}
	}
	var collection = new Array();
	
	
	
	collection[0]="<a href='/nom-bap-bo-rau-muong' class='jas-sale-pop-img mr__20'>"
	+									"<img src='http://bizweb.dktcdn.net/thumb/small/100/341/555/products/nom-bap-bo-rau-muong-bo-to-quan-moc-2.jpg?v=1598954866000' alt='NỘM BẮP BÒ RAU MUỐNG'/>"
	+								"</a>"
	+								"<div class='jas-sale-pop-content'>"
	+									"<h3 class='mg__0 mt__5 mb__5 fs__18'>"
	+										"<a href='/nom-bap-bo-rau-muong' title='NỘM BẮP BÒ RAU MUỐNG'>NỘM BẮP BÒ RAU MUỐNG</a>"
	+									"</h3>"
	+									"<span  class='fs__12 jas-sale-pop-timeago'></span>"
	+								"</div>"
	+								"<span id='clslide' class='pe-7s-close pa fs__20'></span>";
	
	
	
	
	
	collection[1]="<a href='/rau-mung-toi-xao-toi' class='jas-sale-pop-img mr__20'>"
	+									"<img src='http://bizweb.dktcdn.net/thumb/small/100/341/555/products/mung-toi-bo-to-quan-moc-1560583012.jpg?v=1598954173000' alt='RAU MÙNG TƠI XÀO TỎI'/>"
	+								"</a>"
	+								"<div class='jas-sale-pop-content'>"
	+									"<h3 class='mg__0 mt__5 mb__5 fs__18'>"
	+										"<a href='/rau-mung-toi-xao-toi' title='RAU MÙNG TƠI XÀO TỎI'>RAU MÙNG TƠI XÀO TỎI</a>"
	+									"</h3>"
	+									"<span  class='fs__12 jas-sale-pop-timeago'></span>"
	+								"</div>"
	+								"<span id='clslide' class='pe-7s-close pa fs__20'></span>";
	
	
	
	
	
	collection[2]="<a href='/rau-cu-qua-luoc-cham-kho-quet' class='jas-sale-pop-img mr__20'>"
	+									"<img src='http://bizweb.dktcdn.net/thumb/small/100/341/555/products/cu-qua-luoc-cham-kho-quet-2.jpg?v=1598954010000' alt='RAU CỦ QUẢ LUỘC CHẤM KHO QUẸT'/>"
	+								"</a>"
	+								"<div class='jas-sale-pop-content'>"
	+									"<h3 class='mg__0 mt__5 mb__5 fs__18'>"
	+										"<a href='/rau-cu-qua-luoc-cham-kho-quet' title='RAU CỦ QUẢ LUỘC CHẤM KHO QUẸT'>RAU CỦ QUẢ LUỘC CHẤM KHO QUẸT</a>"
	+									"</h3>"
	+									"<span  class='fs__12 jas-sale-pop-timeago'></span>"
	+								"</div>"
	+								"<span id='clslide' class='pe-7s-close pa fs__20'></span>";
	
	
	
	
	
	collection[3]="<a href='/lau-bo-sai-gon-thap-cam' class='jas-sale-pop-img mr__20'>"
	+									"<img src='http://bizweb.dktcdn.net/thumb/small/100/341/555/products/71401059-382625639072325-1925446457410715648-n.png?v=1598952865000' alt='LẨU BÒ SÀI GÒN THẬP CẨM'/>"
	+								"</a>"
	+								"<div class='jas-sale-pop-content'>"
	+									"<h3 class='mg__0 mt__5 mb__5 fs__18'>"
	+										"<a href='/lau-bo-sai-gon-thap-cam' title='LẨU BÒ SÀI GÒN THẬP CẨM'>LẨU BÒ SÀI GÒN THẬP CẨM</a>"
	+									"</h3>"
	+									"<span  class='fs__12 jas-sale-pop-timeago'></span>"
	+								"</div>"
	+								"<span id='clslide' class='pe-7s-close pa fs__20'></span>";
	
	
	
	
	
	collection[4]="<a href='/bo-to-nuong-tang' class='jas-sale-pop-img mr__20'>"
	+									"<img src='http://bizweb.dktcdn.net/thumb/small/100/341/555/products/bo-nuong-tang-to-menu.jpg?v=1598952713000' alt='BÒ TƠ NƯỚNG TẢNG'/>"
	+								"</a>"
	+								"<div class='jas-sale-pop-content'>"
	+									"<h3 class='mg__0 mt__5 mb__5 fs__18'>"
	+										"<a href='/bo-to-nuong-tang' title='BÒ TƠ NƯỚNG TẢNG'>BÒ TƠ NƯỚNG TẢNG</a>"
	+									"</h3>"
	+									"<span  class='fs__12 jas-sale-pop-timeago'></span>"
	+								"</div>"
	+								"<span id='clslide' class='pe-7s-close pa fs__20'></span>";
	
	
	
	
	
	collection[5]="<a href='/mang-truc-yen-tu-xao-nam' class='jas-sale-pop-img mr__20'>"
	+									"<img src='http://bizweb.dktcdn.net/thumb/small/100/341/555/products/mang-truc-xao-nam-bo-to-quan-moc-menu-to.jpg?v=1598952593000' alt='MĂNG TRÚC YÊN TỬ XÀO NẤM'/>"
	+								"</a>"
	+								"<div class='jas-sale-pop-content'>"
	+									"<h3 class='mg__0 mt__5 mb__5 fs__18'>"
	+										"<a href='/mang-truc-yen-tu-xao-nam' title='MĂNG TRÚC YÊN TỬ XÀO NẤM'>MĂNG TRÚC YÊN TỬ XÀO NẤM</a>"
	+									"</h3>"
	+									"<span class='fs__12 jas-sale-pop-timeago'></span>"
	+								"</div>"
	+								"<span id='clslide' class='pe-7s-close pa fs__20'></span>";
	
	
	
	
	
	collection[6]="<a href='/nom-bap-bo-rau-tien-vua' class='jas-sale-pop-img mr__20'>"
	+									"<img src='http://bizweb.dktcdn.net/thumb/small/100/341/555/products/untitled-2.jpg?v=1598952434000' alt='NỘM BẮP BÒ RAU TIẾN VUA'/>"
	+								"</a>"
	+								"<div class='jas-sale-pop-content'>"
	+									"<h3 class='mg__0 mt__5 mb__5 fs__18'>"
	+										"<a href='/nom-bap-bo-rau-tien-vua' title='NỘM BẮP BÒ RAU TIẾN VUA'>NỘM BẮP BÒ RAU TIẾN VUA</a>"
	+									"</h3>"
	+									"<span class='fs__12 jas-sale-pop-timeago'></span>"
	+								"</div>"
	+								"<span id='clslide' class='pe-7s-close pa fs__20'></span>";
	
	
	
	
	
	collection[7]="<a href='/khoai-tay-chien' class='jas-sale-pop-img mr__20'>"
	+									"<img src='http://bizweb.dktcdn.net/thumb/small/100/341/555/products/khoai-tay-chien-2.jpg?v=1598952348000' alt='KHOAI TÂY CHIÊN'/>"
	+								"</a>"
	+								"<div class='jas-sale-pop-content'>"
	+									"<h3 class='mg__0 mt__5 mb__5 fs__18'>"
	+										"<a href='/khoai-tay-chien' title='KHOAI TÂY CHIÊN'>KHOAI TÂY CHIÊN</a>"
	+									"</h3>"
	+									"<span class='fs__12 jas-sale-pop-timeago'></span>"
	+								"</div>"
	+								"<span id='clslide' class='pe-7s-close pa fs__20'></span>";
	
	
	
	
	
	collection[8]="<a href='/nem-bo-nam' class='jas-sale-pop-img mr__20'>"
	+									"<img src='http://bizweb.dktcdn.net/thumb/small/100/341/555/products/740x-660.jpg?v=1598952308000' alt='NEM BÒ NẤM'/>"
	+								"</a>"
	+								"<div class='jas-sale-pop-content'>"
	+									"<h3 class='mg__0 mt__5 mb__5 fs__18'>"
	+										"<a href='/nem-bo-nam' title='NEM BÒ NẤM'>NEM BÒ NẤM</a>"
	+									"</h3>"
	+									"<span class='fs__12 jas-sale-pop-timeago'></span>"
	+								"</div>"
	+								"<span id='clslide' class='pe-7s-close pa fs__20'></span>";
	
	
	
	
	
	collection[9]="<a href='/be-chao-moc-chau' class='jas-sale-pop-img mr__20'>"
	+									"<img src='http://bizweb.dktcdn.net/thumb/small/100/341/555/products/be-chao-moc-chau-menu-to.jpg?v=1598951901000' alt='BÊ CHAO MỘC CHÂU'/>"
	+								"</a>"
	+								"<div class='jas-sale-pop-content'>"
	+									"<h3 class='mg__0 mt__5 mb__5 fs__18'>"
	+										"<a href='/be-chao-moc-chau' title='BÊ CHAO MỘC CHÂU'>BÊ CHAO MỘC CHÂU</a>"
	+									"</h3>"
	+									"<span class='fs__12 jas-sale-pop-timeago'></span>"
	+								"</div>"
	+								"<span id='clslide' class='pe-7s-close pa fs__20'></span>";
	
	
	
	
	
	collection[10]="<a href='/bo-to-xong-hoi' class='jas-sale-pop-img mr__20'>"
	+									"<img src='http://bizweb.dktcdn.net/thumb/small/100/341/555/products/bo-to-xong-hoi-bo-to-quan-moc-menu-1561601001.jpg?v=1598951837000' alt='BÒ TƠ XÔNG HƠI'/>"
	+								"</a>"
	+								"<div class='jas-sale-pop-content'>"
	+									"<h3 class='mg__0 mt__5 mb__5 fs__18'>"
	+										"<a href='/bo-to-xong-hoi' title='BÒ TƠ XÔNG HƠI'>BÒ TƠ XÔNG HƠI</a>"
	+									"</h3>"
	+									"<span class='fs__12 jas-sale-pop-timeago'></span>"
	+								"</div>"
	+								"<span id='clslide' class='pe-7s-close pa fs__20'></span>";
	
	
	
	
	
	collection[11]="<a href='/bo-to-cuon-banh-trang' class='jas-sale-pop-img mr__20'>"
	+									"<img src='http://bizweb.dktcdn.net/thumb/small/100/341/555/products/met-bo-to-cuon-banh-trang-menu-1561434989-jpg.jpg?v=1598951734000' alt='BÒ TƠ CUỐN BÁNH TRÁNG'/>"
	+								"</a>"
	+								"<div class='jas-sale-pop-content'>"
	+									"<h3 class='mg__0 mt__5 mb__5 fs__18'>"
	+										"<a href='/bo-to-cuon-banh-trang' title='BÒ TƠ CUỐN BÁNH TRÁNG'>BÒ TƠ CUỐN BÁNH TRÁNG</a>"
	+									"</h3>"
	+									"<span class='fs__12 jas-sale-pop-timeago'></span>"
	+								"</div>"
	+								"<span id='clslide' class='pe-7s-close pa fs__20'></span>";
	
	
	
	fisherYates(collection);
	function SalesPop() {
		if ($('.jas-sale-pop').length < 0)
			return;
		setInterval(function() {
			$('.jas-sale-pop').fadeIn(function() {
				$(this).removeClass('slideUp');
			}).delay(10000).fadeIn(function() {
				var randomTime =['1 phút','2 phút','3 phút','4 phút','5 phút','6 phút','7 phút','8 phút','9 phút','10 phút','11 phút','12 phút','13 phút','14 phút','15 phút','16 phút','17 phút','18 phút','19 phút','20 phút','21 phút','22 phút','23 phút','24 phút','25 phút','26 phút','27 phút','28 phút','29 phút','30 phút','31 phút','32 phút','33 phút','34 phút','35 phút','36 phút','37 phút','38 phút','39 phút','40 phút','41 phút','42 phút','43 phút','44 phút','45 phút','46 phút','47 phút','48 phút','49 phút','50 phút','51 phút','52 phút','53 phút','54 phút','55 phút','56 phút','57 phút','58 phút','59 phút',],
				randomTimeAgo = Math.floor(Math.random() * randomTime.length),
				randomProduct = Math.floor(Math.random() * collection.length),
				randomShowP = collection[randomProduct],
				TimeAgo = randomTime[randomTimeAgo];
				$(".jas-sale-pop").html(randomShowP);
				$('.jas-sale-pop-timeago').text('Một khách hàng vừa đặt mua cách đây ' + TimeAgo);
				$('.jas-sale-pop-timeago2').text('Một khách hàng vừa liên hệ cách đây ' + TimeAgo);
				$(this).addClass('slideUp');
				$('.pe-7s-close').on('click', function() {
					$('.jas-sale-pop').remove();
				});
			}).delay(6000);
		}, 6000);
	}
