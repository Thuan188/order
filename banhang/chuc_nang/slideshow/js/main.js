window.addEventListener("load", event => {

    var swiperWrapper = document.querySelector('.swiper-wrapper');

    // Add Items Card

    const sections = [
        
        {
            label: "Giảm giá!",
            class: "card__sale",
            title: "Kota Dress",
            desc: "Thanh lịch và nữ tính với mẫu đầm Kota Dress của Lalla. Tone màu nude tinh tế ôm gọn vóc dáng vừa sang trọng vừa phù hợp với mọi vóc dáng.Cùng Midu và Jun Vũ khám phá những mẫu thiết kế mới nhất của nhãn hàng thời trang.",
            color: "Tím, Nude, Xanh Blue",
            priceFinal: "450.000₫",
            priceOriginal: "590.000₫",
            image: "img/img-1.jpg",
            url: "",
        },
        {
            label: "Mới!",
            class: "card__new",
            title: "Copi Top",
            desc: "Thiết kế mới toanh trong BST mới của Lalla là chiếc áo Cobi top với chất voan lụa thoáng mát điểm xuyết chấm bi duyên dáng, Cobi Top 390.000, Tuta Skirt 420.000",
            color: "Đen, trắng",
            priceFinal: "450.000₫",
            priceOriginal: "",
            image: "img/img-2.jpg",
            url: "",
        },
        {
            label: "Giảm giá!",
            class: "card__sale",
            title: "Honu Dress",
            desc: "Với gam màu pastel nhẹ nhàng : Trắng , hồng , xanh, chiếc đầm Honu dress của Lalla sẽ giúp bạn thật thanh lịch và nữ tính dù ở bất cứ đâu.",
            color: "Xanh, hồng",
            priceFinal: "450.000₫",
            priceOriginal: "590.000₫",
            image: "img/img-3.jpg",
            url: "",
        },
        {
            label: "Mới!",
            class: "card__new",
            title: "Lino Dress",
            desc: "Lalla chính thức lên kệ với những thiết kế nhẹ nhàng, trẻ trung và lãng đãng như chính tên gọi của BST.",
            color: "Xanh lá - Xanh cẩm thạch",
            priceFinal: "500.000₫",
            priceOriginal: "",
            image: "img/img-4.jpg",
            url: "",
        },
        {
            label: "Mới!",
            class: "card__new",
            title: "Beda Dress",
            desc: "Không gì cuốn hút hơn 1 cô gái mặc váy lụa đỏ ?vì khi ấy nàng như một đoá hồng rực rỡ và kiêu sa đến não lòng ...",
            color: "Đỏ - rê",
            priceFinal: "590.000₫",
            priceOriginal: "",
            image: "img/img-5.jpg",
            url: "",
        },
        {
            label: "Giảm giá!",
            class: "card__sale",
            title: "Komi Dress",
            desc: "Xinh tươi nhẹ nhàng như một đoá hồng buổi sáng, chiếc đầm Komi Dress với gam màu hồng đất pastel và đỏ đô sẽ chinh phục các cô gái của Lalla 🌸❤️🌸",
            color: "Đỏ",
            priceFinal: "450.000₫",
            priceOriginal: "590.000₫",
            image: "img/img-6.jpg",
            url: "",
        },
        {
            label: "Mới!",
            class: "card__new",
            title: "Komi Dress",
            desc: "Xinh tươi nhẹ nhàng như một đoá hồng buổi sáng, chiếc đầm Komi Dress với gam màu hồng đất pastel và đỏ đô sẽ chinh phục các cô gái của Lalla",
            color: "Cam - vàng",
            priceFinal: "590.000₫",
            priceOriginal: "",
            image: "img/img-7.jpg",
            url: "",
        },
        {
            label: "Giảm giá!",
            class: "card__sale",
            title: "Huno Dress",
            desc: "Với gam màu pastel nhẹ nhàng : Trắng , hồng , xanh, chiếc đầm Honu dress của Lalla sẽ giúp bạn thật thanh lịch và nữ tính dù ở bất cứ đâu.",
            color: "Xanh, hồng",
            priceFinal: "450.000₫",
            priceOriginal: "590.000₫",
            image: "img/img-8.jpg",
            url: "",
        },
        {
            label: "Mới",
            class: "card__new",
            title: "Nuno skert",
            desc: "Ngọt ngào nhưng vẫn vô cùng cá tính với những mẫu thiết kế mới nhất trong BST SUMMER VIBE của #Lalla",
            color: "Vàng - cam",
            priceFinal: "450.000₫",
            priceOriginal: "",
            image: "img/img-9.jpg",
            url: "",
        },
        {
            label: "Giảm giá!",
            class: "card__sale",
            title: "Komi Dress",
            desc: "Xinh tươi nhẹ nhàng như một đoá hồng buổi sáng, chiếc đầm Komi Dress với gam màu hồng đất pastel và đỏ đô sẽ chinh phục các cô gái của Lalla",
            color: "Cam nhẹ nhàng",
            priceFinal: "450.000₫",
            priceOriginal: "590.000₫",
            image: "img/img-10.jpg",
            url: "",
        },
        {
            label: "Mới!",
            class: "card__new",
            title: "Komi Dress",
            desc: "Xinh tươi nhẹ nhàng như một đoá hồng buổi sáng, chiếc đầm Komi Dress với gam màu hồng đất pastel và đỏ đô sẽ chinh phục các cô gái của Lalla",
            color: "Trắng",
            priceFinal: "590.000₫",
            priceOriginal: "",
            image: "img/img-11.jpg",
            url: "",
        },
        {
            label: "Giảm giá!",
            class: "card__sale",
            title: "Beda Dress",
            desc: "Không gì cuốn hút hơn 1 cô gái mặc váy lụa đỏ ?vì khi ấy nàng như một đoá hồng rực rỡ và kiêu sa đến não lòng ...",
            color: "Đỏ - rê",
            priceFinal: "590.000₫",
            priceOriginal: "690.000₫",
            image: "img/img-12.jpg",
            url: "",
        },
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
                        <p class="card__color">- Màu: ${el.color}</p>
            
                        <form action="" method="post">
                            <div class="card__option">
                                <div class="card__size">
                                    <p class="card__name">Kích thước</p>
                                    <select name="product_size" id="" required>
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                    </select>
                                </div>
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
                            <button class="card__cta" type="submit">Thêm vào <img src="assets/shopping-bags.svg"></button>
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