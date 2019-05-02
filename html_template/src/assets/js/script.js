$(function () {

  $('.checkbox').each(function (index) {
    $(this).find('input').attr('id', 'checkbox-' + index);
    $(this).find('label').attr('for', 'checkbox-' + index);
  });

  $('.radio').each(function (index) {
    $(this).find('input').attr('id', 'radio-' + index);
    $(this).find('label').attr('for', 'radio-' + index);
  });

  $('.toggle').each(function (index) {
    $(this).find('input').attr('id', 'toggle-' + index);
    $(this).find('label').attr('for', 'toggle-' + index);
  });


  $('.burger, .overlay').click(function () {
    $('.burger').toggleClass('clicked');
    $('.overlay').toggleClass('show');
    $('nav').toggleClass('show');
    $('body').toggleClass('overflow');
  });

  $('.nav-link').on('click', function () {
    if ($(window).width() < 992) {
      var offset = $(this).parent().parent().offset().top + $(this).parent().parent().height();
      $('body, html').animate({
        scrollTop: offset + 'px'
      }, 1500);
    }
  });

  function pricingPT() {
    $('.pricing__content').css({
      'padding-top': $('.header').outerHeight() + 'px'
    });
  }

  function mainBanerAnimation() {
    var timing = 0;
    if (!$('.main-baner').hasClass('no-animate')) {
      $('.main-baner .animation .animation-block').each(function () {
        if ($(this).hasClass('animation-block--paragraphs')) {
          $(this).css({
            'animation': 'mainBannerAnimation .5s ease-out ' + timing + 's 1 normal forwards'
          });
          $(this).find('p').each(function () {
            $(this).css({
              'animation': 'mainBannerAnimation 1s ease-out ' + timing + 's 1 normal forwards'
            });
            timing += 1.5;
          });
        } else {
          $(this).css({
            'animation': 'mainBannerAnimation 1.5s ease-out ' + timing + 's 1 normal forwards'
          });
          timing += 1.5;
        }
      });
    }
  }

  function mainBanerSizes() {
    $('.main-baner').css({
      'padding-top': $('.header').outerHeight() + 15 + 'px'
    });
    $('.main-baner .baner-content').css({
      'min-height': $(window).height() - $('.header').outerHeight() - 120 + 'px'
    });
  }

  mainBanerSizes();
  mainBanerAnimation();

  pricingPT();

  $(window).on('resize', function () {
    mainBanerSizes();
    pricingPT();
    $('.get-started.sliders .slider-bg').css('padding-top', $('.header').outerHeight() + 'px');
  });

  $('.get-started.sliders .slider-bg').css('padding-top', $('.header').outerHeight() + 'px');

  $('#slider-vacation').on('change', function () {
    if ($(this).val() == 'other') {
      $('#slider-1-other-1').fadeIn(300);
    } else {
      $('#slider-1-other-1').fadeOut(300);
    }
  });

  $('.arr--down').on('click', function (e) {
    e.preventDefault();
    $('body, html').animate({
      scrollTop: $('.main-baner').outerHeight()
    }, 500);
  });

  $('*[data-js="slider-1"] .slider').on('init', function (event, slick) {
    $('*[data-js="slider-1"] .btn--slide-prev').css('visibility', 'hidden');
    $('*[data-js="slider-1"] *[data-js="steps"]').text('Step 1');
  });
  $('*[data-js="slider-1"] .slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: false,
    adaptiveHeight: true,
    swipe: false,
    autoplaySpeed: 2000,
    infinite: false
  });
  $('*[data-js="slider-1"] .slider').on('afterChange', function (event, slick, currentSlide) {
    var step = $('*[data-js="slider-1"] .slick-current .slider__slide').attr('data-step');
    $('*[data-js="slider-1"] *[data-js="steps"]').text('Step ' + step);
    if ((slick.$slides.length - 1) == currentSlide) {
      $('*[data-js="slider-1"] .btn--slide-next').css('visibility', 'hidden');
    } else {
      $('*[data-js="slider-1"] .btn--slide-next').removeAttr('style');
    }
    if (currentSlide == 0) {
      $('*[data-js="slider-1"] .btn--slide-prev').css('visibility', 'hidden');
    } else {
      $('*[data-js="slider-1"] .btn--slide-prev').removeAttr('style');
    }
    var filled = +$('*[data-js="slider-1"] .slider .slick-active .slider__slide').attr('data-filled');
    var mustFill = +$('*[data-js="slider-1"] .slider .slick-active .slider__slide').attr('data-must-fill');
    if (canWeGoNext(filled, mustFill)) {
      $('*[data-js="slider-1"] .btn--slide-next').removeClass('unact');
      $('*[data-js="slider-1"] button[type="submit"].btn--default').removeClass('d-none');
    } else {
      $('*[data-js="slider-1"] .btn--slide-next').addClass('unact');
      $('*[data-js="slider-1"] button[type="submit"].btn--default').addClass('d-none');
    }
  });

  $('*[data-js="slider-2"] .slider').on('init', function (event, slick) {
    $('*[data-js="slider-2"] .btn--slide-prev').css('visibility', 'hidden');
    $('*[data-js="slider-2"] *[data-js="steps"]').text('Step 1');
  });
  $('*[data-js="slider-2"] .slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: true,
    swipe: false,
    adaptiveHeight: true,
    autoplaySpeed: 2000,
    nextArrow: $('*[data-js="slider-2"] .btn--slide-next'),
    prevArrow: $('*[data-js="slider-2"] .btn--slide-prev'),
    infinite: false
  });
  $('*[data-js="slider-2"] .slider').on('afterChange', function (event, slick, currentSlide) {
    var step = $('*[data-js="slider-2"] .slick-current .slider__slide').attr('data-step');
    $('*[data-js="slider-2"] *[data-js="steps"]').text('Step ' + step);
    if ((slick.$slides.length - 1) == currentSlide) {
      $('*[data-js="slider-2"] .btn--slide-next').css('visibility', 'hidden');
    } else {
      $('*[data-js="slider-2"] .btn--slide-next').removeAttr('style');
    }
    if (currentSlide == 0) {
      $('*[data-js="slider-2"] .btn--slide-prev').css('visibility', 'hidden');
    } else {
      $('*[data-js="slider-2"] .btn--slide-prev').removeAttr('style');
    }
    var filled = +$('*[data-js="slider-2"] .slider .slick-active .slider__slide').attr('data-filled');
    var mustFill = +$('*[data-js="slider-2"] .slider .slick-active .slider__slide').attr('data-must-fill');
    if (canWeGoNext(filled, mustFill)) {
      $('*[data-js="slider-2"] .btn--slide-next').removeClass('unact');
      $('*[data-js="slider-2"] button[type="submit"].btn--default').removeClass('d-none');
    } else {
      $('*[data-js="slider-2"] .btn--slide-next').addClass('unact');
      $('*[data-js="slider-2"] button[type="submit"].btn--default').addClass('d-none');
    }
  });

  $('*[data-js="slider-3"] .slider').on('init', function (event, slick) {
    $('*[data-js="slider-3"] .btn--slide-prev').css('visibility', 'hidden');
    $('*[data-js="slider-3"] *[data-js="steps"]').text('Step 1');
  });
  $('*[data-js="slider-3"] .slider ').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: false,
    swipe: false,
    adaptiveHeight: true,
    autoplaySpeed: 2000,
    infinite: false
  });
  $('*[data-js="slider-3"] .slider').on('afterChange', function (event, slick, currentSlide) {
    var step = $('*[data-js="slider-3"] .slick-current .slider__slide').attr('data-step');
    $('*[data-js="slider-3"] *[data-js="steps"]').text('Step ' + step);
    if ((slick.$slides.length - 1) == currentSlide) {
      $('*[data-js="slider-3"] .btn--slide-next').css('visibility', 'hidden');
    } else {
      $('*[data-js="slider-3"] .btn--slide-next').removeAttr('style');
    }
    if (currentSlide == 0) {
      $('*[data-js="slider-3"] .btn--slide-prev').css('visibility', 'hidden');
    } else {
      $('*[data-js="slider-3"] .btn--slide-prev').removeAttr('style');
    }
    var filled = +$('*[data-js="slider-3"] .slider .slick-active .slider__slide').attr('data-filled');
    var mustFill = +$('*[data-js="slider-3"] .slider .slick-active .slider__slide').attr('data-must-fill');
    if (canWeGoNext(filled, mustFill)) {
      $('*[data-js="slider-3"] .btn--slide-next').removeClass('unact');
      $('*[data-js="slider-3"] button[type="submit"].btn--default').removeClass('d-none');
    } else {
      $('*[data-js="slider-3"] .btn--slide-next').addClass('unact');
      $('*[data-js="slider-3"] button[type="submit"].btn--default').addClass('d-none');
    }
  });

  $('*[data-js="slider-4"] .slider').on('init', function (event, slick) {
    $('*[data-js="slider-4"] .btn--slide-prev').css('visibility', 'hidden');
    $('*[data-js="slider-4"] *[data-js="steps"]').text('Step 1');
  });
  $('*[data-js="slider-4"] .slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    swipe: false,
    arrows: false,
    adaptiveHeight: true,
    autoplaySpeed: 2000,
    infinite: false
  });
  $('*[data-js="slider-4"] .slider').on('afterChange', function (event, slick, currentSlide) {
    var step = $('*[data-js="slider-4"] .slick-current .slider__slide').attr('data-step');
    $('*[data-js="slider-4"] *[data-js="steps"]').text('Step ' + step);
    if ((slick.$slides.length - 1) == currentSlide) {
      $('*[data-js="slider-4"] .btn--slide-next').css('visibility', 'hidden');
    } else {
      $('*[data-js="slider-4"] .btn--slide-next').removeAttr('style');
    }
    if (currentSlide == 0) {
      $('*[data-js="slider-4"] .btn--slide-prev').css('visibility', 'hidden');
    } else {
      $('*[data-js="slider-4"] .btn--slide-prev').removeAttr('style');
    }
    var filled = +$('*[data-js="slider-4"] .slider .slick-active .slider__slide').attr('data-filled');
    var mustFill = +$('*[data-js="slider-4"] .slider .slick-active .slider__slide').attr('data-must-fill');
    if (canWeGoNext(filled, mustFill)) {
      $('*[data-js="slider-4"] .btn--slide-next').removeClass('unact');
      $('*[data-js="slider-4"] button[type="submit"].btn--default').removeClass('d-none');
    } else {
      $('*[data-js="slider-4"] .btn--slide-next').addClass('unact');
      $('*[data-js="slider-4"] button[type="submit"].btn--default').addClass('d-none');
    }
  });

  $('.btn--slide-prev').on('click', function () {
    var slider = $(this).attr('data-slider-target');
    $('*[data-js="' + slider + '"] .slider').slick('slickPrev');
  });

  $('.btn--slide-next').on('click', function (e) {
    e.preventDefault();
    var slider = $(this).attr('data-slider-target');
    var filled = +$('*[data-js="' + slider + '"] .slider .slick-active .slider__slide').attr('data-filled');
    var mustFill = +$('*[data-js="' + slider + '"] .slider .slick-active .slider__slide').attr('data-must-fill');
    if (canWeGoNext(filled, mustFill)) $('*[data-js="' + slider + '"] .slider').slick('slickNext');
  });

  $('.sliders').each(function () {
    var sliders = $(this);
    $(this).find('*[data-filled]').each(function () {
      var current = $(this);
      var filled = +current.attr('data-filled');
      var mustFill = +current.attr('data-must-fill');
      $(this).find('input, select').on('change', function (e) {
        var tag = $(this).prop('tagName').toLowerCase();
        if (!$(this).hasClass('ignore')) {
          if (tag == 'select' && $(this).val()) {
            ++filled;
            current.attr('data-filled', filled);
          } else if (tag == 'input') {
            if ($(this).attr('type') == 'text' || $(this).attr('type') == 'email') {
              if (!$(this).hasClass('has-already-changed') && $(this).val().length > 1) {
                $(this).addClass('has-already-changed');
                ++filled;
              } else if ($(this).hasClass('has-already-changed') && $(this).val().length > 1) {
                filled += 0;
              } else {
                $(this).removeClass('has-already-changed');
                --filled;
              }
              current.attr('data-filled', filled);
            } else if ($(this).attr('type') == 'checkbox') {
              $(this).prop('checked') ? ++filled : --filled;
              if ($(this).prop('checked') && $(this).parent().find('input[type="text"]').length > 0) {
                ++mustFill;
                current.attr('data-must-fill', mustFill);
              } else if (!$(this).prop('checked') && $(this).parent().find('input[type="text"]').length > 0) {
                --mustFill;
                current.attr('data-must-fill', mustFill);
              }
              current.attr('data-filled', filled);
            }
          }
        }
        if (canWeGoNext(filled, mustFill)) {
          sliders.find('.btn--slide-next').removeClass('unact');
          sliders.find('button[type="submit"].btn--default').removeClass('d-none');
        } else {
          sliders.find('.btn--slide-next').addClass('unact');
          sliders.find('button[type="submit"].btn--default').addClass('d-none');
        }
      });
    });
  });

  function canWeGoNext(a, b) {
    return a == b || a > b;
  }

  $('.my-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    dots: true,
    swipe: false,
    appendDots: $(".dots-container"),
    arrows: false
  });

  if ($('.how-it-works').length > 0) {
    var bigImages = $('.how-it-works').attr('data-big-images').split(',');
    $('.blur-bg-image').css('background-image', 'url(' + bigImages[0] + ')');
  }

  var image = $('.content-line-2__image .nav .nav-link.active').attr('data-image');
  $('.content-line-2__image').find('.bg-block').css({
    'background-image': 'url("' + image + '")'
  });

  $('.content-line-2__image .nav .nav-link').on('click', function () {
    image = $(this).attr('data-image');
    $(this).parent().parent().find('.bg-block').css({
      'background-image': 'url("' + image + '")'
    });
  });

  $('.how-it-works__content .slick-dots button').each(function () {
    $(this).text(parseFloat($(this).text()) - 1);
  });

  $('.my-slider').on('afterChange', function (event, slick, currentSlide) {
    $('.how-it-works').removeClass('before-change');
  });

  $('.my-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    $('.blur-bg-image').css('background-image', 'url(' + bigImages[nextSlide] + ')');
    $('.how-it-works').addClass('before-change');
    if (nextSlide > 0) {
      $('.how-it-works__content .number-cube').addClass('show');
      $('.how-it-works__content .number-cube').text(nextSlide);
    }
    else {
      $('.how-it-works__content .number-cube').text('');
      $('.how-it-works__content .number-cube').removeClass('show');
    }
  });

  $('.left-arrow-slide').click(function () {
    $('.my-slider').slick('slickPrev');
  });

  $('.right-arrow-slide').click(function () {
    $('.my-slider').slick('slickNext');
  });

  $('.slider-main-content').slick({
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: $(".slider-main-content").attr("data-delay"),
    speed: 1500,
    fade: true,
    cssEase: 'linear',
    swipe: false,
    arrows: true,
    dots: true,
    appendDots: $('.animation--1')
  });

  $('.poll__item').on('click', function (e) {
    e.preventDefault();
    var targ = $(this).attr('href');
    if ($(this).hasClass('active')) {
      $('.poll__item').removeClass('active');
      $('.poll__item').removeClass('unactive');
      $('.poll').removeClass('active');
      setTimeout(function () {
        $(targ).removeAttr('style');
      }, 1100);
    } else {
      $('.poll__item').removeClass('active');
      $('.poll__item').addClass('unactive');
      $('.poll').addClass('active');
      $(this).removeClass('unactive');
      $(this).addClass('active');
      $(targ).css('z-index', 101);
    }
  });

  $('*[data-allow-to-select]').each(function () {
    var current = $(this);
    var allowToSelect = current.attr('data-allow-to-select');
    current.find('input[type="checkbox"]').on('change', function () {
      if ($(this).is(':checked')) {
        --allowToSelect;
        $(this).parent().addClass('checked');
      } else {
        ++allowToSelect;
        $(this).parent().removeClass('checked');
      }
      current.attr('data-allow-to-select', allowToSelect);
    });
  });

  // Select counry and cities functionality
  var url = "/wp-content/themes/well-planned/html_template/build/assets/js/countries.json";
  $.getJSON(url, function (data) {
    $('.country-and-city-selects').each(function () {
      var countries = [];
      $(this).find('select.country-select').append('<option disabled selected>Please select country</option>');
      for (country in data) {
        countries.push(country);
        $(this).find('select.country-select').append('<option value="' + country + '">' + country + '</option>');
      }
    });
  });

  // Tags select
  $('select[data-name="country-to"]').on('change', function (e) {
    var indexOfSelectedOption = $(this).prop('selectedIndex');
    var currentVal = [];
    if ($(this).parent().find('input[name="country-to"]').val() == '') {
      currentVal = [];
    } else {
      currentVal = $(this).parent().find('input[name="country-to"]').val().split(',');
    }
    currentVal.push($(this).val());
    $(this).parent().find('input[name="country-to"]').val(currentVal.join(','));
    $(this).parent().find('.country-tags').append($('<span class="country-tag">' + $(this).val() + '</span>'));
    $('.country-tag').off();
    $(this).find('option').eq(indexOfSelectedOption).attr('disabled', true);
    $('.country-tag').on('click', function () {
      var ind = $(this).index();
      var currentCountry = $(this).text();
      currentVal.splice(ind, 1);
      $(this).parent().parent().find('input[name="country-to"]').val(currentVal.join(','));
      $(this).parent().parent().find('select option[disabled]').each(function () {
        if ($(this).text() == currentCountry) $(this).removeAttr('disabled');
      });
      $(this).remove();
    });
    $(this).val(null);
  });

  var date = new Date();

  $('input.dates').daterangepicker({
    opens: 'center',
    autoApply: true,
    autoUpdateInput: true,
    startDate: moment(date).add(1, 'days'),
    endDate: moment(date).add(1, 'days')
  }).on('apply.daterangepicker', function (ev, picker) {
    $(this).attr('placeholder', picker.startDate.format('MM-DD-YYYY') + ' - ' + picker.endDate.format('MM-DD-YYYY'));
    var start = moment(picker.startDate);
    var end = moment(picker.endDate);
    var totalDays = end.diff(start, 'days');
    $(this).next().find('span').text(totalDays == 1 ? totalDays + ' day' : totalDays + ' days');
  });

  $('input.dates').val('').trigger('change');

  $('.sliders .btn--slide-next').addClass('unact');

  /* Range slider */
  $('input[type="range"]').rangeslider({
    // Feature detection the default is `true`.
    // Set this to `false` if you want to use
    // the polyfill also in Browsers which support
    // the native <input type="range"> element.
    polyfill: false,

    // Default CSS classes
    rangeClass: 'rangeslider',
    disabledClass: 'rangeslider--disabled',
    horizontalClass: 'rangeslider--horizontal',
    fillClass: 'rangeslider__fill',
    handleClass: 'rangeslider__handle',

    // Callback function
    onInit: function () {
      $rangeEl = this.$range;
      // add value label to handle
      var $handle = $rangeEl.find('.rangeslider__handle');
      var handleValue = '<div class="rangeslider__handle__value">' + this.value + '</div>';
      $handle.append(handleValue);

      // get range index labels 
      var rangeLabels = this.$element.attr('labels');
      rangeLabels = rangeLabels.split(', ');

      // add labels
      $rangeEl.append('<div class="rangeslider__labels"></div>');
      $(rangeLabels).each(function (index, value) {
        $rangeEl.find('.rangeslider__labels').append('<span class="rangeslider__labels__label">' + value + '</span>');
      })
    },

    // Callback function
    onSlide: function (position, value) {
      var $handle = this.$range.find('.rangeslider__handle__value');
      $handle.text(this.value);
    },

    // Callback function
    onSlideEnd: function (position, value) {
    }
  });

  $('.get-started form .container').mCustomScrollbar();

  // Cookies bar
  function cookiesPolicyBar() {
    $('#cookieAcceptBar').show();
    //Assign cookie on click
    $('#cookieAcceptBarConfirm').on('click', function () {
      var date = new Date;
      date.setDate(date.getDate() + 7);
      document.cookie = "cookieAgreement=true; path=/; expires=" + date.toUTCString();
      $('#cookieAcceptBar').fadeOut(300);
    });
  }

  /**
   * Show cookies disclaimer if needed cookie not isset
   */

  if (getCookie('cookieAgreement') !== 'true') {
    cookiesPolicyBar();
  }

  function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

});