/**
 * Global variables
 */
"use strict";

var userAgent = navigator.userAgent.toLowerCase(),
    initialDate = new Date(),

    $document = $(document),
    $window = $(window),
    $html = $("html"),

    isDesktop = $html.hasClass("desktop"),
    isIE = userAgent.indexOf("msie") != -1 ? parseInt(userAgent.split("msie")[1]) : userAgent.indexOf("trident") != -1 ? 11 : userAgent.indexOf("edge") != -1 ? 12 : false,
    isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
    isMac = navigator.platform.match(/(Mac|iPhone|iPod|iPad)/i) ? true : false,
    isTouch = "ontouchstart" in window,
    c3ChartsArray = [],
    onloadCaptchaCallback,

    plugins = {
      pointerEvents: isIE < 11 ? "js/pointer-events.min.js" : false,
      smoothScroll: $html.hasClass("use--smoothscroll") ? "js/smoothscroll.min.js" : false,
      bootstrapTooltip: $("[data-toggle='tooltip']"),
      bootstrapTabs: $(".tabs"),
      rdParallax: $(".rd-parallax"),
      rdAudioPlayer: $(".rd-audio"),
      rdVideoPlayer: $(".rd-video-player"),
      responsiveTabs: $(".responsive-tabs"),
      rdGoogleMaps: $("#rd-google-map"),
      rdInputLabel: $(".form-label"),
      rdNavbar: $(".rd-navbar"),
      rdVideoBG: $(".rd-video"),
      regula: $("[data-constraints]"),
      stepper: $("input[type='number']"),
      radio: $("input[type='radio']"),
      checkbox: $(".checkbox-custom"),
      toggles: $(".toggle-custom"),
      facebookplugin: $('#fb-root'),
      owl: $(".owl-carousel"),
      swiper: $(".swiper-slider"),
      counter: $(".counter"),
      photoSwipeGallery: $("[data-photo-swipe-item]"),
      flickrfeed: $(".flickr"),
      twitterfeed: $(".twitter"),
      progressBar: $(".progress-linear"),
      circleProgress: $(".progress-bar-circle"),
      isotope: $(".isotope"),
      countDown: $(".countdown"),
      stacktable: $("table[data-responsive='true']"),
      customToggle: $("[data-custom-toggle]"),
      customWaypoints: $('[data-custom-scroll-to]'),
      resizable: $(".resizable"),
      selectFilter: $("select"),
      dateCountdown: $('.DateCountdown'),
      calendar: $(".rd-calendar"),
      productThumb: $(".product-thumbnails"),
      imgZoom: $(".img-zoom"),
      facebookfeed: $(".facebook"),
      pageLoader: $(".page-loader"),
      search: $(".rd-search"),
      searchResults: $('.rd-search-results'),
      rdMailForm: $(".rd-mailform"),
      iframeEmbed: $("iframe.embed-responsive-item"),
      bootstrapDateTimePicker: $("[data-time-picker]"),
      checkoutRDTabs: $(".checkout-tabs"),
      galleryRDTabs: $(".gallery-tabs"),
      navbarToggle: $(".rd-navbar-toggle")
    };

/**
 * Initialize All Scripts
 */
