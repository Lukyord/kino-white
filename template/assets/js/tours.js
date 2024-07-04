/* FILTER */
jQuery(function ($) {
  $(".filter-dropdown-options .options").each(function () {
    $(this).find(".option").first().addClass("active");
  });

  //TOGGLE FILTER DROPDOWN
  $(".filter-dropdown > .filter-dropdown-trigger").click(function (e) {
    e.preventDefault();
    _this = $(this);
    _this.parent().toggleClass("active");
    _this.parent().find(".filter-dropdown-options").slideToggle();
  });

  //SELECT OPTION
  $(".filter-dropdown-options .option").click(function (e) {
    e.preventDefault();
    _this = $(this);

    // only allow one selected option for sorting
    if (_this.closest(".filter-dropdown-options").hasClass("sort-by")) {
      _this.closest(".options").find(".option").removeClass("active");
    }

    _this.toggleClass("active");
  });

  // OPEN FILTER POPUP
  function toggleFilterPopup(e, close = false) {
    e.preventDefault();
    var filterControl = $(".filter-ctrl");
    filterControl.toggleClass("active");

    var popup = $(".filter-dropdowns").find(".filter-popup");

    popup.fadeToggle().css("display", "flex");

    popup.find(".filter-dropdown").addClass("disable-toggle");
    popup.find(".filter-dropdown").toggleClass("active");
    popup.find(".filter-dropdown-options").slideToggle(300);
  }

  $(".filter-ctrl > .ctrl").click(function (e) {
    toggleFilterPopup(e);
  });
  $(".close-filter-popup").click(function (e) {
    toggleFilterPopup(e);
  });
});
