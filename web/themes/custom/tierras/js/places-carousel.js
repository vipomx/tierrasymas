/**
 * @file
 * Placeholder file for custom sub-theme behaviors.
 *
 */
(function ($, Drupal) {
  if ($('.paragraph--type--places-carousel').length > 0) {
    $('.paragraph--type--places-carousel .places-carousel').owlCarousel({
      loop:true,
      margin:80,
      items:4,
      nav: true,
      dots: false,
      stagePadding: 0,
      responsive:{
        0:{
          items:1,
          margin:10
        },
        900:{
          items:2
        },
        1200:{
          items:4
        },
      }
    })
  }

})(jQuery, Drupal);
