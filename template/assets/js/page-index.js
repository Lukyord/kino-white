//PAGE:INDEX
jQuery(function ($) {
  if ($(".hero .swiper").length) {
    $(".hero .swiper").each(function () {
      var _this = $(this);

      const swiper = new Swiper(_this[0], {
        resistanceRatio: 0,
        spaceBetween: 0,
        effect: "fade",
        fadeEffect: {
          crossFade: true,
        },
        loop: true,
        speed: 400,
        longSwipesMs: 400,
        slidesPerView: "auto",
        watchSlidesProgress: true,
        watchSlidesVisibility: true,
        simulateTouch: false,
        autoplay: {
          delay: 1000,
          disableOnInteraction: false,
        },
      });
    });
  }
});
