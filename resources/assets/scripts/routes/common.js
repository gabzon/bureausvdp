export default {
  init() {
    // JavaScript to be fired on all pages

    jQuery( 'a.brand' ).hover(function() {
      jQuery( '.svdp-title' ).toggle();
    });

    // jquery('.sticky').stick_in_parent({
    //   offset_top: 10,
    // });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
