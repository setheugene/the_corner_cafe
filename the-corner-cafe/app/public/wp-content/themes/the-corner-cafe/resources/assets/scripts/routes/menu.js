export default {
    init() {
      // JavaScript to be fired on the home page
      $(document).ready(function() {
        event.preventDefault();
        $.ajax({
            // eslint-disable-next-line no-undef
            url: cc_ajax.ajax_url,
            type: 'POST',
            dataType: 'html',  
            async: false,
            data: {
            action: 'breakfast',
        },
            success: function(response) {
            $('#menu').html(response);
            },
            complete: function() {
              $('.image-icon').on('click', function() {
                $(this).children('.image-modal').removeClass('show');
                $(this).children('.image-modal').toggleClass('stay');
              });
              $('.image-icon').on('mouseenter', function() {
                $(this).children('.image-modal').addClass('show');
              });
              $('.image-icon').on('mouseleave', function() {
                $(this).children('.image-modal').removeClass('show');
              });
            },
            error: function(e) {
            console.log(e);
            },
        });
      });
  
      
    },
    finalize() {
      // JavaScript to be fired on the menu page, after the init JS
     
//AJAX to grab correct menu html--grabbing from app/WpAjax/wp_ajax_calls

  $('#specials').on('click', function() {
    event.preventDefault();
    $.ajax({
        // eslint-disable-next-line no-undef
        url: cc_ajax.ajax_url,
        type: 'POST',
        dataType: 'html',  
        data: {
        action: 'specials',
    },
        success: function(response) {
        $('#menu').html(response);
        },
        complete: function() {
          $('.image-icon').on('click', function() {
            $(this).children('.image-modal').removeClass('show');
            $(this).children('.image-modal').toggleClass('stay');
          });
          $('.image-icon').on('mouseenter', function() {
            $(this).children('.image-modal').addClass('show');
          });
          $('.image-icon').on('mouseleave', function() {
            $(this).children('.image-modal').removeClass('show');
          });
        },
        error: function(e) {
        console.log(e);
        },
    });
  });

  $('#breakfast').on('click', function() {
    event.preventDefault();
    $.ajax({
        // eslint-disable-next-line no-undef
        url: cc_ajax.ajax_url,
        type: 'POST',
        dataType: 'html',  
        data: {
        action: 'breakfast',
    },
        success: function(response) {
        $('#menu').html(response);
        },
        complete: function() {
          $('.image-icon').on('click', function() {
            $(this).children('.image-modal').removeClass('show');
            $(this).children('.image-modal').toggleClass('stay');
          });
          $('.image-icon').on('mouseenter', function() {
            $(this).children('.image-modal').addClass('show');
          });
          $('.image-icon').on('mouseleave', function() {
            $(this).children('.image-modal').removeClass('show');
          });
        },
        error: function(e) {
        console.log(e);
        },
    });
  });

  $('#sandwiches').on('click', function() {
    event.preventDefault();
    $.ajax({
        // eslint-disable-next-line no-undef
        url: cc_ajax.ajax_url,
        type: 'POST',
        dataType: 'html',  
        data: {
        action: 'sandwiches',
    },
        success: function(response) {
        $('#menu').html(response);
        },
        complete: function() {
          $('.image-icon').on('click', function() {
            $(this).children('.image-modal').removeClass('show');
            $(this).children('.image-modal').toggleClass('stay');
          });
          $('.image-icon').on('mouseenter', function() {
            $(this).children('.image-modal').addClass('show');
          });
          $('.image-icon').on('mouseleave', function() {
            $(this).children('.image-modal').removeClass('show');
          });
        },
        error: function(e) {
        console.log(e);
        },
    });
  });

  $('#soups').on('click', function() {
    event.preventDefault();
    $.ajax({
        // eslint-disable-next-line no-undef
        url: cc_ajax.ajax_url,
        type: 'POST',
        dataType: 'html',  
        data: {
        action: 'soups',
    },
        success: function(response) {
        $('#menu').html(response);
        },
        complete: function() {
          $('.image-icon').on('click', function() {
            $(this).children('.image-modal').removeClass('show');
            $(this).children('.image-modal').toggleClass('stay');
          });
          $('.image-icon').on('mouseenter', function() {
            $(this).children('.image-modal').addClass('show');
          });
          $('.image-icon').on('mouseleave', function() {
            $(this).children('.image-modal').removeClass('show');
          });
        },
        error: function(e) {
        console.log(e);
        },
    });
  });

  $('#dinner').on('click', function() {
    event.preventDefault();
    $.ajax({
        // eslint-disable-next-line no-undef
        url: cc_ajax.ajax_url,
        type: 'POST',
        dataType: 'html',  
        data: {
        action: 'dinner',
    },
        success: function(response) {
        $('#menu').html(response);
        },
        complete: function() {
          $('.image-icon').on('click', function() {
            $(this).children('.image-modal').removeClass('show');
            $(this).children('.image-modal').toggleClass('stay');
          });
          $('.image-icon').on('mouseenter', function() {
            $(this).children('.image-modal').addClass('show');
          });
          $('.image-icon').on('mouseleave', function() {
            $(this).children('.image-modal').removeClass('show');
          });
        },
        error: function(e) {
        console.log(e);
        },
    });
  });

  $('#childrens').on('click', function() {
    event.preventDefault();
    $.ajax({
        // eslint-disable-next-line no-undef
        url: cc_ajax.ajax_url,
        type: 'POST',
        dataType: 'html',  
        data: {
        action: 'childrens',
    },
        success: function(response) {
        $('#menu').html(response);
        },
        complete: function() {
          $('.image-icon').on('click', function() {
            $(this).children('.image-modal').removeClass('show');
            $(this).children('.image-modal').toggleClass('stay');
          });
          $('.image-icon').on('mouseenter', function() {
            $(this).children('.image-modal').addClass('show');
          });
          $('.image-icon').on('mouseleave', function() {
            $(this).children('.image-modal').removeClass('show');
          });
        },
        error: function(e) {
        console.log(e);
        },
    });
  });

  $('#bakery').on('click', function() {
    event.preventDefault();
    $.ajax({
        // eslint-disable-next-line no-undef
        url: cc_ajax.ajax_url,
        type: 'POST',
        dataType: 'html',  
        data: {
        action: 'bakery',
    },
        success: function(response) {
        $('#menu').html(response);
        },
        complete: function() {
          $('.image-icon').on('click', function() {
            $(this).children('.image-modal').removeClass('show');
            $(this).children('.image-modal').toggleClass('stay');
          });
          $('.image-icon').on('mouseenter', function() {
            $(this).children('.image-modal').addClass('show');
          });
          $('.image-icon').on('mouseleave', function() {
            $(this).children('.image-modal').removeClass('show');
          });
        },
        error: function(e) {
        console.log(e);
        },
    });
  });

  //ADD SELECTED CLASS TO SIDE MENU
$('.categories-list li').on('click', function () {
  $(this).addClass('selected').siblings().removeClass('selected');
});

    },
  };
  