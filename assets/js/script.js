//burger
$(".p-header__burger").on("click", function () {
  $("body").toggleClass("is__fixed");
  $(".p-header__burger").toggleClass("is__active");
  $(".p-burger-view").toggleClass("is__open");
});

//sticky header
$(function () {
  // ページ下部固定ボタン表示非表示
  $(window).on("load scroll", function () {
    $header = $(".p-header");
    btnOffset = $(".l-cont--contact").offset().top;
    x = $(".p-header").height();
    fixedClass = "p-header--fixed";
  });
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > btnOffset - x) {
        $header.addClass(fixedClass);
      } else {
        $header.removeClass(fixedClass);
      }
    });
  });
});

//MV浮遊
function randomValues() {
  anime({
    targets: ".p-mv-round",
    translateX: function () {
      return anime.random(-400, 400);
    },
    translateY: function () {
      return anime.random(-400, 400);
    },
    easing: "easeInOutQuad",
    duration: 20000,
    complete: randomValues,
  });
}
randomValues();

// swiper
const swiper = new Swiper(".swiper", {
  direction: "horizontal",
  offsetPxBefore: 1000,
  centeredSlides: true,
  loop: true,

  watchSlidesVisibility: true,
  speed: 1000,
  slidesPerView: 1.2,
  // spaceBetween: 20,

  autoplay: {
    delay: 5000,
  },
  breakpoints: {
    640: {
      autoplay: false,
      slidesPerView: 2.2,
      // spaceBetween: 50,
    },
    960: {
      autoplay: false,
      slidesPerView: 2.3,
      // spaceBetween: 50,
    },
  },
  pagination: {
    el: ".js_swiper_pagination",
  },
  navigation: {
    nextEl: ".js_swiper-next",
    prevEl: ".js_swiper-prev",
  },
});
