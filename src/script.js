$ = jQuery.noConflict(); 

let windowSize = false;
let windowHeight = $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height() * 0.33;


$( document ).ready(function() {

  $('.c-page-services__dropdown-list-item-title').click(function() {
    var dropDownTitle = $(this).attr('key');
    $(this).toggleClass('c-page-services__dropdown-list-item-active-title').siblings().removeClass('c-page-services__dropdown-list-item-active-title');

    $('.c-page-services__wrapper').each(function() {
      if($(this).attr('key') == dropDownTitle) {
        $(this).toggleClass('is-open').siblings().removeClass('is-open');
      }
    });


  });

  $('.menu-item-has-children').click(function(){
    $('.sub-menu').toggleClass('sub-menu__active');
    $(this).toggleClass('expanded');
  });
  
  //Mobile Menu 
$('.mobile-header__menu-icon').click(function() {
  $(this).toggleClass('open');
  $('.mobile-menu-overlay').toggleClass('mobile-menu-overlay__active');
});

$('.mobile-menu-overlay__close-icon').click(function() {
  $('.mobile-menu-overlay').removeClass('mobile-menu-overlay__active');
});

$('.c-homepage_slides').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  slidesToShow: 1,
  cssEase: 'linear',
});



$('.c-homepage__testimonials__slides').slick({
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  slidesToShow: 1,
  cssEase: 'linear',
  prevArrow: $('.c-homepage__testimonials__slide__prev-arrow'),
  nextArrow: $('.c-homepage__testimonials__slide__next-arrow')
});

  
    if ( jQuery(".gutenberg-styles > *").length &&
    !(window.location.hash != "" && jQuery(window.location.hash).length)
  ) {
    gutenbergScrollAnims = true;
    jQuery(".gutenberg-styles > *").each(function () {
      let offset = jQuery(this).get(0).getBoundingClientRect().top;
      jQuery(this).data("offset", offset);
      jQuery(this).addClass("to-reveal");
    });
  
    let numRevealed = 0;
    jQuery(".gutenberg-styles .to-reveal").each(function () {
      if (
        jQuery(window).scrollTop() + windowHeight - blockTriggerHeight >=
        jQuery(this).data("offset")
      ) {
        numRevealed++;
        const thisRef = $(this);
        setTimeout(function () {
          thisRef.removeClass("to-reveal");
          thisRef.addClass("revealed");
        }, 700 + numRevealed * 600);
      }
    });
  }
  });
  
  $(window).scroll(() => {
  let scrolled = $(window).scrollTop();
  // gutenberg scroll anims
  if (gutenbergScrollAnims) {
    $(".gutenberg-styles .to-reveal").each(function () {
      if (
        scrolled + windowHeight - blockTriggerHeight >=
        $(this).data("offset")
      ) {
        $(this).removeClass("to-reveal");
        $(this).addClass("revealed");
      }
    });
  }
  });
  
  $(window).resize(() => {
  if (
    jQuery(".gutenberg-styles > *").length &&
    !(window.location.hash != "" && jQuery(window.location.hash).length)
  ) {
    gutenbergScrollAnims = true;
    jQuery(".gutenberg-styles > *").each(function () {
      let offset = jQuery(this).get(0).getBoundingClientRect().top;
      jQuery(this).data("offset", offset);
      jQuery(this).addClass("to-reveal");
    });
  
    let numRevealed = 0;
    jQuery(".gutenberg-styles .to-reveal").each(function () {
      if (
        jQuery(window).scrollTop() + (windowHeight - blockTriggerHeight) >=
        jQuery(this).data("offset")
      ) {
        numRevealed++;
        const thisRef = $(this);
        setTimeout(function () {
          thisRef.removeClass("to-reveal");
          thisRef.addClass("revealed");
        }, 700 + numRevealed * 600);
      }
    });
  }


    
});