$document.ready(function () {

  /**
   * isScrolledIntoView
   * @description  check the element whas been scrolled into the view
   */
  function isScrolledIntoView(elem) {
    var $window = $(window);
    return elem.offset().top + elem.outerHeight() >= $window.scrollTop() && elem.offset().top <= $window.scrollTop() + $window.height();
  }


  /**
   * initOnView
   * @description  calls a function when element has been scrolled into the view
   */
  function lazyInit(element, func) {
    var $win = jQuery(window);
    $win.on('load scroll', function () {
      if ((!element.hasClass('lazy-loaded') && (isScrolledIntoView(element)))) {
        func.call(element);
        element.addClass('lazy-loaded');
      }
    });
  }

  /**
   * resizeOnImageLoad
   * @description  calls a resize event when imageloaded
   */
  function resizeOnImageLoad(image) {
    image.onload = function () {
      $window.trigger("resize");
    }
  }


  /**
   * getSwiperHeight
   * @description  calculate the height of swiper slider basing on data attr
   */
  function getSwiperHeight(object, attr) {
    var val = object.attr("data-" + attr),
        dim;
    if (!val) {
      return undefined;
    }

    dim = val.match(/(px)|(%)|(vh)$/i);

    if (dim.length) {
      switch (dim[0]) {
        case "px":
          return parseFloat(val);
        case "vh":
          return $(window).height() * (parseFloat(val) / 100);
        case "%":
          return object.width() * (parseFloat(val) / 100);
      }
    } else {
      return undefined;
    }
  }


  /**
   * toggleSwiperInnerVideos
   * @description  toggle swiper videos on active slides
   // */
  function toggleSwiperInnerVideos(swiper) {
    var videos;

    $.grep(swiper.slides, function (element, index) {
      var $slide = $(element),
          video;

      if (index === swiper.activeIndex) {
        videos = $slide.find("video");
        if (videos.length) {
          videos.get(0).play();
        }
      } else {
        $slide.find("video").each(function () {
          this.pause();
        });
      }
    });
  }


  /**
   * toggleSwiperCaptionAnimation
   * @description  toggle swiper animations on active slides
   */
  function toggleSwiperCaptionAnimation(swiper) {
    if (isIE && isIE < 10) {
      return;
    }

    var prevSlide = $(swiper.container),
        nextSlide = $(swiper.slides[swiper.activeIndex]);

    prevSlide
        .find("[data-caption-animate]")
        .each(function () {
          var $this = $(this);
          $this
              .removeClass("animated")
              .removeClass($this.attr("data-caption-animate"))
              .addClass("not-animated");
        });

    nextSlide
        .find("[data-caption-animate]")
        .each(function () {
          var $this = $(this),
              delay = $this.attr("data-caption-delay");

          setTimeout(function () {
            $this
                .removeClass("not-animated")
                .addClass($this.attr("data-caption-animate"))
                .addClass("animated");
          }, delay ? parseInt(delay) : 0);
        });
  }

  /**
   * makeParallax
   * @description  create swiper parallax scrolling effect
   */
  function makeParallax(el, speed, wrapper, prevScroll) {
    var scrollY = window.scrollY || window.pageYOffset;

    if (prevScroll != scrollY) {
      prevScroll = scrollY;
      el.addClass('no-transition');
      el[0].style['transform'] = 'translate3d(0,' + -scrollY * (1 - speed) + 'px,0)';
      el.height();
      el.removeClass('no-transition');

      if (el.attr('data-fade') === 'true') {
        var bound = el[0].getBoundingClientRect(),
            offsetTop = bound.top * 2 + scrollY,
            sceneHeight = wrapper.outerHeight(),
            sceneDevider = wrapper.offset().top + sceneHeight / 2.0,
            layerDevider = offsetTop + el.outerHeight() / 2.0,
            pos = sceneHeight / 6.0,
            opacity;
        if (sceneDevider + pos > layerDevider && sceneDevider - pos < layerDevider) {
          el[0].style["opacity"] = 1;
        } else {
          if (sceneDevider - pos < layerDevider) {
            opacity = 1 + ((sceneDevider + pos - layerDevider) / sceneHeight / 3.0 * 5);
          } else {
            opacity = 1 - ((sceneDevider - pos - layerDevider) / sceneHeight / 3.0 * 5);
          }
          el[0].style["opacity"] = opacity < 0 ? 0 : opacity > 1 ? 1 : opacity.toFixed(2);
        }
      }
    }

    requestAnimationFrame(function () {
      makeParallax(el, speed, wrapper, prevScroll);
    });
  }

  /**
   * Live Search
   * @description  create live search results
   */
  function liveSearch(options) {
    $('#' + options.live).removeClass('cleared').html();
    options.current++;
    options.spin.addClass('loading');
    $.get(handler, {
      s: decodeURI(options.term),
      liveSearch: options.live,
      dataType: "html",
      liveCount: options.liveCount,
      filter: options.filter,
      template: options.template
    }, function (data) {
      options.processed++;
      var live = $('#' + options.live);
      if (options.processed == options.current && !live.hasClass('cleared')) {
        live.find('> #search-results').removeClass('active');
        live.html(data);
        setTimeout(function () {
          live.find('> #search-results').addClass('active');
        }, 50);
      }
      options.spin.parents('.rd-search').find('.input-group-addon').removeClass('loading');
    })
  }

  /**
   * attachFormValidator
   * @description  attach form validation to elements
   */
  function attachFormValidator(elements) {
    for (var i = 0; i < elements.length; i++) {
      var o = $(elements[i]), v;
      o.addClass("form-control-has-validation").after("<span class='form-validation'></span>");
      v = o.parent().find(".form-validation");
      if (v.is(":last-child")) {
        o.addClass("form-control-last-child");
      }
    }

    elements
        .on('input change propertychange blur', function (e) {
          var $this = $(this), results;

          if (e.type != "blur") {
            if (!$this.parent().hasClass("has-error")) {
              return;
            }
          }

          if ($this.parents('.rd-mailform').hasClass('success')) {
            return;
          }

          if ((results = $this.regula('validate')).length) {
            for (i = 0; i < results.length; i++) {
              $this.siblings(".form-validation").text(results[i].message).parent().addClass("has-error")
            }
          } else {
            $this.siblings(".form-validation").text("").parent().removeClass("has-error")
          }
        })
        .regula('bind');
  }

  /**
   * isValidated
   * @description  check if all elemnts pass validation
   */
  function isValidated(elements, captcha) {
    var results, errors = 0;

    if (elements.length) {
      for (j = 0; j < elements.length; j++) {

        var $input = $(elements[j]);
        if ((results = $input.regula('validate')).length) {
          for (k = 0; k < results.length; k++) {
            errors++;
            $input.siblings(".form-validation").text(results[k].message).parent().addClass("has-error");
          }
        } else {
          $input.siblings(".form-validation").text("").parent().removeClass("has-error")
        }
      }

      if (captcha) {
        if (captcha.length) {
          return validateReCaptcha(captcha) && errors == 0
        }
      }

      return errors == 0;
    }
    return true;
  }


  /**
   * validateReCaptcha
   * @description  validate google reCaptcha
   */
  function validateReCaptcha(captcha) {
      var $captchaToken = captcha.find('.g-recaptcha-response').val();

      if ($captchaToken == '') {
        captcha
            .siblings('.form-validation')
            .html('Please, prove that you are not robot.')
            .addClass('active');
        captcha
            .closest('.form-group')
            .addClass('has-error');

        captcha.bind('propertychange', function () {
          var $this = $(this),
              $captchaToken = $this.find('.g-recaptcha-response').val();

          if($captchaToken != '') {
            $this
                .closest('.form-group')
                .removeClass('has-error');
            $this
                .siblings('.form-validation')
                .removeClass('active')
                .html('');
            $this.unbind('propertychange');
          }
        });

        return false;
      }

    return true;
  }


  /**
   * onloadCaptchaCallback
   * @description  init google reCaptcha
   */
  onloadCaptchaCallback = function () {
    for (i = 0; i < plugins.captcha.length; i++) {
      var $capthcaItem = $(plugins.captcha[i]);

      grecaptcha.render(
          $capthcaItem.attr('id'),
          {
            sitekey: $capthcaItem.attr('data-sitekey'),
            size: $capthcaItem.attr('data-size') ? $capthcaItem.attr('data-size') : 'normal',
            theme: $capthcaItem.attr('data-theme') ? $capthcaItem.attr('data-theme') : 'light',
            callback: function (e) {
              $('.recaptcha').trigger('propertychange');
            }
          }
      );
      $capthcaItem.after("<span class='form-validation'></span>");
    }
  }

  /**
   * parseJSONObject
   * @description  return JSON object witch methods
   */
  function parseJSONObject(element, attr) {
    return JSON.parse($(element).attr(attr), function (key, value) {
      if ((typeof value) === 'string') {
        if (value.indexOf('function') == 0) {
          return eval('(' + value + ')');
        }
      }
      return value;
    });
  }

  /**
   * TimeCircles
   * @description  Enable TimeCircles plugin
   */
  if (plugins.dateCountdown.length) {
    var i;
    for (i = 0; i < plugins.dateCountdown.length; i++) {
      var dateCountdownItem = $(plugins.dateCountdown[i]),
          time = {
            "Days": {
              "text": "Days",
              "color": "#3256a4",
              "show": true
            },
            "Hours": {
              "text": "Hours",
              "color": "#3256a4",
              "show": true
            },
            "Minutes": {
              "text": "Minutes",
              "color": "#3256a4",
              "show": true
            },
            "Seconds": {
              "text": "Seconds",
              "color": "#3256a4",
              "show": true
            }
          };
      dateCountdownItem.TimeCircles({
        fg_width: 0.045,
        circle_bg_color: "#f2f6ff",
        bg_width: 0.9
      });
      $(window).on('load resize orientationchange', function () {
        if (window.innerWidth < 479) {
          dateCountdownItem.TimeCircles({
            time: {
              Days: {
                color: "#3256a4",
                show: true
              },
              Hours: {
                color: "#3256a4",
                show: true
              },
              Minutes: {
                color: "#3256a4",
                show: true
              },
              Seconds: {show: false}
            }
          }).rebuild();
        } else if (window.innerWidth < 991) {
          dateCountdownItem.TimeCircles({
            time: {
              Days: {
                color: "#3256a4",
                show: true
              },
              Hours: {
                color: "#3256a4",
                show: true
              },
              Minutes: {
                color: "#3256a4",
                show: true
              },
              Seconds: {show: false}
            }
          }).rebuild();
        } else {
          dateCountdownItem.TimeCircles({time: time}).rebuild();
        }
      });
    }
  }


  /**
   * TimeCircles
   * @description  Enable TimeCircles plugin in context dark theme
   */
  if ($("section").find(".context-dark").length) {
    if (plugins.dateCountdown.length) {
      var i;
      for (i = 0; i < plugins.dateCountdown.length; i++) {
        var dateCountdownItem = $(plugins.dateCountdown[i]),
            time = {
              "Days": {
                "text": "Days",
                "color": "#92a6d1",
                "show": true
              },
              "Hours": {
                "text": "Hours",
                "color": "#92a6d1",
                "show": true
              },
              "Minutes": {
                "text": "Minutes",
                "color": "#92a6d1",
                "show": true
              },
              "Seconds": {
                "text": "Seconds",
                "color": "#92a6d1",
                "show": true
              }
            };
        dateCountdownItem.TimeCircles({
          fg_width: 0.045,
          circle_bg_color: "#f2f6ff",
          bg_width: 0.9
        });
        $(window).on('load resize orientationchange', function () {
          if (window.innerWidth < 479) {
            dateCountdownItem.TimeCircles({
              time: {
                Days: {
                  color: "#92a6d1",
                  show: true
                },
                Hours: {
                  color: "#92a6d1",
                  show: true
                },
                Minutes: {
                  color: "#92a6d1",
                  show: true
                },
                Seconds: {show: false}
              }
            }).rebuild();
          } else if (window.innerWidth < 991) {
            dateCountdownItem.TimeCircles({
              time: {
                Days: {
                  color: "#92a6d1",
                  show: true
                },
                Hours: {
                  color: "#92a6d1",
                  show: true
                },
                Minutes: {
                  color: "#92a6d1",
                  show: true
                },
                Seconds: {show: false}
              }
            }).rebuild();
          } else {
            dateCountdownItem.TimeCircles({time: time}).rebuild();
          }
        });
      }
    }
  }


  /**
   * makeUniqueRandom
   * @description  make random for gallery tabs
   */
  function makeUniqueRandom(count) {
    if (!uniqueRandoms.length) {
      for (var i = 0; i < count; i++) {
        uniqueRandoms.push(i);
      }
    }
    var index = Math.floor(Math.random() * uniqueRandoms.length);
    var val = uniqueRandoms[index];
    uniqueRandoms.splice(index, 1);
    return val;
  }

  /**
   * makeVisible
   * @description  set class to gallery tabs to make it visible
   */
  function makeVisible(el) {
    var count = el.length,
        k = 0,
        step = 2.5;
    for (var i = 0; i < count; i++) {
      timer = setTimeout(function () {
        var rand = makeUniqueRandom(count);
        el.eq(rand).addClass('visible');
      }, k * 35);
      k += step;
    }
    timer2 = setTimeout(function () {
      el.not('.visible').addClass('visible');
    }, count * step * 35)
  }

  /**
   * makeInVisible
   * @description  set class to gallery tabs to make it invisible
   */
  function makeInvisible() {
    var el = $('.image.visible');
    el.removeClass('visible');
    uniqueRandoms = [];
    clearTimeout(timer);
    clearTimeout(timer2);
  }

  /**
   * IE Polyfills
   * @description  Adds some loosing functionality to IE browsers
   */
  if (isIE) {
    if (isIE < 10) {
      $html.addClass("lt-ie-10");
    }

    if (isIE < 11) {
      if (plugins.pointerEvents) {
        $.getScript(plugins.pointerEvents)
            .done(function () {
              $html.addClass("ie-10");
              PointerEventsPolyfill.initialize({});
            });
      }
    }

    if (isIE === 11) {
      $("html").addClass("ie-11");
    }

    if (isIE === 12) {
      $("html").addClass("ie-edge");
    }
  }

  /**
   * Swiper 3.1.7
   * @description  Enable Swiper Slider
   */
  if (plugins.swiper.length) {
    plugins.swiper.each(function () {
      var s = $(this);

      var pag = s.find(".swiper-pagination"),
          next = s.find(".swiper-button-next"),
          prev = s.find(".swiper-button-prev"),
          bar = s.find(".swiper-scrollbar"),
          h = getSwiperHeight(plugins.swiper, "height"), mh = getSwiperHeight(plugins.swiper, "min-height"),
          parallax = s.parents('.rd-parallax').length;

      s.find(".swiper-slide")
          .each(function () {
            var $this = $(this),
                url;

            if (url = $this.attr("data-slide-bg")) {
              $this.css({
                "background-image": "url(" + url + ")",
                "background-size": "cover"
              })
            }

          })
          .end()
          .find("[data-caption-animate]")
          .addClass("not-animated")
          .end()
          .swiper({
            autoplay: s.attr('data-autoplay') === "true" ? 5000 : false,
            direction: s.attr('data-direction') ? s.attr('data-direction') : "horizontal",
            effect: s.attr('data-slide-effect') ? s.attr('data-slide-effect') : "slide",
            speed: s.attr('data-slide-speed') ? s.attr('data-slide-speed') : 600,
            keyboardControl: s.attr('data-keyboard') === "true",
            mousewheelControl: s.attr('data-mousewheel') === "true",
            mousewheelReleaseOnEdges: s.attr('data-mousewheel-release') === "true",
            nextButton: next.length ? next.get(0) : null,
            prevButton: prev.length ? prev.get(0) : null,
            pagination: pag.length ? pag.get(0) : null,
            simulateTouch: false,
            paginationClickable: pag.length ? pag.attr("data-clickable") !== "false" : false,
            paginationBulletRender: pag.length ? pag.attr("data-index-bullet") === "true" ? function (index, className) {
              return '<span class="' + className + '">' + (index + 1) + '</span>';
            } : null : null,
            scrollbar: bar.length ? bar.get(0) : null,
            scrollbarDraggable: bar.length ? bar.attr("data-draggable") !== "false" : true,
            scrollbarHide: bar.length ? bar.attr("data-draggable") === "false" : false,
            loop: s.attr('data-loop') !== "false",
            loopAdditionalSlides: 0,
            loopedSlides: 0,
            onTransitionStart: function (swiper) {
              toggleSwiperInnerVideos(swiper);
            },
            onTransitionEnd: function (swiper) {
              toggleSwiperCaptionAnimation(swiper);
              $(window).trigger("resize");
            },

            onInit: function (swiper) {
              if (plugins.pageLoader.length) {
                var srcFirst = $("#page-loader").attr("data-slide-bg"),
                    image = document.createElement('img');

                image.src = srcFirst;
                image.onload = function () {
                  plugins.pageLoader.addClass("loaded");
                };
              }
              toggleSwiperInnerVideos(swiper);
              toggleSwiperCaptionAnimation(swiper);

              // Create parallax effect on swiper caption
              s.find(".swiper-parallax")
                  .each(function () {
                    var $this = $(this),
                        speed;

                    if (parallax && !isIE && !isMobile) {
                      if (speed = $this.attr("data-speed")) {
                        makeParallax($this, speed, s, false);
                      }
                    }
                  });
              $(window).on('resize', function () {
                swiper.update(true);
              })
            },
            onSlideChangeStart: function (swiper) {
              var activeSlideIndex, slidesCount, thumbsToShow = 3;

              activeSlideIndex = swiper.activeIndex;
              slidesCount = swiper.slides.not(".swiper-slide-duplicate").length;

              //If there is not enough slides
              if (slidesCount < thumbsToShow)
                return false;

              //Fix index count
              if (activeSlideIndex === slidesCount + 1) {
                activeSlideIndex = 1;
              } else if (activeSlideIndex === 0) {
                activeSlideIndex = slidesCount;
              }

              //Lopp that adds background to thumbs
              for (var i = -thumbsToShow; i < thumbsToShow + 1; i++) {
                if (i === 0)
                  continue;

                //Previous btn thumbs
                if (i < 0) {
                  //If there is no slides before current
                  if (( activeSlideIndex + i - 1) < 0) {
                    $(swiper.container).find('.swiper-button-prev .preview__img-' + Math.abs(i))
                        .css("background-image", "url(" + swiper.slides[slidesCount + i + 1].getAttribute("data-preview-bg") + ")");
                  } else {
                    $(swiper.container).find('.swiper-button-prev .preview__img-' + Math.abs(i))
                        .css("background-image", "url(" + swiper.slides[activeSlideIndex + i].getAttribute("data-preview-bg") + ")");
                  }

                  //Next btn thumbs
                } else {
                  //If there is no slides after current
                  if (activeSlideIndex + i - 1 > slidesCount) {
                    $(swiper.container).find('.swiper-button-next .preview__img-' + i)
                        .css("background-image", "url(" + swiper.slides[i].getAttribute("data-preview-bg") + ")");
                  } else {
                    $(swiper.container).find('.swiper-button-next .preview__img-' + i)
                        .css("background-image", "url(" + swiper.slides[activeSlideIndex + i].getAttribute("data-preview-bg") + ")");
                  }
                }
              }
            },
          });

      $(window)
          .on("resize", function () {
            var mh = getSwiperHeight(s, "min-height"),
                h = getSwiperHeight(s, "height");
            if (h) {
              s.css("height", mh ? mh > h ? mh : h : h);
            }
          })
          .load(function () {
            s.find("video").each(function () {
              if (!$(this).parents(".swiper-slide-active").length) {
                this.pause();
              }
            });
          })
          .trigger("resize");
    });
  }


  /**
   * Copyright Year
   * @description  Evaluates correct copyright year
   */
  var o = $("#copyright-year");
  if (o.length) {
    o.text(initialDate.getFullYear());
  }


  /**
   * Apple Macbook device
   * @description add class on Apple Macbook device
   */
  if(isMac){
    $html.addClass("mac-os");
  }


  /**
   * Circle Progress
   * @description Enable Circle Progress plugin
   */
  if (plugins.circleProgress.length) {
    var i;
    for (i = 0; i < plugins.circleProgress.length; i++) {
      var circleProgressItem = $(plugins.circleProgress[i]);
      $document
          .on("scroll", function () {
            if (!circleProgressItem.hasClass('animated')) {

              var arrayGradients = circleProgressItem.attr('data-gradient').split(",");

              circleProgressItem.circleProgress({
                value: circleProgressItem.attr('data-value'),
                size: circleProgressItem.attr('data-size') ? circleProgressItem.attr('data-size') : 175,
                fill: {gradient: arrayGradients, gradientAngle: Math.PI / 4},
                startAngle: -Math.PI / 4 * 2,
                emptyFill: $(this).attr('data-empty-fill') ? $(this).attr('data-empty-fill') : "rgb(245,245,245)"

              }).on('circle-animation-progress', function (event, progress, stepValue) {
                $(this).find('span').text(String(stepValue.toFixed(2)).replace('0.', '').replace('1.', '1'));
              });
              circleProgressItem.addClass('animated');
            }
          })
          .trigger("scroll");
    }
  }


  /**
   * Progress bar
   * @description  Enable progress bar
   */
  if (plugins.progressBar.length) {
    for (i = 0; i < plugins.progressBar.length; i++) {
      var progressBar = $(plugins.progressBar[i]);
      $window
        .on("scroll load", $.proxy(function () {
          var bar = $(this);
          if (!bar.hasClass('animated-first') && isScrolledIntoView(bar)) {
            var end = bar.attr("data-to");
            bar.find('.progress-bar-linear').css({width: end + '%'});
            bar.find('.progress-value').countTo({
              refreshInterval: 40,
              from: 0,
              to: end,
              speed: 500
            });
            bar.addClass('animated-first');
          }
        }, progressBar));
    }
  }

  /**
   * jQuery Countdown
   * @description  Enable countdown plugin
   */
  if (plugins.countDown.length) {
    var i, j;
    for (i = 0; i < plugins.countDown.length; i++) {
      var countDownItem = plugins.countDown[i],
          $countDownItem = $(countDownItem),
          d = new Date(),
          type = countDownItem.getAttribute('data-type'),
          time = countDownItem.getAttribute('data-time'),
          format = countDownItem.getAttribute('data-format'),
          settings = [];

      d.setTime(Date.parse(time)).toLocaleString();
      settings[type] = d;
      settings['format'] = format;

      if ($countDownItem.parents('.countdown-modern').length) {
        settings['onTick'] = function () {
          var section = $(this).find(".countdown-section");
          for (j = 0; j < section.length; j++) {
            $(section[section.length - j - 1]).append('<span class="countdown-letter">' + format[format.length - j - 1] + '</span>')
          }
        }
      }

      $countDownItem.countdown(settings);
    }
  }

  /**
   * Smooth scrolling
   * @description  Enables a smooth scrolling for Google Chrome (Windows)
   */
  if (plugins.smoothScroll) {
    $.getScript(plugins.smoothScroll);
  }

  /**
   * Bootstrap tabs
   * @description Activate Bootstrap Tabs
   */
  if (plugins.bootstrapTabs.length) {
    var i;
    for (i = 0; i < plugins.bootstrapTabs.length; i++) {
      var bootstrapTab = $(plugins.bootstrapTabs[i]);

      bootstrapTab.on("click", "a", function (event) {
        event.preventDefault();
        $(this).tab('show');
      });
    }
  }

  /**
   * Bootstrap Tooltips
   * @description Activate Bootstrap Tooltips
   */
  if (plugins.bootstrapTooltip.length) {
    plugins.bootstrapTooltip.tooltip();
  }

  /**
   * RD Audio player
   * @description Enables RD Audio player plugin
   */
  if (plugins.rdAudioPlayer.length) {
    var i;
    for (i = 0; i < plugins.rdAudioPlayer.length; i++) {
      $(plugins.rdAudioPlayer[i]).RDAudio();
    }
    var playlistButton = $('.rd-audio-playlist-button');
    var playlist = plugins.rdAudioPlayer.find('.rd-audio-playlist-wrap');
    if (playlistButton.length) {
      playlistButton.on('click', function (e) {
        e.preventDefault();
        plugins.rdAudioPlayer.toggleClass('playlist-show');
        if (playlist.is(':hidden')) {
          playlist.slideDown(300);
        } else {
          playlist.slideUp(300);
        }
      });
      $document.on('click', function (e) {
        if (!$(e.target).is(playlist) && playlist.find($(e.target)).length == 0 && !$(e.target).is(playlistButton)) {
          playlist.slideUp(300);
        }
      });
    }
  }


  /**
   * RD Video Player
   * @description Enables RD Video player plugin
   */
  function hidePlaylist() {
    $(".rd-video-player").removeClass("playlist-show");
  }

  function showPlaylist() {
    $(".rd-video-player").addClass("playlist-show");
  }

  if (plugins.rdVideoPlayer.length) {
    var i;
    for (i = 0; i < plugins.rdVideoPlayer.length; i++) {
      var videoItem = $(plugins.rdVideoPlayer[i]);

      $window.on("scroll", $.proxy(function () {
        var video = $(this);
        if (isDesktop && !video.hasClass("played") && video.hasClass('play-on-scroll') && isScrolledIntoView(video)) {
          video.find("video")[0].play();
          video.addClass("played");
        }
      }, videoItem));

      videoItem.RDVideoPlayer({
        callbacks: {
          onPlay: hidePlaylist,
          onPaused: showPlaylist,
          onEnded: showPlaylist
        }
      });
      $window.on('load', showPlaylist);

      var volumeWrap = $(".rd-video-volume-wrap");

      volumeWrap.on("mouseenter", function () {
        $(this).addClass("hover")
      });

      volumeWrap.on("mouseleave", function () {
        $(this).removeClass("hover")
      });

      if (isTouch) {
        volumeWrap.find(".rd-video-volume").on("click", function () {
          $(this).toggleClass("hover")
        });
        $document.on("click", function (e) {
          if (!$(e.target).is(volumeWrap) && $(e.target).parents(volumeWrap).length == 0) {
            volumeWrap.find(".rd-video-volume").removeClass("hover")
          }
        })
      }
    }
  }


  /**
   * Responsive Tabs
   * @description Enables Responsive Tabs plugin
   */
  if (plugins.responsiveTabs.length) {
    var i = 0;
    for (i = 0; i < plugins.responsiveTabs.length; i++) {
      var $this = $(plugins.responsiveTabs[i]);
      $this.easyResponsiveTabs({
        type: $this.attr("data-type"),
        tabidentify: $this.find(".resp-tabs-list").attr("data-group") || "tab"
      });
    }
  }


  /**
   * RD Google Maps
   * @description Enables RD Google Maps plugin
   */
  if (plugins.rdGoogleMaps.length) {
    $.getScript("http://maps.google.com/maps/api/js?sensor=false&libraries=geometry,places&v=3.7", function () {
      var head = document.getElementsByTagName('head')[0],
          insertBefore = head.insertBefore;

      head.insertBefore = function (newElement, referenceElement) {
        if (newElement.href && newElement.href.indexOf('//fonts.googleapis.com/css?family=Roboto') != -1 || newElement.innerHTML.indexOf('gm-style') != -1) {
          return;
        }
        insertBefore.call(head, newElement, referenceElement);
      };

      lazyInit(plugins.rdGoogleMaps, function () {
        var styles = plugins.rdGoogleMaps.attr("data-styles");

        plugins.rdGoogleMaps.googleMap({
          styles: styles ? JSON.parse(styles) : {},
          onInit: function (map) {
            var inputAddress = $('#rd-google-map-address');

            if (inputAddress.length) {
              var input = inputAddress;
              var geocoder = new google.maps.Geocoder();
              var marker = new google.maps.Marker(
                  {
                    map: map,
                    icon: "images/gmap_marker.png",
                  }
              );
              var autocomplete = new google.maps.places.Autocomplete(inputAddress[0]);
              autocomplete.bindTo('bounds', map);
              inputAddress.attr('placeholder', '');
              inputAddress.on('change', function () {
                $("#rd-google-map-address-submit").trigger('click');
              });

              $("#rd-google-map-address-submit").on('click', function (e) {
                e.preventDefault();
                var address = input.val();
                geocoder.geocode({'address': address}, function (results, status) {
                  if (status == google.maps.GeocoderStatus.OK) {
                    var latitude = results[0].geometry.location.lat();
                    var longitude = results[0].geometry.location.lng();

                    map.setCenter(new google.maps.LatLng(
                        parseFloat(latitude),
                        parseFloat(longitude)
                    ));
                    marker.setPosition(new google.maps.LatLng(
                        parseFloat(latitude),
                        parseFloat(longitude)
                    ))
                  }
                });
              });
            }
          }
        })
      });
    });
  }

  /**
   * RD Flickr Feed
   * @description Enables RD Flickr Feed plugin
   */
  if (plugins.flickrfeed.length > 0) {
    var i;
    for (i = 0; i < plugins.flickrfeed.length; i++) {
      var flickrfeedItem = $(plugins.flickrfeed[i]);
      flickrfeedItem.RDFlickr({
        callback: function () {
          var items = flickrfeedItem.find("[data-photo-swipe-item]");

          if (items.length) {
            for (var j = 0; j < items.length; j++) {
              var image = new Image();
              image.setAttribute('data-index', j);
              image.onload = function () {
                items[this.getAttribute('data-index')].setAttribute('data-size', this.naturalWidth + 'x' + this.naturalHeight);
              };
              image.src = items[j].getAttribute('href');
            }
          }
        }
      });
    }
  }

  /**
   * RD Twitter Feed
   * @description Enables RD Twitter Feed plugin
   */
  if (plugins.twitterfeed.length > 0) {
    var i;
    for (i = 0; i < plugins.twitterfeed.length; i++) {
      var twitterfeedItem = plugins.twitterfeed[i];
      $(twitterfeedItem).RDTwitter({
        hideReplies: false,
        localTemplate: {
          avatar: "images/features/rd-twitter-post-avatar-48x48.jpg"
        },
        callback: function () {
          $window.trigger("resize");
        }
      });
    }
  }


  /**
   * RD Input Label
   * @description Enables RD Input Label Plugin
   */
  if (plugins.rdInputLabel.length) {
    plugins.rdInputLabel.RDInputLabel();
  }


  /**
   * Stepper
   * @description Enables Stepper Plugin
   */
  if (plugins.stepper.length) {
    plugins.stepper.stepper({
      labels: {
        up: "",
        down: ""
      }
    });
  }

  /**
   * Radio
   * @description Add custom styling options for input[type="radio"]
   */
  if (plugins.radio.length) {
    var i;
    for (i = 0; i < plugins.radio.length; i++) {
      var $this = $(plugins.radio[i]);
      $this.addClass("radio-custom").after("<span class='radio-custom-dummy'></span>")
    }
  }

  /**
   * Checkbox
   * @description Add custom styling options for input[type="checkbox"]
   */
  if (plugins.checkbox.length) {
    var i;
    for (i = 0; i < plugins.checkbox.length; i++) {
      var $this = $(plugins.checkbox[i]);
      $this.after("<span class='checkbox-custom-dummy'></span>")
    }
  }


  /**
   * Toggles
   * @description Make toggles from input[type="checkbox"]
   */
  if (plugins.toggles.length) {
    var i;
    for (i = 0; i < plugins.toggles.length; i++) {
      var $this = $(plugins.toggles[i]);
      $this.after("<span class='toggle-custom-dummy'></span>")
    }
  }


  /**
   * Regula
   * @description Enables Regula plugin
   */
  if (plugins.regula.length) {
    attachFormValidator(plugins.regula);
  }


  /**
   * WOW
   * @description Enables Wow animation plugin
   */
  if ($html.hasClass('desktop') && $html.hasClass("wow-animation") && $(".wow").length) {
    new WOW().init();
  }


  /**
   * jQuery Count To
   * @description Enables Count To plugin
   */
  if (plugins.counter.length) {
    var i;
    for (i = 0; i < plugins.counter.length; i++) {
      var counterItem = $(plugins.counter[i]);

      $window.on("scroll load", $.proxy(function () {
        var counter = $(this);
        if ((!counter.hasClass("animated-first")) && (isScrolledIntoView(counter))) {
          counter.countTo({
            refreshInterval: 40,
            speed: counter.attr("data-speed") || 1000
          });
          counter.addClass('animated-first');
        }
      }, counterItem))
    }
  }


  /**
   * Owl carousel
   * @description Enables Owl carousel plugin
   */
  if (plugins.owl.length) {
    var k;
    for (k = 0; k < plugins.owl.length; k++) {
      var c = $(plugins.owl[k]),
          responsive = {};

      var aliaces = ["-", "-xs-", "-sm-", "-md-", "-lg-"],
          values = [0, 480, 768, 992, 1200],
          i, j;

      for (i = 0; i < values.length; i++) {
        responsive[values[i]] = {};
        for (j = i; j >= -1; j--) {
          if (!responsive[values[i]]["items"] && c.attr("data" + aliaces[j] + "items")) {
            responsive[values[i]]["items"] = j < 0 ? 1 : parseInt(c.attr("data" + aliaces[j] + "items"));
          }
          if (!responsive[values[i]]["stagePadding"] && responsive[values[i]]["stagePadding"] !== 0 && c.attr("data" + aliaces[j] + "stage-padding")) {
            responsive[values[i]]["stagePadding"] = j < 0 ? 0 : parseInt(c.attr("data" + aliaces[j] + "stage-padding"));
          }
          if (!responsive[values[i]]["margin"] && responsive[values[i]]["margin"] !== 0 && c.attr("data" + aliaces[j] + "margin")) {
            responsive[values[i]]["margin"] = j < 0 ? 30 : parseInt(c.attr("data" + aliaces[j] + "margin"));
          }
          if (!responsive[values[i]]["dotsEach"] && responsive[values[i]]["dotsEach"] !== 0 && c.attr("data" + aliaces[j] + "dots-each")) {
            responsive[values[i]]["dotsEach"] = j < 0 ? false : parseInt(c.attr("data" + aliaces[j] + "dots-each"));
          }
        }
      }

      // Create custom Pagination
      if (c.attr('data-dots-custom')) {
        c.on("initialized.owl.carousel", function (event) {
          var carousel = $(event.currentTarget),
              customPag = $(carousel.attr("data-dots-custom")),
              active = 0;

          if (carousel.attr('data-active')) {
            active = parseInt(carousel.attr('data-active'));
          }

          carousel.trigger('to.owl.carousel', [active, 300, true]);
          customPag.find("[data-owl-item='" + active + "']").addClass("active");

          customPag.find("[data-owl-item]").on('click', function (e) {
            e.preventDefault();
            carousel.trigger('to.owl.carousel', [parseInt(this.getAttribute("data-owl-item")), 300, true]);
          });

          carousel.on("translate.owl.carousel", function (event) {
            customPag.find(".active").removeClass("active");
            customPag.find("[data-owl-item='" + event.item.index + "']").addClass("active")
          });
        });
      }

      // Create custom Navigation
      if (c.attr('data-nav-custom')) {
        c.on("initialized.owl.carousel", function (event) {
          var carousel = $(event.currentTarget),
              customNav = $(carousel.attr("data-nav-custom"));

          customNav.find("[data-owl-prev]").on('click', function (e) {
            e.preventDefault();
            carousel.trigger('prev.owl.carousel', [300]);
          });

          customNav.find("[data-owl-next]").on('click', function (e) {
            e.preventDefault();
            carousel.trigger('next.owl.carousel', [300]);
          });
        });
      }

      c.owlCarousel({
        autoplay: c.attr("data-autoplay") === "true",
        loop: c.attr("data-loop") === "true",
        items: 1,
        autoplaySpeed: 600,
        autoplayTimeout: 3000,
        dotsContainer: c.attr("data-pagination-class") || false,
        navContainer: c.attr("data-navigation-class") || false,
        mouseDrag: c.attr("data-mouse-drag") === "true",
        nav: c.attr("data-nav") === "true",
        dots: c.attr("data-dots") === "true",
        dotsEach: c.attr("data-dots-each") ? parseInt(c.attr("data-dots-each")) : false,
        responsive: responsive,
        animateOut: c.attr("data-animation-out") || false,
        navText: $.parseJSON(c.attr("data-nav-text")) || [],
        navClass: $.parseJSON(c.attr("data-nav-class")) || ['owl-prev', 'owl-next']
      });

    }
  }

  /**
   * Isotope
   * @description Enables Isotope plugin
   */
  if (plugins.isotope.length) {
    var i, j, isogroup = [];
    for (i = 0; i < plugins.isotope.length; i++) {
      var isotopeItem = plugins.isotope[i],
          filterItems = $(isotopeItem).closest('.isotope-wrap').find('[data-isotope-filter]'),
          iso = new Isotope(isotopeItem,
              {
                itemSelector: '.isotope-item',
                layoutMode: isotopeItem.getAttribute('data-isotope-layout') ? isotopeItem.getAttribute('data-isotope-layout') : 'masonry',
                filter: '*',
              }
          );

      isogroup.push(iso);

      filterItems.on("click", function (e) {
        e.preventDefault();
        var filter = $(this),
            iso = $('.isotope[data-isotope-group="' + this.getAttribute("data-isotope-group") + '"]'),
            filtersContainer = filter.closest(".isotope-filters");

        filtersContainer
            .find('.active')
            .removeClass("active");
        filter.addClass("active");

        iso.isotope({
          itemSelector: '.isotope-item',
          layoutMode: iso.attr('data-isotope-layout') ? iso.attr('data-isotope-layout') : 'masonry',
          filter: this.getAttribute("data-isotope-filter") == '*' ? '*' : '[data-filter*="' + this.getAttribute("data-isotope-filter") + '"]'
        });

        $window.trigger('resize');

        // If d3Charts contains in isotop, resize it on click.
        if (filtersContainer.hasClass('isotope-has-d3-graphs') && c3ChartsArray != undefined) {
          setTimeout(function () {
            for (var j = 0; j < c3ChartsArray.length; j++) {
              c3ChartsArray[j].resize();
            }
          }, 500);
        }

      }).eq(0).trigger("click");
    }

    $(window).on('load', function () {
      setTimeout(function () {
        var i;
        for (i = 0; i < isogroup.length; i++) {
          isogroup[i].element.className += " isotope--loaded";
          isogroup[i].layout();
        }
      }, 600);
    });
  }


  /**
   *  Enable Faceboock iframe
   */
  if (plugins.facebookplugin.length) {
    for (i = 0; i < plugins.facebookplugin.length; i++) {

      (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    }
  }


  /**
   * RD Video
   * @description Enables RD Video plugin
   */
  if (plugins.rdVideoBG.length) {
    for (i = 0; i < plugins.rdVideoBG.length; i++) {
      var videoItem = $(plugins.rdVideoBG[i]);
      videoItem.RDVideo({});
    }
  }


  /**
   * RD Navbar
   * @description Enables RD Navbar plugin
   */
  if (plugins.rdNavbar.length) {
    plugins.rdNavbar.RDNavbar({
      stickUpClone: (plugins.rdNavbar.attr("data-stick-up-clone")) ? plugins.rdNavbar.attr("data-stick-up-clone") === 'true' : false,
      stickUpOffset: (plugins.rdNavbar.attr("data-stick-up-offset")) ? plugins.rdNavbar.attr("data-stick-up-offset") : 1,
      anchorNavOffset: -78
    });
    if (plugins.rdNavbar.attr("data-body-class")) {
      document.body.className += ' ' + plugins.rdNavbar.attr("data-body-class");
    }
  }


  /**
   * PhotoSwipe Gallery
   * @description Enables PhotoSwipe Gallery plugin
   */
  if (plugins.photoSwipeGallery.length) {

    // init image click event
    $document.delegate("[data-photo-swipe-item]", "click", function (event) {
      event.preventDefault();

      var $el = $(this),
          $galleryItems = $el.parents("[data-photo-swipe-gallery]").find("a[data-photo-swipe-item]"),
          pswpElement = document.querySelectorAll('.pswp')[0],
          encounteredItems = {},
          pswpItems = [],
          options,
          pswpIndex = 0,
          pswp;

      if ($galleryItems.length == 0) {
        $galleryItems = $el;
      }

      // loop over the gallery to build up the photoswipe items
      $galleryItems.each(function () {
        var $item = $(this),
            src = $item.attr('href'),
            size = $item.attr('data-size').split('x'),
            pswdItem;

        if ($item.is(':visible')) {
          // if we have this image the first time
          if (!encounteredItems[src]) {
            // build the photoswipe item
            pswdItem = {
              src: src,
              w: parseInt(size[0], 10),
              h: parseInt(size[1], 10),
              el: $item // save link to element for getThumbBoundsFn
            };

            // store that we already had this item
            encounteredItems[src] = {
              item: pswdItem,
              index: pswpIndex
            };

            // push the item to the photoswipe list
            pswpItems.push(pswdItem);
            pswpIndex++;
          }
        }
      });

      options = {
        index: encounteredItems[$el.attr('href')].index,

        getThumbBoundsFn: function (index) {
          var $el = pswpItems[index].el,
              offset = $el.offset();

          return {
            x: offset.left,
            y: offset.top,
            w: $el.width()
          };
        }
      };

      // open the photoswipe gallery
      pswp = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, pswpItems, options);
      pswp.init();
    });
  }

  /**
   * Stacktable
   * @description Enables Stacktable plugin
   */
  if (plugins.stacktable.length) {
    var i;
    for (i = 0; i < plugins.stacktable.length; i++) {
      var stacktableItem = $(plugins.stacktable[i]);
      stacktableItem.stacktable();
    }
  }

  /**
   * Select2
   * @description Enables select2 plugin
   */
  if (plugins.selectFilter.length) {
    var i;
    for (i = 0; i < plugins.selectFilter.length; i++) {
      var select = $(plugins.selectFilter[i]);

      select.select2({
        theme: "bootstrap"
      }).next().addClass(select.attr("class").match(/(input-sm)|(input-lg)|($)/i).toString().replace(new RegExp(",", 'g'), " "));
    }
  }

  /**
   * Product Thumbnails
   * @description Enables product thumbnails
   */
  if (plugins.productThumb.length) {
    var i;
    for (i = 0; i < plugins.productThumb.length; i++) {
      var thumbnails = $(plugins.productThumb[i]);

      thumbnails.find("li").on('click', function () {
        var item = $(this);
        item.parent().find('.active').removeClass('active');
        var image = item.parents(".product").find(".product-image-area");
        image.removeClass('animateImageIn');
        image.addClass('animateImageOut');
        item.addClass('active');
        setTimeout(function () {
          var src = item.find("img").attr("src");
          if (item.attr('data-large-image')) {
            src = item.attr('data-large-image');
          }
          image.attr("src", src);
          image.removeClass('animateImageOut');
          image.addClass('animateImageIn');
        }, 300);
      })
    }
  }

  /**
   * RD Calendar
   * @description Enables RD Calendar plugin
   */
  if (plugins.calendar.length) {
    for (i = 0; i < plugins.calendar.length; i++) {
      var calendarItem = $(plugins.calendar[i]);

      calendarItem.rdCalendar({
        days: calendarItem.attr("data-days") ? c.attr("data-days").split(/\s?,\s?/i) : ['S', 'M', 'T', 'W', 'T', 'F', 'S'],
        month: calendarItem.attr("data-months") ? c.attr("data-months").split(/\s?,\s?/i) : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
      });
    }
  }

  /**
   * jQuery elevateZoom
   * @description Enables jQuery elevateZoom plugin
   */
  if (plugins.imgZoom.length) {
    for (i = 0; i < plugins.imgZoom.length; i++) {
      var zoomItem = $(plugins.imgZoom[i]);

      zoomItem.elevateZoom({
        zoomType: "inner",
        cursor: "crosshair",
        zoomWindowFadeIn: 300,
        zoomWindowFadeOut: 300,
        scrollZoom: true
      });
    }
  }

  /**
   * RD Facebook
   * @description Enables RD Facebook plugin
   */
  if (plugins.facebookfeed.length > 0) {
    for (i = 0; i < plugins.facebookfeed.length; i++) {
      var facebookfeedItem = plugins.facebookfeed[i];
      $(facebookfeedItem).RDFacebookFeed({
        callbacks: {
          postsLoaded: function () {
            var posts = $('.post-facebook');
            var i = 0;
            for (i = 0; i < posts.length; i++) {
              var $this = $(posts[i]);
              var commentBlock = $this.find('.post-comments');
              var commentBlockItem = $this.find('.post-comments [data-fb-comment]');
              var j = 0;
              for (j = 0; j < commentBlockItem.length; j++) {
                var commentItem = commentBlockItem[j];
                if (commentItem.innerHTML.trim().length == 0) {
                  $(commentItem).remove();
                }
              }
              if (commentBlock.find('[data-fb-comment]').length == 0) {
                commentBlock.remove();
              }
            }

            $window.trigger("resize");
          }
        }
      })
    }
  }

  /**
   * RD Search
   * @description Enables search
   */
  if (plugins.search.length || plugins.searchResults) {
    var handler = "bat/rd-search.php";
    var defaultTemplate = '<h5 class="search_title"><a target="_top" href="#{href}" class="search_link">#{title}</a></h5>' +
        '<p>...#{token}...</p>' +
        '<p class="match"><em>Terms matched: #{count} - URL: #{href}</em></p>';
    var defaultFilter = '*.html';

    if (plugins.search.length) {

      for (i = 0; i < plugins.search.length; i++) {
        var searchItem = $(plugins.search[i]),
            options = {
              element: searchItem,
              filter: (searchItem.attr('data-search-filter')) ? searchItem.attr('data-search-filter') : defaultFilter,
              template: (searchItem.attr('data-search-template')) ? searchItem.attr('data-search-template') : defaultTemplate,
              live: (searchItem.attr('data-search-live')) ? searchItem.attr('data-search-live') : false,
              liveCount: (searchItem.attr('data-search-live-count')) ? parseInt(searchItem.attr('data-search-live')) : 4,
              current: 0, processed: 0, timer: {}
            };

        if ($('.rd-navbar-search-toggle').length) {
          var toggle = $('.rd-navbar-search-toggle');
          toggle.on('click', function () {
            if (!($(this).hasClass('active'))) {
              searchItem.find('input').val('').trigger('propertychange');
            }
          });
        }

        if (options.live) {
          searchItem.find('input').on("keyup input propertychange", $.proxy(function () {
            this.term = this.element.find('input').val().trim();
            this.spin = this.element.find('.input-group-addon');
            clearTimeout(this.timer);

            if (this.term.length > 2) {
              this.timer = setTimeout(liveSearch(this), 200);
            } else if (this.term.length == 0) {
              $('#' + this.live).addClass('cleared').html('');
            }
          }, options, this));
        }

        searchItem.submit($.proxy(function () {
          $('<input />').attr('type', 'hidden')
              .attr('name', "filter")
              .attr('value', this.filter)
              .appendTo(this.element);
          return true;
        }, options, this))
      }
    }

    if (plugins.searchResults.length) {
      var regExp = /\?.*s=([^&]+)\&filter=([^&]+)/g;
      var match = regExp.exec(location.search);

      if (match != null) {
        $.get(handler, {
          s: decodeURI(match[1]),
          dataType: "html",
          filter: match[2],
          template: defaultTemplate,
          live: ''
        }, function (data) {
          plugins.searchResults.html(data);
        })
      }
    }
  }

  /**
   * UI To Top
   * @description Enables ToTop Button
   */
  if (isDesktop) {
    $().UItoTop({
      easingType: 'easeOutQuart',
      containerClass: 'ui-to-top icon icon-xs icon-circle icon-darker-filled mdi mdi-chevron-up'
    });
  }

  /**
   * RD Mailform
   */
  if (plugins.rdMailForm.length) {
    var i, j, k,
        msg = {
          'MF000': 'Successfully sent!',
          'MF001': 'Recipients are not set!',
          'MF002': 'Form will not work locally!',
          'MF003': 'Please, define email field in your form!',
          'MF004': 'Please, define type of your form!',
          'MF254': 'Something went wrong with PHPMailer!',
          'MF255': 'Aw, snap! Something went wrong.'
        };

    for (i = 0; i < plugins.rdMailForm.length; i++) {
      var $form = $(plugins.rdMailForm[i]),
          formHasCaptcha = false;

      $form.attr('novalidate', 'novalidate').ajaxForm({
        data: {
          "form-type": $form.attr("data-form-type") || "contact",
          "counter": i
        },
        beforeSubmit: function () {
          var form = $(plugins.rdMailForm[this.extraData.counter]),
              inputs = form.find("[data-constraints]"),
              output = $("#" + form.attr("data-form-output")),
              captcha = form.find('.recaptcha'),
              captchaFlag = true;

          output.removeClass("active error success");

          if (isValidated(inputs, captcha)) {

            // veify reCaptcha
            if(captcha.length) {
              var captchaToken = captcha.find('.g-recaptcha-response').val(),
                  captchaMsg = {
                    'CPT001': 'Please, setup you "site key" and "secret key" of reCaptcha',
                    'CPT002': 'Something wrong with google reCaptcha'
                  }

              formHasCaptcha = true;

              $.ajax({
                method: "POST",
                url: "bat/reCaptcha.php",
                data: {'g-recaptcha-response': captchaToken},
                async: false
              })
                .done(function (responceCode) {
                  if (responceCode != 'CPT000') {
                    if (output.hasClass("snackbars")) {
                      output.html('<p><span class="icon text-middle mdi mdi-check icon-xxs"></span><span>' + captchaMsg[responceCode] + '</span></p>')

                      setTimeout(function () {
                        output.removeClass("active");
                      }, 3500);

                      captchaFlag = false;
                    } else {
                      output.html(captchaMsg[responceCode]);
                    }

                    output.addClass("active");
                  }
                });
            }

            if(!captchaFlag) {
              return false;
            }

            form.addClass('form-in-process');

            if (output.hasClass("snackbars")) {
              output.html('<p><span class="icon text-middle fa fa-circle-o-notch fa-spin icon-xxs"></span><span>Sending</span></p>');
              output.addClass("active");
            }
          } else {
            return false;
          }
        },
        error: function (result) {
          var output = $("#" + $(plugins.rdMailForm[this.extraData.counter]).attr("data-form-output"));
          output.text(msg[result]);
          form.removeClass('form-in-process');

          if(formHasCaptcha) {
            grecaptcha.reset();
          }
        },
        success: function (result) {
          var form = $(plugins.rdMailForm[this.extraData.counter]),
              output = $("#" + form.attr("data-form-output"));

          form
              .addClass('success')
              .removeClass('form-in-process');

          if(formHasCaptcha) {
            grecaptcha.reset();
          }

          result = result.length == 5 ? result : 'MF255';
          output.text(msg[result]);

          if (result === "MF000") {
            if (output.hasClass("snackbars")) {
              output.html('<p><span class="icon text-middle mdi mdi-check icon-xxs"></span><span>' + msg[result] + '</span></p>');
            } else {
              output.addClass("active success");
            }
          } else {
            if (output.hasClass("snackbars")) {
              output.html(' <p class="snackbars-left"><span class="icon icon-xxs mdi mdi-alert-outline text-middle"></span><span>' + msg[result] + '</span></p>');
            } else {
              output.addClass("active error");
            }
          }

          form.clearForm();
          form.find('input, textarea').blur();

          setTimeout(function () {
            output.removeClass("active error success");
            form.removeClass('success');
          }, 3500);
        }
      });
    }
  }

  /**
   * Custom Toggles
   */
  if (plugins.customToggle.length) {
    var i;
    for (i = 0; i < plugins.customToggle.length; i++) {
      var $this = $(plugins.customToggle[i]);
      $this.on('click', function (e) {
        e.preventDefault();
        $("#" + $(this).attr('data-custom-toggle')).add(this).toggleClass('active');
      });

      if ($this.attr("data-custom-toggle-disable-on-blur") === "true") {
        $("body").on("click", $this, function (e) {
          if (e.target !== e.data[0] && $("#" + e.data.attr('data-custom-toggle')).find($(e.target)).length == 0 && e.data.find($(e.target)).length == 0) {
            $("#" + e.data.attr('data-custom-toggle')).add(e.data[0]).removeClass('active');
          }
        })
      }
    }
  }


/**
 *  Custom scroll
 *  @description change class when is scroll to some id
 */
  if ($('#section-change-color').length) {
    if (plugins.navbarToggle.length) {
      if ($(window).width() > 1182) {
        for (i = 0; i < plugins.navbarToggle.length; i++) {
          var $navbarToggle = $(plugins.navbarToggle[i]),
              $changeColor = $('#section-change-color'),
              $navbarToogleInv = $changeColor.offset().top - '60';

          if (window.pageYOffset >= $navbarToogleInv) {
            $navbarToggle.addClass("rd-navbar-toggle-inverse");
          }

          $(window).on('scroll', function () {
            if (window.pageYOffset >= $navbarToogleInv) {
              $navbarToggle.addClass("rd-navbar-toggle-inverse");
            }
            else {
              $navbarToggle.removeClass("rd-navbar-toggle-inverse");
            }
          });
        }
      }
    }
  }


  /**
   * Custom Waypoints
   */
  if (plugins.customWaypoints.length) {
    var i;
    $document.delegate("[data-custom-scroll-to]", "click", function (e) {
      e.preventDefault();
      $("body, html").stop().animate({
        scrollTop: $("#" + $(this).attr('data-custom-scroll-to')).offset().top
      }, 1000, function () {
        $(window).trigger("resize");
      });
    });
  }

  /**
   * Bootstrap Date time picker
   */
  if (plugins.bootstrapDateTimePicker.length) {
    var i;
    for (i = 0; i < plugins.bootstrapDateTimePicker.length; i++) {
      var $dateTimePicker = $(plugins.bootstrapDateTimePicker[i]);
      var options = {};

      options['format'] = 'dddd DD MMMM YYYY - HH:mm';
      if ($dateTimePicker.attr("data-time-picker") == "date") {
        options['format'] = 'dddd DD MMMM YYYY';
        options['minDate'] = new Date();
      } else if ($dateTimePicker.attr("data-time-picker") == "time") {
        options['format'] = 'HH:mm';
      }

      options["time"] = ($dateTimePicker.attr("data-time-picker") != "date");
      options["date"] = ($dateTimePicker.attr("data-time-picker") != "time");
      options["shortTime"] = true;

      $dateTimePicker.bootstrapMaterialDatePicker(options);
    }
  }

  /**
   * Checkout RD Material Tabs
   */
  if (plugins.checkoutRDTabs.length) {
    var i, step = 0;
    for (i = 0; i < plugins.checkoutRDTabs.length; i++) {
      var checkoutTab = $(plugins.checkoutRDTabs[i]);

      checkoutTab.RDMaterialTabs({
        dragList: true,
        dragContent: false,
        items: 1,
        marginContent: 10,
        margin: 0,
        responsive: {
          480: {
            items: 2
          },
          768: {
            dragList: false,
            items: 3
          }
        },
        callbacks: {
          onChangeStart: function (active, indexTo) {
            if (indexTo > step + 1) {
              return false;
            } else if (indexTo == step + 1) {
              for (var j = 0; j < this.$content.find(".rd-material-tab").length; j++) {
                if (j <= step) {
                  var inputs = this.$content.find(".rd-material-tab").eq(j).find("[data-constraints]");

                  if (!isValidated(inputs)) {
                    this.setContentTransition(this, this.options.speed)
                    this.moveTo(j);
                    return false
                  }
                }
              }
              if (indexTo > step) step = indexTo;
            }

          },
          onChangeEnd: function () {

          },
          onInit: function (tabs) {
            attachFormValidator(tabs.$element.find("[data-constraints]"));

            $('.checkout-step-btn').on("click", function (e) {
              e.preventDefault();
              var index = this.getAttribute("data-index-to"),
                  inputs = tabs.$content.find(".rd-material-tab").eq(index - 1).find("[data-constraints]");

              if (isValidated(inputs)) {
                tabs.setContentTransition(tabs, tabs.options.speed);
                tabs.moveTo(parseInt(index));
                if (index > step) step = index;
              }
            });
          }
        }
      });
    }
  }


  /**
   * RD Parallax
   * @description Enables RD Parallax plugin
   */
  if (plugins.rdParallax.length) {
    var i;
    $.RDParallax();

    if (!isIE && !isMobile) {
      $(window).on("scroll", function () {
        for (i = 0; i < plugins.rdParallax.length; i++) {
          var parallax = $(plugins.rdParallax[i]);
          if (isScrolledIntoView(parallax)) {
            parallax.find(".rd-parallax-inner").css("position", "fixed");
          } else {
            parallax.find(".rd-parallax-inner").css("position", "absolute");
          }
        }
      });
    }

    $("a[href='#']").on("click", function (e) {
      setTimeout(function () {
        $(window).trigger("resize");
      }, 300);
    });
  }

  /**
   * Gallery RD Material Tabs
  */
  if (plugins.galleryRDTabs.length) {
    var uniqueRandoms = [];
    var timer = false,
        timer2 = false;
    plugins.galleryRDTabs.RDMaterialTabs({
      responsive: {
        0: {
          items: 3
        },
        768: {
          margin: 50
        },
        992: {
          margin: 100,
          items: 4
        },
        1200: {
          items: 5
        },
        1600: {
          items: 6
        }
      },
      callbacks: {
        onInit: function () {
          plugins.galleryRDTabs.addClass('loaded');
          if ($html.hasClass('desktop')) {
            makeVisible(plugins.galleryRDTabs.find('.rd-material-tab:first-child .image'));
          }
        },
        onChangeStart: function () {
          if ($html.hasClass('desktop')) {
            makeInvisible();
          }
        },
        onChangeEnd: function () {
          if ($html.hasClass('desktop')) {
            makeVisible(plugins.galleryRDTabs.find('.rd-material-tab-active .image'));
          }
        }
      }
    });
    $window.trigger("resize");
  }
});