<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="stylesheet" href="/DEMO_WEB_ORDER/banhang/chuc_nang/slideshow/css/main.css">
</head>
<body>

    <div class="wrapper">

        <section class="module-product">
            <div class="product">
                <h2 class="title">Món mới nhất</h2>
                <div class="product-cards">

                    <!--Slider main container-->
                    <div class="swiper-container">
                        <!--Additional required wrapper-->
                        <div class="swiper-wrapper"></div>


                    </div>

                    <div class="swiper-pagination"></div>
                    <!--If we need navigation buttons-->
                    <div class="navigation">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                
            </div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script >
    window.addEventListener("load", event => {

    var swiperWrapper = document.querySelector('.swiper-wrapper');

    // Add Items Card

    const sections = [
        <?php 
		$tv="select * from san_pham order by id desc limit 0,3";
		$tv_1=mysqli_query($connect,$tv);
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$link_hinh="hinh_anh/san_pham/".$tv_2['hinh_anh'];?>
			{
            label: "Giảm giá!",
            class: "card__sale",
            title: "<?php echo $tv_2['ten'];?>",
            desc: "Tất cả các món ăn nhanh yêu thích của bạn hiện có sẵn, chỉ bằng một cú nhấp tay của bạn. (Tại một số cơ sở nhà hàng Mew-Food luôn mở cửa hàng ngày trong tuần).",
            color: "Tím, Nude, Xanh Blue",
            priceFinal: "<?php
            $s=$tv_2['gia'];
            $gg=$s*20/100;
            $gt=$s-$gg;
            echo $gt;?> đ",
            priceOriginal: "<?php echo $tv_2['gia'];?> đ",
            image: "<?php echo $link_hinh;?>",
            url: "",
        },<?php
		}
	?>
       
    ];

    sections.forEach(function (el) {
        const template =`
            <div class="swiper-slide">
                <div class="card">
                    <div class="${el.class}">${el.label}</div>
                    <span class="card__more"></span>
                    <div class="card__image">
                        <img src="${el.image}" alt="${el.title}">
                    </div>
        
                    <div class="card__content">
                        <article class="card__text">
                            <h2 class="card__title">${el.title}</h2>
                            <div class="card__price">
                                <p class="card__priceFinal">${el.priceFinal}</p>
                                <p class="card__priceOriginal">${el.priceOriginal}</p>
                            </div>
                        </article>
        
                        <div class="card__icon">
                            <a href="${el.url}" target="_blank" rel="noopenner">
                                <button class="card__btn"><span>Xem</span></button>
                            </a>
                        </div>
                    </div>

                    <div class="card__options">
                        <p class="card__desc">${el.desc}</p>
                        
            
                        <form action="" method="post">
                            <div class="card__option">
                                
                                <div class="card__quantity">
                                <p class="card__name">Số lượng</p>
                                    <select name="product_quantity" id="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <button class="card__cta" type="submit">Thêm vào <img src="/DEMO_WEB_ORDER/banhang/chuc_nang/slideshow/assets/shopping-bags.svg"></button>
                        </form>
                    </div>

                </div>
            </div>
        `;

        swiperWrapper.insertAdjacentHTML('beforeend', template);

    })



    /* Swiper Settings */

    var mySwiper = new Swiper(".swiper-container", {
        // Optional parameters
        direction: "horizontal",
        loop: true,
        centeredSlides: false,
        speed: 800,
        slidesPerView: 3,
        spaceBetween: 40,
        threshold: 5,


        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },

        // Navigation arrows
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            1180: {
                slidesPerView: 2,
                spaceBetween: 40,
                centeredSlides: false,
            },
            799: {
                slidesPerView: 1,
                spaceBetween: 20,
                centeredSlides: true,
                loop: true,
            },
        }
    });

    // Show More

    var btnShow = document.querySelectorAll('.card__more');


    btnShow.forEach(function (el) {
        el.addEventListener('click', showMore);
    });

    function showMore(event) {
        var card = event.target.closest(".swiper-slide");

        if (card.classList.contains('show-more')) {
            card.classList.remove('show-more');
        } else {
            card.classList.add('show-more')
        }
    }

});
    </script>
</body>
</html>