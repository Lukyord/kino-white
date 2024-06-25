// TOGGLE READMORE MOBILE
jQuery(function ($) {
  $(".read-more-toggle a").click(function (e) {
    e.preventDefault();
    var _this = $(this);
    var description = _this
      .closest(".tours-short-info-wrapper")
      .find(".description");

    description.toggleClass("expanded");

    var textReadMore = _this.data("text-read-more");
    var textShowLess = _this.data("text-show-less");

    if (description.hasClass("expanded")) {
      _this.text(textShowLess);
    } else {
      _this.text(textReadMore);
    }
  });
});

// ACTIVE LOCATION
jQuery(function ($) {
  $(".tours-info > .locations > .locations-scroll >.location")
    .first()
    .addClass("active")
    .find(".button")
    .addClass("button-secondary")
    .removeClass("button-primary");

  $(".tours-info > .locations > .locations-scroll > .location").click(function (
    e
  ) {
    e.preventDefault();

    var _this = $(this);
    var button = _this.find(".button");

    $(".tours-info > .locations")
      .find(".active")
      .removeClass("active")
      .find(".button")
      .removeClass("button-secondary")
      .addClass("button-primary");

    _this.addClass("active");
    button.removeClass("button-primary").addClass("button-secondary");
  });
});
