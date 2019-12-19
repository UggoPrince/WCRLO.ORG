/*AOS.init({
    duration: 800,
    easing: 'slide'
});*/

$(window).on('load', function() {

	var $nav = $(".header-section");
	$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
});

(function($) {

   "use strict"



   var fullHeight = function() {

       $('.js-fullheight').css('height', $(window).height());
       $(window).resize(function(){
           $('.js-fullheight').css('height', $(window).height());
       });

   };
   fullHeight();

   // loader
   var loader = function() {
       setTimeout(function() { 
           if($('#wcrlo-loader').length > 0) {
               $('#wcrlo-loader').removeClass('show');
           }
       }, 1);
   };
   loader();


   $('nav .dropdown').hover(function(){
       var $this = $(this);
       // 	 timer;
       // clearTimeout(timer);
       $this.addClass('show');
       $this.find('> a').attr('aria-expanded', true);
       // $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
       $this.find('.dropdown-menu').addClass('show');
   }, function(){
       var $this = $(this);
           // timer;
       // timer = setTimeout(function(){
           $this.removeClass('show');
           $this.find('> a').attr('aria-expanded', false);
           // $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
           $this.find('.dropdown-menu').removeClass('show');
       // }, 100);
   });


   $('#dropdown04').on('show.bs.dropdown', function () {
     console.log('show');
   });

   var isMobile = {
       Android: function() {
           return navigator.userAgent.match(/Android/i);
       },
           BlackBerry: function() {
           return navigator.userAgent.match(/BlackBerry/i);
       },
           iOS: function() {
           return navigator.userAgent.match(/iPhone|iPad|iPod/i);
       },
           Opera: function() {
           return navigator.userAgent.match(/Opera Mini/i);
       },
           Windows: function() {
           return navigator.userAgent.match(/IEMobile/i);
       },
           any: function() {
           return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
       }
   };


   var contentWayPoint = function() {
       var i = 0;
       $('.wcrlo-animate').waypoint( function( direction ) {

           if( direction === 'down' && !$(this.element).hasClass('wcrlo-animated') ) {
               i++;

               $(this.element).addClass('item-animate');
               setTimeout(function(){

                   $('.wcrlo-animate.item-animate').each(function(k){
                       var el = $(this);
                       setTimeout( function () {
                        console.log('yes');
                           var effect = el.data('animate-effect');
                           if ( effect === 'fadeIn') {
                               el.addClass('fadeIn wcrlo-animated');
                           } else if ( effect === 'fadeInLeft') {
                               el.addClass('fadeInLeft wcrlo-animated');
                           } else if ( effect === 'fadeInRight') {
                               el.addClass('fadeInRight wcrlo-animated');
                           } else {
                               el.addClass('fadeInUp wcrlo-animated');
                           }
                           el.removeClass('item-animate');
                       },  k * 50, 'easeInOutExpo' );
                   });
                   
               }, 100);
               
           }

       } , { offset: '95%' } );
   };
   //contentWayPoint();


   // navigation
   var OnePageNav = function() {
       $(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on('click', function(e) {
            e.preventDefault();

            var hash = this.hash,
                    navToggler = $('.navbar-toggler');
            $('html, body').animate({
           scrollTop: $(hash).offset().top
         }, 700, 'easeInOutExpo', function(){
           window.location.hash = hash;
         });


         if ( navToggler.is(':visible') ) {
             navToggler.click();
         }
       });
       $('body').on('activate.bs.scrollspy', function () {
         console.log('nice');
       })
   };
   //OnePageNav();


   function doAnimations(elems) {
    //Cache the animationend event in a variable
    var animEndEv = "webkitAnimationEnd animationend";

    elems.each(function() {
      var $this = $(this),
        $animationType = $this.data("animation");
        $this.addClass('wcrlo-animater');
        $this.addClass($animationType).one(animEndEv, function() {
            $this.removeClass($animationType);
            $this.removeClass('wcrlo-animater');
        });
    });
  }

  //Variables on page load
  var $myCarousel = $("#wcrloBanners"),
    $firstAnimatingElems = $myCarousel
      .find(".carousel-item:first")
      .find("[data-animation ^= 'animated']");

  //Initialize carousel
  $myCarousel.carousel();

  //Animate captions in first slide on page load
  doAnimations($firstAnimatingElems);

   $('#wcrloBanners').on('slide.bs.carousel', function (e) {
    var $animatingElems = $(e.relatedTarget).find(
        "[data-animation ^= 'animated']"
      );
      doAnimations($animatingElems);
  })

})(jQuery);
let navIsOpen = false;
const openNav = (nav) => {
    if (navIsOpen) {
        nav.style.width = 0+'%';
        navIsOpen = false;
    } else {
        nav.style.width = 65+'%';
        navIsOpen = true;
    }
};

const navButton = document.getElementById('toggle-button');
const nav = document.getElementById('site-navigation');
const navClose = document.getElementById('nav-close');
const mainTag = document.getElementsByClassName('mainTag')[0];
navButton.addEventListener('click', () => {
    openNav(nav);
    //mainTag.addEventListener('click', () => {console.log('yes');openNav(nav);});
});
navClose.addEventListener('click', () => {
    openNav(nav);
});

const setBg = document.querySelectorAll('.set-bg');
setBg.forEach((setBgElem) => {
    const bg = setBgElem.dataset.setbg
    setBgElem.style.backgroundImage = `url(${bg})`;
});

const elements = document.getElementsByClassName('wcrlo-animate');
	for (let i = 0; i < elements.length; i++) {
		new Waypoint({
			element: elements[i],
			handler: function(direction) {
				if (direction === 'down' && !elements[i].classList.contains('wcrlo-animated')) {
					setTimeout(() => {
						this.element.classList.add('fadeInUp');
						this.element.classList.add('wcrlo-animated');
					}, (i * 70));
				}
			},
			offset: '100%'
		});
	}

