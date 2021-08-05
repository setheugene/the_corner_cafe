export default {
  init() {
    // JavaScript to be fired on the about us page
  },
  finalize() {
    $('.timeline-container').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      variableWidth: false,
      prevArrow: '<button type="button" class="timeline-arrows slick-prev">Previous</button>',
      nextArrow: '<button type="button" class="timeline-arrows slick-next">Next</button>',

      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          },
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  },
};
