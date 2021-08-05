export default {
  init() {
    // JavaScript to be fired on the home page
    $('#featured-dish').addClass('slide-from-right');
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

    // TESTIMONIAL SLIDER ON BLACKBOARD BACKGROUND
    $('.testimonial-slider').slick({
      dots: true,
      autoplay: true,
      arrows: false,
      autoplaySpeed: 5000,
    });
  },
};
