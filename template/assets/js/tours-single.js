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

//SHOW STICKY BUY TICKET BUTTON
$(document).ready(function () {
  function checkStickyBuyTickets() {
    var ticketInfo = $(".ticket-info");
    var ticketInfoBuyTickets = $(".ticket-info-buy-tickets");
    var ticketInfoTop = ticketInfo.offset().top;

    if ($(window).scrollTop() - ticketInfoTop + 80 > 0) {
      ticketInfoBuyTickets.addClass("sticky");
    } else {
      ticketInfoBuyTickets.removeClass("sticky");
    }
  }

  checkStickyBuyTickets();

  $(window).on("scroll", function () {
    checkStickyBuyTickets();
  });
});

//HIDE LOCATIONS DROPDOWN
$(document).ready(function () {
  var locationsDropdown = $(".locations-dropdown");

  function isInView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();
    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).outerHeight();
    return elemBottom > docViewTop && elemTop < docViewBottom;
  }

  function toggleLocationsDropdown() {
    var latestUpdateSection = $(".latest-update");

    if (isInView(latestUpdateSection)) {
      locationsDropdown.addClass("hide");
    } else {
      locationsDropdown.removeClass("hide");
    }
  }

  toggleLocationsDropdown();

  $(window).scroll(function () {
    toggleLocationsDropdown();
  });
});

// LOCATION DROPDOWN MOBILE
jQuery(function ($) {
  $(".tours-info > .locations-dropdown > .locations-dropdown-trigger").click(
    function (e) {
      e.preventDefault();
      e.stopPropagation();

      var _this = $(this);
      var toursInfo = _this.closest(".tours-info");
      var screenOverlay = $(".screen-overlay");
      var dropdownContent = toursInfo.find(".locations-scroll");

      _this.toggleClass("active");
      screenOverlay.toggleClass("show");

      var heroOffset = $(".tours-single-hero").outerHeight() || 0;

      var triggerOffset = _this.offset().top - heroOffset - 10;

      dropdownContent.css("top", triggerOffset + "px");
      dropdownContent.slideToggle();
    }
  );

  $(".screen-overlay").click(function () {
    var _this = $(this);
    var toursInfo = $(".tours-info");

    toursInfo.find(".locations-dropdown-trigger").removeClass("active");
    toursInfo.find(".locations-scroll").hide();
    _this.removeClass("show");
  });

  // Close dropdown on scroll
  $(window).scroll(function () {
    var screenOverlay = $(".screen-overlay");
    if (screenOverlay.hasClass("show")) {
      var toursInfo = $(".tours-info");
      toursInfo.find(".locations-dropdown-trigger").removeClass("active");
      toursInfo.find(".locations-scroll").hide();
      screenOverlay.removeClass("show");
    }
  });

  // Close dropdown when a location is clicked
  $(".tours-info .locations-scroll .location").click(function () {
    var screenOverlay = $(".screen-overlay");
    var toursInfo = $(".tours-info");

    setTimeout(function () {
      toursInfo.find(".locations-dropdown-trigger").removeClass("active");
      toursInfo.find(".locations-scroll").slideToggle();
      screenOverlay.removeClass("show");
    }, 150);
  });
});
