$ = jQuery.noConflict(); 

let windowSize = false;
let windowHeight = $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height() * 0.33;


$( document ).ready(function() {

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

$('.c-payment-terms__list-item-title').click(function() {
  var paymentTitle = $(this).attr('key');
  $(this).toggleClass('c-payment-terms__list-item-active-title').siblings().removeClass('c-payment-terms__list-item-active-title');

  $('.c-payment-terms__wrapper').each(function() {
    if($(this).attr('key') == paymentTitle) {
      $(this).toggleClass('is-open').siblings().removeClass('is-open');
    }
  });
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

  //Pages -- Pricing
  $('.c-payment-terms__list-item-title').click(function() {
    var paymentTitle = $(this).attr('key');
    $(this).toggleClass('c-payment-terms__list-item-active-title').siblings().removeClass('c-payment-terms__list-item-active-title');

    $('.c-payment-terms__wrapper').each(function() {
      if($(this).attr('key') == paymentTitle) {
        $(this).toggleClass('is-open').siblings().removeClass('is-open');
      }
    });
  });

  
    
});