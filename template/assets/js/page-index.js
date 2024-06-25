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
        loop: true,
        draggable: true,
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          922: {
            draggable: false,
          },
        },
      });

      let lastMouseX = 0;

      _this.on("mousemove", function (e) {
        if (window.innerWidth < 922) return;

        var mouseTrigger = Math.abs(e.clientX - lastMouseX) > 10;

        if (mouseTrigger) {
          swiper.slideNext();
        }
        lastMouseX = e.clientX;
      });
    });
  }
});

jQuery(function ($) {
  $(".index-tours .tabs .swiper .swiper-slide > a").on("click", function (e) {
    e.preventDefault();
    var _this = $(this);

    _this.toggleClass("active");

    _this.closest(".swiper-slide").siblings().find("a").removeClass("active");
  });
});
