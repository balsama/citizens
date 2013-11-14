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
   * On resize functions
   */
  $(window).resize(function() {
    vCenterLogo();
  });
  /**
   * On load functions
   */
  $(document).ready(function() {
    vCenterLogo();
  });
})(jQuery);
