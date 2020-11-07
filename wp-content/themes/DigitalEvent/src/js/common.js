(function($) {
  $(document).ready(function() {

    $(window).scroll(function(){
      var sticky = $('.product-sub-header'),
          box = $('.product-sub-header__box'),
          scroll = $(window).scrollTop();

      if (scroll >= 400){
        sticky.addClass('top');
        box.addClass('active');
      } else {
        sticky.removeClass('top');
        box.removeClass('active');
      }
      if (scroll >= 500){
        sticky.addClass('fixed');
      } else {
        sticky.removeClass('fixed');
      }
    });


    $('.discussion-item-speaker__btn').on('click', function() {
      $(this).toggleClass('active');
      $('.discussion-item-speaker__content').toggleClass('active');
      $('.discussion .slick-list').toggleClass('active');
    });

    $('.video-item-play__video').parent().click(function () {
      var videoEl = $(this).find("video").get(0);
      if(videoEl.paused){
          videoEl.play();
          $(this).children(".video-item-play").fadeOut();
        }else{
          videoEl.pause();
          $(this).children(".video-item-play").fadeIn();
        }
    });

    $('.discussion-item__list').slick({
      dots: false,
      infinite: false,
      speed: 500,
      slidesToShow: 1,
      adaptiveHeight: true,
      // variableWidth: true,
    });

    $('.agenda-card--product.agenda-card__vertical').slick({
      dots: false,
      infinite: false,
      speed: 500,
      slidesToShow: 1,
      variableWidth: true,
      slidesToScroll: 2,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToScroll: 1
          }
        }
      ]
    });
    $('.product-image-slider').slick({
      dots: false,
      infinite: false,
      speed: 500,
      slidesToShow: 1,
      variableWidth: true,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToScroll: 1
          }
        }
      ]
    });

    $('.agenda-control__vertical').on('click', function() {
      $(this).addClass('active');
      $('.agenda-control__horizontal').removeClass('active');
      $('.agenda-card__list').removeClass('agenda-card__horizontal').addClass('agenda-card__vertical');
      if (!$('.agenda-card__list').hasClass('slick-slider')){
        $('.agenda-card__vertical').slick({
          dots: false,
          infinite: false,
          speed: 500,
          slidesToShow: 1,
          variableWidth: true,
          slidesToScroll: 2,
          responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToScroll: 1
              }
            }
          ]
        });
      }
    });

    $('.agenda-control__horizontal').on('click', function() {
      $(this).addClass('active');
      $('.agenda-control__vertical').removeClass('active');
      $('.agenda-card__list').removeClass('agenda-card__vertical').addClass('agenda-card__horizontal');
      if ($('.agenda-card__list').hasClass('slick-slider')){
        $('.agenda-card__list').slick('unslick');
      }
    });

    $('.hamburger__input').on('change', function() {
      $('.header-menu').slideToggle();
    });

    if ($(window).width() < 767) {
      $('.page-template-tpl-workshops .agenda-control-info').detach().appendTo('.header-banner__sub-title');
    }
    if ($(window).width() > 992) {
      $('.agenda-control-info').hover(
         function(){ $(this).toggleClass('active').find('.agenda-control-info__text').stop(false, false).slideDown() },
         function(){ $(this).toggleClass('active').find('.agenda-control-info__text').stop(false, false).slideUp() }
      );
    }
    if ($(window).width() < 992) {
      $('.agenda-control-info').on('click', function() {
        $(this).toggleClass('active').find('.agenda-control-info__text').slideToggle();
      });

    }
    if ($(window).width() < 1200) {
      $('.agenda-control__vertical').click();
    }
    if ($(window).width() > 1200) {
      $('.agenda-control__horizontal').click();
    }

    $( window ).resize(function() {
      if ($(window).width() < 1200 && $('.agenda-card__list').hasClass('agenda-card__horizontal')) {
        $('.agenda-control__vertical').click();
        console.log('123');
      }
    });

    $(".anchor").on("click", function (event) {
      event.preventDefault();
      var href  = $(this).attr('href');
      if (href == undefined){
        var href  = $(this).find('a').attr('href');
      }
      var id = href.substring(href.search('#'));
      if ($(id).length == 0){
        $(location).attr('href', href);
      } else {
        var top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 800);
      }
    });

    $('.btns-fixed__btn.contact').on('click', function() {
      $('.book-appoin').addClass('active');
      $('.book-appoin__overlay').addClass('active');
    });

    $('.book-appoin__close, .book-appoin__overlay').on('click', function() {
      $('.book-appoin').removeClass('active');
      $('.book-appoin__overlay').removeClass('active');
    });

  });
})(jQuery);
