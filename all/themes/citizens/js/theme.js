/**
 * Main Menu Dropdown
 */
(function ($) {
  // Toggle the mobile menu
  $('#main-drop-down-toggle').click(function(e) {
    e.preventDefault();
    console.log('click');
    $('.main-drop-down').toggle();
  });

  /**
   * Vertically centers the logo
   */
  function vCenterLogo() {
    var height = $('#logo-container > div').height();
    var difference = (74 - height);
    if (height != 0) {
      $('#logo').css('margin-top', (difference / 2));
    }
  }

  /**
   * Feature sliders
   */
  function showSlide(nth) {
    if (!$.isNumeric(nth)) {
      nth = 1;
    }
    console.log(nth);
    $('.bean-feature .field-items .field-item .group-slide-slide').fadeOut();
    $('.bean-feature .field-items .field-item:nth-child(' + nth + ') .group-slide-slide').fadeIn();
  }
  function arrangeTabs() {
    var percent = 0;
    var featureWidth = $('#page').width();
    var tabWidth = (featureWidth / 4);
    var fromLeft = 0;
    var count = 1;
    $('.bean-feature > .content > .field-name-field-slides > .field-items > .field-item').each(function() {
      fromLeft = (featureWidth * percent) / 100;
      percent = (percent + 25);
      $(this).find('.group-slide-tab').css({
        'left': fromLeft,
        'width': tabWidth
      }).attr('rel', count);
      count++;
    });
  }
  $('.bean-feature > .content > .field-name-field-slides > .field-items > .field-item .group-slide-tab').click(function(e) {
    e.preventDefault();
    var nth = $(this).attr('rel');
    showSlide(nth);
  });

  /**
   * On resize functions
   */
  $(window).resize(function() {
    vCenterLogo();
    arrangeTabs();
  });
  /**
   * On load functions
   */
  $(document).ready(function() {
    vCenterLogo();
    showSlide();
    arrangeTabs();
  });
})(jQuery);
