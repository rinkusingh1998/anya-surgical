// search box js start 
$(document).ready(function(e) {

  $(".search-box").click(function (e) {
    $(".search_bar_form_chattle input").toggleClass("active_class");
  });
});
// search box js end

// animation

  AOS.init({
      duration: 2000,
    once: false
  });
    //

    
    // language
    function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}

// 
$(document).ready(function () {
  $('.active-class').click(function () {
    $('.mega_div_box li a').addClass('active-li');
   
  });
});


// 
/**/

  $('#testimonial-slider').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    autoplay:true,
    nav:true,
    mouseDrag:true,
    navText:['<i class="fa fa-angle-left"></i>' , '<i class="fa fa-angle-right"></i>'],
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
});

/**/


$('#clientslg-slider').owlCarousel({
  loop:true,
  margin:10,
  dots:false,
  autoplay:true,
  nav:true,
  mouseDrag:true,
  navText:['<i class="fa fa-angle-left"></i>' , '<i class="fa fa-angle-right"></i>'],
  autoplay:true,
  responsive:{
      0:{
          items:2
      },
      600:{
          items:2
      },
      1000:{
          items:6
      }
  }
});

/**/
