// TOGGLE CAREERS FILLER SECTION BG
jQuery(function ($) {
  if ($(".careers-filler").length) {
    var $careersFiller = $(".careers-filler");

    function checkIfInView() {
      var rect = $careersFiller[0].getBoundingClientRect();
      var windowHeight = $(window).height();
      var sectionHeight = rect.height;
      var _75SectionHeight = sectionHeight * (3 / 4);

      if (rect.top + _75SectionHeight <= windowHeight) {
        $careersFiller.addClass("in-view");
      }
    }

    $(window).on("scroll resize", checkIfInView);

    checkIfInView();
  }
});

//SWIPER PARALLAX GALLERY
jQuery(function ($) {
  if ($(".careers-highlight-slides").length) {
    $(".careers-highlight-slides").each(function () {
      var _this = $(this);
      var parentSwiper = _this.find(".swiper.parent");

      //CONTROLS
      const swiperParent = new Swiper(parentSwiper[0], {
        speed: 1400,
        longSwipesMs: 1400,
        slidesPerView: "auto",
        effect: "fade",
        loop: true,
        navigation: {
          nextEl: ".swiper-parent-button-next",
          prevEl: ".swiper-parent-button-prev",
        },
        grabCursor: false,
        allowTouchMove: false,
      });
    });
  }
  if ($(".parallax-gallery").length) {
    $(".parallax-gallery").each(function () {
      var _this = $(this);
      var parallaxSwiper = _this.find(".swiper.parallax");

      const swiperParallax = new Swiper(parallaxSwiper[0], {
        grabCursor: true,
        mouseWheel: true,
        speed: 1400,
        longSwipesMs: 1400,
        loop: true,
        slidesPerView: "auto",
        centeredSlides: true,
        parallax: true,
        centerInsufficientSlides: true,
        slideToClickedSlide: true,
        breakpoints: {
          992: {
            centeredSlides: false,
          },
        },
      });
    });
  }
});
