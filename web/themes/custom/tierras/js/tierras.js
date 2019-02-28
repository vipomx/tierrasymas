/**
 * @file
 * Placeholder file for custom sub-theme behaviors.
 *
 */
(function ($, Drupal) {
  if ($('#menu-opener').length > 0) {
    mobileMenu();
    mapFilters();
  }
  $('a.no-link').click(function(event) {
      event.preventDefault();
    });

  // Manages mobile menu.
  function mobileMenu() {
    $('#menu-opener').click(function(event) {
      event.preventDefault();
      if ($('#block-tierras-main-menu').length > 0) {
        if ($('#block-tierras-main-menu').hasClass('open')) {
          $('#block-tierras-main-menu').removeClass('open');
          $('#menu-opener').removeClass('to-close');
        }
        else {
          $('#block-tierras-main-menu').addClass('open');
          $('#menu-opener').addClass('to-close');
        }
      }
    });
    $('a.flyout-toggle').click(function(event) {
      event.preventDefault();
      var parent = $(this).parent('li.has-flyout');
      if (parent.hasClass('open')) {
        parent.find('ul.flyout').slideUp();
        parent.removeClass('open');
      }
      else {
        parent.find('ul.flyout').slideDown();
        parent.addClass('open');
      }
    });
  }

  // Manages filters.
  function mapFilters() {
    if ($('#map-filters').length > 0 || $('#list-filters').length > 0) {
      $('#map-filters').click(function(event) {
        event.preventDefault();
        $(this).parent().toggleClass('open');
      });
      $('#list-filters').click(function(event) {
        event.preventDefault();
        $(this).parent().toggleClass('open');
      });
    }
  }

})(jQuery, Drupal);
