jQuery(function ($) {
  $(".live-agency-card").hover(function () {
    var _this = $(this);
    var contentBody = _this.find(".live-agency-card-content-body");

    if ($(window).width() > 991) {
      contentBody.stop(true, true).slideToggle(300, "swing");
    }
  });
});
