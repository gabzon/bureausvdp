export default {
  init() {
    // JavaScript to be fired on all pages

    jQuery( 'a.brand' ).hover(function() {
      jQuery( '.svdp-title' ).toggle();
      jQuery( '.hearts' ).toggle();
    });

    // jQuery('.sticky').stick_in_parent({
    //   parent: '.project',
    // });

    jQuery('.loupe').click(function() {
      if (jQuery('.loupe span').hasClass('icon-loupe_moins')) {
        jQuery('.loupe span').removeClass('icon-loupe_moins');
        jQuery('.loupe span').addClass('icon-loupe_plus');
      } else {
        jQuery('.loupe span').removeClass('icon-loupe_plus');
        jQuery('.loupe span').addClass('icon-loupe_moins');
      }

      if (jQuery('.gallery img').hasClass('w-100')) {
        jQuery('.gallery img').removeClass('w-100');
        jQuery('.gallery img').addClass('w-60 my-5');
      } else {
        jQuery('.gallery img').removeClass('w-60 my-5');
        jQuery('.gallery img').addClass('w-100');
      }
    })

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
