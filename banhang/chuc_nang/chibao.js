window.addEventListener("load", e => {
    var t = document.querySelector(".mainNav"), o = document.querySelector(".backTop");
    window.onscroll = function () {
        window.pageYOffset >= 120 ? t.classList.add("sticky") : t.classList.remove("sticky"), window.pageYOffset >= 400 ? o.classList.add("show") : o.classList.remove("show")
    };
    var n = document.querySelector(".mainNav__menuIcon.open"),
        s = document.querySelector(".mainNav__menuIcon.close"),
        i = document.querySelector(".mainNav__mobile"),
        a = document.querySelectorAll(".mainNav__mobileLink"),
        c = document.querySelector("body");
    n.addEventListener("click", function () {
        i.classList.add("open-menu"),
            a.forEach(function (e) { e.classList.add("anime-menu-links") }),
            i.classList.remove("close-menu"), c.classList.add("noscroll")
    }),
        s.addEventListener("click", function () {
            i.classList.remove("open-menu"),
                a.forEach(function (e) { e.classList.remove("anime-menu-links") }),
                i.classList.add("close-menu"), c.classList.remove("noscroll")
        });
    var l = 1;
    const r = [
        { title: "daily Ui", image: `assets/thumb_${l++}.jpg`, video: "https://www.youtube.com/embed/wcre8y6fv5s?rel=0&autoplay=1" },
        { title: "Online Fashion Store", image: `assets/thumb_${l++}.jpg`, video: "https://www.youtube.com/embed/2HMnaD5887Q?rel=0&autoplay=1" },
        { title: "Dashboard", image: `assets/thumb_${l++}.jpg`, video: "https://www.youtube.com/embed/69lv4iVKYy8?rel=0&autoplay=1" },
        { title: "Social Cards", image: `assets/thumb_${l++}.jpg`, video: "https://www.youtube.com/embed/--WDF3gdQnw?rel=0&autoplay=1" },
        { title: "Feature Cards", image: `assets/thumb_${l++}.jpg`, video: "https://www.youtube.com/embed/KoSWfyIVJ20?rel=0&autoplay=1" },
        { title: "Notifications", image: `assets/thumb_${l++}.jpg`, video: "https://www.youtube.com/embed/ABGgEMh7jg0?rel=0&autoplay=1" },
        { title: "Login Form", image: `assets/thumb_${l++}.jpg`, video: "https://www.youtube.com/embed/szyqhtT-4pY?rel=0&autoplay=1" },
        { title: "Miku Login", image: `assets/thumb_${l++}.jpg`, video: "https://www.youtube.com/embed/tlBVFgzwhnQ?rel=0&autoplay=1" },
        { title: "Cards UI Design", image: `assets/thumb_${l++}.jpg`, video: "https://www.youtube.com/embed/gZJMyK7HRyQ?rel=0&autoplay=1" }];
    var d = document.querySelector(".videos__content");
    r.forEach(function (e) {
        const t = `\n            <a class="videos__item" data-poster="${e.image}" data-video="${e.video}"\n                data-url="">\n\n                <p class="videos__title">${e.title}</p>\n                <span class="videos__icon"></span>\n                <img src="${e.image}" alt="${e.title}">\n\n            </a>\n        `;
        d.insertAdjacentHTML("beforeend", t)
    });
    const m = document.querySelectorAll(".videos__item"),
        u = document.querySelector(".modal"),
        w = document.querySelector(".modal__icon"),
        v = document.querySelector(".modal__code iframe");
    function p(e) {
        const t = e.currentTarget.dataset.video,
            o = e.currentTarget.dataset.poster; c.classList.add("noscroll"),
                u.classList.add("open"), v.poster = o, v.src = t
    }
    m.forEach(function (e) {
        e.addEventListener("click", p)
    }),
        w.addEventListener("click", function () {
            c.classList.remove("noscroll"),
                u.classList.remove("open")
        });
    const b = document.querySelectorAll(".videos__item");
    let y = 1;
    const g = (e, t) => {
        (e => {
            var t = e.getBoundingClientRect();
            return t.bottom >= 0 && t.right >= 0 && t.top <= document.documentElement.clientHeight && t.left <= document.documentElement.clientWidth
        })
        (e) && window.innerWidth >= 300 && ((e, t) => { null != e.offsetParent && (e.classList.contains(t) || (e.classList.add(t), e.style.animationDelay = .2 * `${y}` + "s", y++)) })(e, t)
    },
        h = (e, t) => {
            e.forEach(e => {
                g(e, t)
            }), y = 1
        };
    window.addEventListener("scroll", () => {
        window.innerWidth >= 300 && h(b, "anime")
    }),
        h(b, "anime"),
        o.addEventListener("click", function () {
            var e, t, o; e = 400, t = -window.scrollY / (e / 15),
                o = setInterval(function () {
                    0 != window.scrollY ? window.scrollBy(0, t) : clearInterval(o)
                }, 15)
        }),
        observer = new IntersectionObserver(e => {
            e.forEach(e => {
                console.log(e),
                    e.intersectionRatio > 0 ? (o.style.bottom = e.intersectionRect.bottom - e.boundingClientRect.top + 24 + "px",
                        window.innerWidth <= 799 && (o.style.bottom = e.intersectionRect.bottom - e.boundingClientRect.top + 70 + "px"),
                        observer.unobserve(e.target)) : (o.style.bottom = "24px", window.innerWidth <= 799 && (o.style.bottom = "70px"))
            })
        }),
        window.addEventListener("scroll", function () { observer.observe(document.querySelector("footer")) })
});


