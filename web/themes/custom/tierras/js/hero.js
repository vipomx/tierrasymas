/**
 * @file
 * Placeholder file for custom sub-theme behaviors.
 *
 */
(function ($, Drupal) {

  if ($('.hero.h-carousel').length > 0) {
    $('.hero.h-carousel .images').owlCarousel({
      loop:true,
      margin:10,
      items:1,
      nav:false,
      dots:true
    })
  }

})(jQuery, Drupal);
