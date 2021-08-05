export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    //MOBILE MENU
    $('.button-hamburger').on('click', function() {
      $(this).toggleClass('change');
      $('.nav-panel').toggleClass('open');
    });

    // ACTIVATE LANDMARK MODAL
    $('#trigger').on('click', function () {
      $('.tooltip-modal').toggleClass('modal-active');
      $('#trigger').toggleClass('trigger-active');
    });

    $('#landmark-exit').on('click', function () {
      $('.tooltip-modal').toggleClass('modal-active');
      $('#trigger').toggleClass('trigger-active');
    });

    //EXPAND SEARCH BAR
    $('.search-icon').on('click', function () {
      $('.search-field').focus();
      $('.search-icon').toggleClass('hide');
      $('.search-button').toggleClass('hide');
    });

    //CONTRACT SEARCH BAR
    $('.search-field').focusout(function () {
      setTimeout(function () {
        $('.search-icon').toggleClass('hide');
        $('.search-button').toggleClass('hide');
      }, 500);
    });

        //DONATIONS MODAL POP UP
    $('#donation-popup-trigger').on('click', function () {
      window.scrollTo(0,($(document).height()-$(window).height())/2);
      $('.modal-donations').toggleClass('donations-active');
    });

    $('.exit').on('click', function () {
      $('.modal-donations').toggleClass('donations-active');
    });
  },
};

