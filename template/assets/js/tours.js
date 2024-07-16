/* FILTER */
jQuery(function ($) {
  // CHECK ALL THE FIRST FILTER
  $(".filter-dropdown-options .options").each(function () {
    var firstOption = $(this).find(".option").first();
    firstOption.addClass("active");
    firstOption.find('input[type="checkbox"]').prop("checked", true);
  });

  //TOGGLE FILTER DROPDOWN
  $(".filter-dropdown > .filter-dropdown-trigger").click(function (e) {
    e.preventDefault();
    _this = $(this);
    _this.parent().toggleClass("active");

    var filterDropdonwOptions = _this.parent().find(".filter-dropdown-options");

    if (filterDropdonwOptions.is(":visible")) {
      filterDropdonwOptions.slideUp();
    } else {
      filterDropdonwOptions.slideDown();
    }
  });

  //===== SELECT FILTER OPTION ======
  // INITIALLY CHECK INPUT AND ADD ACTIVE CLASS
  $('input[type="checkbox"], input[type="radio"]').each(function () {
    if ($(this).is(":checked")) {
      $(this).parent("label").addClass("active");
    }
  });

  // HANDLE CHECK INPUT ON LABEL CLICK
  $(".filter-dropdown .option").click(function (e) {
    var input = $(this).find("input");
    if (input.attr("type") === "radio") {
      // Only trigger change for radio buttons if not already checked
      if (!input.prop("checked")) {
        input.prop("checked", true).trigger("change");
      }
    } else {
      input.prop("checked", !input.prop("checked")).trigger("change");
    }
  });

  // ADD ACTIVE CLASS ON INPUT CHECK
  $('input[type="checkbox"], input[type="radio"]').change(function () {
    if ($(this).is(":checked")) {
      if ($(this).attr("type") === "radio") {
        // Remove active class from all radio buttons in the same group
        $('input[name="' + $(this).attr("name") + '"]')
          .parent("label")
          .removeClass("active");
      }
      $(this).parent("label").addClass("active");
    } else {
      $(this).parent("label").removeClass("active");
    }
  });
  //============================

  // OPEN FILTER POPUP
  function toggleFilterPopup(e, close = false) {
    e.preventDefault();
    var filterControl = $(".filter-ctrl");
    filterControl.toggleClass("active");

    var popup = $(".filter-dropdowns").find(".filter-popup");
    var filterDropdown = popup.find(".filter-dropdown");

    if (close || popup.is(":visible")) {
      popup.fadeOut();
      filterDropdown.each(function () {
        if ($(this).hasClass("active")) {
          $(this).removeClass("active");
        }

        if ($(this).hasClass("disable-toggle")) {
          $(this).removeClass("disable-toggle");
        }
      });
      popup.find(".filter-dropdown-options").slideUp(300);
    } else {
      popup.fadeIn().css("display", "flex");
      $("html, body").animate({ scrollTop: $(window).scrollTop() + 1 }, 0);
      filterDropdown.each(function () {
        if (!$(this).hasClass("active")) {
          $(this).addClass("active");
        }
        if (!$(this).hasClass("disable-toggle")) {
          $(this).addClass("disable-toggle");
        }
      });
      popup.find(".filter-dropdown-options").slideDown(300);
    }
  }

  $(".filter-ctrl > .ctrl").click(function (e) {
    toggleFilterPopup(e);
  });
  $(".close-filter-popup").click(function (e) {
    toggleFilterPopup(e);
  });
});

//RESET FILTER ON SCREEN SIZE CHANGE
jQuery(function ($) {
  var filterControl = $(".filter-ctrl");
  var popup = $(".filter-dropdowns").find(".filter-popup");
  var filterDropdown = popup.find(".filter-dropdown");
  var sortByDropdown = $(".sort-by-dropdown");

  function resetFilter() {
    filterControl.removeClass("active");
    sortByDropdown.removeClass("active");
    sortByDropdown.find(".filter-dropdown-options").slideUp(300);

    if (window.innerWidth >= 992) {
      popup.css("display", "grid");
      filterDropdown.each(function () {
        if ($(this).hasClass("active")) {
          $(this).removeClass("active");
        }
        if ($(this).hasClass("disable-toggle")) {
          $(this).removeClass("disable-toggle");
        }
        popup.find(".filter-dropdown-options").slideUp(300);
      });
    } else {
      popup.css("display", "none");
      filterDropdown.each(function () {
        if (!$(this).hasClass("active")) {
          $(this).addClass("active");
        }
        if (!$(this).hasClass("disable-toggle")) {
          $(this).addClass("disable-toggle");
        }
      });
    }
  }

  $(window).resize(function () {
    resetFilter();
  });

  resetFilter();
});
