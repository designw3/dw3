/* ****************** 스크롤부드럽게 ********************** */
/* ****************** 스크롤부드럽게 ********************** */
$(document).ready(function () {
  $("html").easeScroll({
    frameRate: 60,
    animationTime: 2000,
    stepSize: 90,
    pulseAlgorithm: !0,
    pulseScale: 8,
    pulseNormalize: 1,
    accelerationDelta: 20,
    accelerationMax: 1,
    keyboardSupport: !0,
    arrowScroll: 50,
    behavior: 'smooth',
  });
});

/* ****************** 메인슬라이드 ********************** */
/* ****************** 메인 ********************** */
var swiper = new Swiper("#main .sec01 .mySwiper", {
    slidesPerView: "auto",
    // loop: true,
    speed: 3000,
    effect:'fade',
    // autoplay: {
    //   delay: 4000,
    //   disableOnInteraction: false,
    // }
  });

  /* ****************** 메인 ********************** */
  var swiper = new Swiper("#main .sec04 .mySwiper", {
    slidesPerView: "auto",
    // loop: true,
    speed: 3000,
    // autoplay: {
    //   delay: 4000,
    //   disableOnInteraction: false,
    // },
    navigation: {
      nextEl: "#main .sec04 .swiper-button-next",
      prevEl: "#main .sec04 .swiper-button-prev",
    },
  });

  /* ****************** 헤더 ********************** */
  $(window).scroll(function(){
    if($(this).scrollTop() > 10 ) {
        $('').addClass('on');
      } else {
        $('').removeClass('on');
      }

  });

  $('').on('mouseover', function(){
      $('').addClass('active');
    });
  $('').on('mouseleave', function(){
    $('').removeClass('active');
    });
