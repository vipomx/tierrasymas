/**
 * @file
 * Placeholder file for custom sub-theme behaviors.
 *
 */
(function ($, Drupal) {
  if ($('.paragraph--type--places-carousel').length > 0) {
    console.log('here');
    $('.paragraph--type--places-carousel .places-carousel').owlCarousel({
      loop:false,
      margin:80,
      items:3,
      nav: true,
      dots: false,
      responsive:{
        500:{
          items:1,
          margin:30
        },
        900:{
          items:2
        },
      }
    })
  }

})(jQuery, Drupal);
