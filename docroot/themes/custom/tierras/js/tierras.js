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
  }

  // Manages map filters.
  function mapFilters() {
    if ($('#map-filters').length > 0) {
      $('#map-filters').click(function(event) {
        event.preventDefault();
        $(this).parent().toggleClass('open');
      });
    }
  }

})(jQuery, Drupal);
