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
    loop: true,
    speed: 3000,
    // autoplay: {
    //   delay: 4000,
    //   disableOnInteraction: false,
    // }
  });

  /* ****************** 메인 ********************** */
  $(function () {
  
    function setCurrentSlide(ele,index,cssClass){
      $(cssClass + " .swiper-slide").removeClass("active");
      $(cssClass + " .swiper-slide").attr("aria-selected","false");
      ele.addClass("active");
      ele.attr("aria-selected","true");
    }
    
    //check for anchor
    var locationHash = document.location.hash;
  
    //Open Tab to location hash
    if ($(locationHash).length) {
      console.log("exists");
    } else {
      console.log("no hash");
    }
    
  
    
    //find each component
    $('.tabcontainer').each(function(i) {
      
      //add unique id to tab container
      $(this).attr('id', 'tabcontainer-' + i);
      //cache unique id
      var el = '#tabcontainer-' + i;
      //add unique class to the tab list
      $(this).find('.swiper1').addClass('navinstance-' + i);
      $(this).find('.swiper2').addClass('panelinstance-' + i);
      var tabNavClass = '.navinstance-' + i;
      var tabPnlClass = '.panelinstance-' + i;
      
      var mqls = [ // list of window.matchMedia() queries
        window.matchMedia("(max-width: 480px)"),
        window.matchMedia("(max-width: 979px)")
      ]
  
     
  
      //swiper stuff
      var swiper1 = new Swiper(tabNavClass, {
        slidesPerView: 7,
        paginationClickable: true,
        hashNavigation: true,
        spaceBetween: 2,
        freeMode: true,
        loop: false,
        noSwiping: true,
        noSwipingClass: 'swiper-no-swiping',
        observer: true,
        onTab:function(swiper){
          var n = swiper1.clickedIndex;
          alert(1);
        },
        breakpoints: {
          // when window width is <= 480px
          480: {
            slidesPerView: 1
          },
          // when window width is <= 980px
          980: {
            slidesPerView: 4
          }
        }
      });
      swiper1.slides.each(function(index,val){
        var ele=$(this);
        ele.on("click",function(){
          setCurrentSlide(ele,index,tabNavClass);
          swiper2.slideTo(index, 500, false);
        });
      });
  
      var swiper2 = new Swiper (tabPnlClass, {
        direction: 'horizontal',
        loop: false,
        autoHeight: true,
        observer: true,
        onSlideChangeEnd: function(swiper){
          var n=swiper.activeIndex;
          setCurrentSlide($(tabNavClass + " .swiper-slide").eq(n),n,tabNavClass);
          swiper1.slideTo(n, 500, false);
        },
        breakpoints: {
          // when window width is <= 480px
          480: {
            direction: 'vertical',
            noSwiping: true,
            noSwipingClass: 'swiper-no-swiping'
          }
        }
      });
  
      if (locationHash) {
        swiper2.slideTo(swiper1.activeIndex);
      }
      
      function mediaqueryresponse(mql) {
        if(mqls[0].matches) {
          //Mobile Mode
          $('.swiper-container').addClass('swiper-no-swiping');
          $('.swiper-wrapper').addClass('swiper-no-swiping');
          $('.swiper-slide').addClass('swiper-no-swiping');
        } 
        else if (mqls[1].matches) {
          //Tablet Mode
          $('.swiper-container').removeClass('swiper-no-swiping');
          $('.swiper-wrapper').removeClass('swiper-no-swiping');
          $('.swiper-slide').removeClass('swiper-no-swiping');
        }
        else {
          //Desktop
        }
      }
  
      for (var i=0; i<mqls.length; i++){ 
          mediaqueryresponse(mqls[i]);
          mqls[i].addListener(mediaqueryresponse); // call handler function whenever the media query is triggered
      }
    });
  });

  /* ****************** 헤더 ********************** */
  $(window).scroll(function(){
    if($(this).scrollTop() > 10 ) {
        $('header.header').addClass('on');
      } else {
        $('header.header').removeClass('on');
      }

  });

  $('').on('mouseover', function(){
      $('').addClass('active');
    });
  $('').on('mouseleave', function(){
    $('').removeClass('active');
    });


/////////////////////////////////////////////////
var swiper = new Swiper(".mySwiper.swiper01", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".mySwiper.swiper02", {
  effect: 'fade',
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

