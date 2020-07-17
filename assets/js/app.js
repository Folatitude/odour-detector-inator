setTimeout(function(){
  $('.loader-bg').fadeToggle()
}, 3000);
$(document).ready(function(){
  $(window).scroll(function(){
    if($(window).scrollTop() > 300){
      $('.scroll-size').css({
        "opacity": "1", "pointer-events": "auto"
      })
    } else {
      $('ion-icon').css({
        "opacity": "0", "pointer-events": "none"
      })
    }
  });
  $('ion-icon').click(function(){
    $('html').animate({scrollTop: 0}, 500);
  });
});
// swiperjs
var swiper = new Swiper('.swiper-container', {
	effect: 'coverflow',
	grabCursor: true,
	centeredSlides: true,
	slidesPerView: 'auto',
	spaceBetween: 0,
	coverflowEffect: {
		rotate: 0,
		stretch: 0,
		depth: 190,
		modifier: 1,
		slideShadows: false,
	},
	centeredSlides: true,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	loop: true,
	freeMode: true,
	loopedSlides: 5,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});
new WOW().init();
const scroll = new SmoothScroll('.navbar a[href*="#"]', {
		speed: 500
  });
  // $('body')
  // .awesomeCursor('hand-o-up', {
  //   color: #006B38,
  //   size: 24,
  //   rotate: 45
  // });