"use strict";
const active_home = () => $("#li_home").addClass("active");
const active_portfolio = () => $("#li_portfolio").addClass("active");
const active_services = () => $("#li_services").addClass("active");
const active_about = () => $("#li_about").addClass("active");
const active_contact = () => $("#li_contact").addClass("active");
const innit_page = function () {
  $("#li_home").removeClass("active");
  $("#li_portfolio").removeClass("active");
  $("#li_services").removeClass("active");
  $("#li_about").removeClass("active");
  $("#li_contact").removeClass("active");
  /*------------------
        Preloader
    --------------------*/
  $(window).on("load", function () {
    $(".load-circle-back, .load-circle-fore, .load-text, .loading").fadeOut(500);
    $(".loading").css("z-index", "9");
    /*------------------
            Portfolio filter
        --------------------*/
    $(".portfolio__filter li").on("click", function () {
      $(".portfolio__filter li").removeClass("active");
      $(this).addClass("active");
    });
    if ($(".portfolio__gallery").length > 0) {
      var containerEl = document.querySelector(".portfolio__gallery");
      var mixer = mixitup(containerEl);
    }
  });
  /*------------------
        Background Set
    --------------------*/
  $(".set-bg").each(function () {
    var bg = $(this).data("setbg");
    $(this).css("background-image", "url(" + bg + ")");
  });
  //Masonary
  $(".work__gallery").masonry({
    itemSelector: ".work__item",
    columnWidth: ".grid-sizer",
    gutter: 10,
  });
  /*------------------
    Navigation
  --------------------*/
  $(".mobile-menu").slicknav({
    prependTo: "#mobile-menu-wrap",
    allowParentLinks: true,
  });
  /*------------------
    Hero Slider
  --------------------*/
  $(".hero__slider").owlCarousel({
    loop: true,
    dots: true,
    mouseDrag: false,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    items: 1,
    margin: 0,
    smartSpeed: 6000,
    autoHeight: false,
    autoplay: true,
  });
  var dot = $(".hero__slider .owl-dot");
  dot.each(function () {
    var index = $(this).index() + 1;
    if (index < 10) {
      $(this).html("0").append(index);
    } else {
      $(this).html(index);
    }
  });
  /*------------------
        Testimonial Slider
    --------------------*/
  $(".testimonial__slider").owlCarousel({
    loop: true,
    margin: 0,
    items: 3,
    dots: true,
    dotsEach: 2,
    smartSpeed: 3000,
    autoHeight: false,
    autoplay: true,
    responsive: {
      992: {
        items: 3,
      },
      768: {
        items: 2,
      },
      320: {
        items: 1,
      },
    },
  });
  /*------------------
        Latest Slider
    --------------------*/
  $(".latest__slider").owlCarousel({
    loop: true,
    margin: 0,
    items: 3,
    dots: true,
    dotsEach: 2,
    smartSpeed: 3000,
    autoHeight: false,
    autoplay: true,
    responsive: {
      992: {
        items: 3,
      },
      768: {
        items: 2,
      },
      320: {
        items: 1,
      },
    },
  });
  /*------------------
        Logo Slider
    --------------------*/
  $(".logo__carousel").owlCarousel({
    loop: true,
    margin: 100,
    items: 6,
    dots: false,
    smartSpeed: 1000,
    autoHeight: false,
    autoplay: true,
    responsive: {
      992: {
        items: 5,
      },
      768: {
        items: 4,
      },
      480: {
        items: 3,
      },
      320: {
        items: 2,
      },
    },
  });
  /*------------------
        Video Popup
    --------------------*/
  $(".video-popup").magnificPopup({
    type: "iframe",
  });
  /*------------------
        Counter
    --------------------*/
  $(".counter__item__text h2").each(function () {
    $(this).prop("Counter", 0).animate(
      { Counter: $(this).text() },
      { duration: 2000, easing: "swing", step: function (now) { $(this).text(Math.ceil(now)); } }
    );
  });
};
