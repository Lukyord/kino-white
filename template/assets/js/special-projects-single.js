jQuery(function ($) {
  $(".special-projects-gallery .swiper-gallery").each(function () {
    var _this = $(this);
    var swiper = _this.find(".swiper");

    var slideButtonNextParent = swiper.parents().find(".swiper-button-next")[0],
      slideButtonPrevParent = swiper.parents().find(".swiper-button-prev")[0];

    // const swiperGallery = new Swiper(swiper[0], {
    //   //resistanceRatio: 0,
    //   spaceBetween: 0,
    //   navigation: {
    //     nextEl: slideButtonNextParent,
    //     prevEl: slideButtonPrevParent,
    //   },
    //   effect: "slide",
    //   loop: true,
    //   speed: 1400,
    //   longSwipesMs: 1400,
    //   slidesPerView: "auto",
    //   centeredSlides: true,
    //   centerInsufficientSlides: true,
    //   slideToClickedSlide: true,
    //   init: false,
    // });

    // console.log(swiperGallery);
  });
});
