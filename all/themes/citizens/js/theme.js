/**
 * Main Menu Dropdown
 */
(function ($) {
  // Toggle the mobile menu
  $('#page').addClass('with-mobile-menu');
  $('#main-drop-down-toggle').click(function(e) {
    e.preventDefault();
    $('#page').toggleClass('mobile-menu-open');
  });
  $(".main-drop-down").swipe({
    swipe:function(event, direction, distance, duration, fingerCount) {
      if (direction == 'right') {
        $('#page').toggleClass('mobile-menu-open');
      }
    }
  });

  /**
   * Vertically centers the logo
   */
  function vCenterLogo() {
    var height = $('#logo-container > div').height();
    if (height == 0) {
      console.log('height not received');
      height = 69;
    }
    var difference = (74 - height);
    console.log(height + '|' + difference);
    if (difference > 2) {
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
    $('.bean-feature .field-items .field-item').removeClass('active-slide');
    $('.bean-feature .field-items .field-item .group-slide-slide').fadeOut().removeClass('active');
    $('.bean-feature .field-items .field-item:nth-child(' + nth + ') .group-slide-slide').fadeIn().addClass('active');
    $('.bean-feature .field-items .field-item:nth-child(' + nth + ')').addClass('active-slide');
  }
  function arrangeTabs() {
    var percent = 0;
    var featureWidth = $('#page').width();
    var featureHeight = (((500 / 1150) * featureWidth) + 125);
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
      $(this).addClass('slide slide-' + count);
      count++;
    });
    $('.bean-feature').css('height', featureHeight);
  }
  $('.bean-feature > .content > .field-name-field-slides > .field-items > .field-item .group-slide-tab').click(function(e) {
    e.preventDefault();
    var nth = $(this).attr('rel');
    showSlide(nth);
  });

  // Make messages slide down and "close-able"
  $('.messages').each(function() {
    $(this).delay(400).slideDown().prepend('<span class="hide-message color-text" title="Hide this message">X</span>');
  });
  $('.hide-message').click(function() {
    $(this).parents('.messages').slideUp();
  });

  /**
   * Horizontally centers fluid-width buttons
   */
  function hCenterButton() {
    $('.center-blue-button').each(function() {
      var width = $(this).outerWidth();
      $(this).css({
        'width': width,
        'display': 'block'
      });
    });
  }

  // Some nth color stuff that can't reliably be done with css
  function triColor() {
    var colors = [];
    colors[0] = '#0035ad';
    colors[1] = '#fe9901';
    colors[2] = '#8dc63f';
    colors[4] = '#00aeef';
    var i = 0;
    $('.tri-color-outer .tri-color').each(function() {
      $(this).css('color', colors[i]);
      i++;
    });
  }

  // Sticky jump menu
  if (typeof Drupal.settings.jump_menu != 'undefined') {
    // Make sure we're on a page with the jump menu
    $('.region-jump-menu').stickySidebar({
      speed: 200,
      padding: 200,
      constrain: true
    });
  }

  /**
   * jump menu
   */
  // On click of the arrow toggle
  $('.region-jump-menu h3').click(function() {
    toggleJumpMenu();
  });
  // on click of a menu item, close after a couple seconds
  $('.region-jump-menu a').click(function() {
    setTimeout(toggleJumpMenu, 2000);
  });
  // toggle function
  function toggleJumpMenu() {
    $('.region-jump-menu h3').siblings('ul').slideToggle();
    $('.region-jump-menu h3').toggleClass('rotate-0');
  }

  /**
   * Main navigation spacing
   */
  function mainNavSpacing() {
    var available = $('.region-navigation-primary').width();
    var widths = [];
    var i = 0;
    $('.region-navigation-primary ul.sf-menu > li > a').each(function() {
      widths[i] = $(this).outerWidth();
      console.log(widths[i]);
      i++;
    });
    var sum = 0;
    $.each(widths,function(){sum+=parseFloat(this) || 0;});
    var padding = (((available - sum) / 4) / 2) - 1;
    $('.region-navigation-primary ul.sf-menu > li').css('padding', '0 ' + padding + 'px');
  }

  /**
   * On resize functions
   */
  $(window).resize(function() {
    //vCenterLogo();
    mainNavSpacing();
    arrangeTabs();
  });
  /**
   * On load functions
   */
  $(document).ready(function() {
    //vCenterLogo();
    showSlide();
    arrangeTabs();
    hCenterButton();
    triColor();
    setTimeout(toggleJumpMenu, 5000);
  });
  $(window).load(function() {
    mainNavSpacing();
  });
})(jQuery);

