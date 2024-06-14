(function($) {

	var	$window = $(window),
		$body = $('body');

	// Breakpoints.
		breakpoints({
			xlarge:  [ '1281px',  '1680px' ],
			large:   [ '981px',   '1280px' ],
			medium:  [ '737px',   '980px'  ],
			small:   [ null,      '736px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Dropdowns.
		$('#nav > ul').dropotron({
			mode: 'fade',
			noOpenerFade: true,
			alignment: 'center',
			detach: false
		});

	// Nav.

		// Title Bar.
			$(
				'<div id="titleBar">' +
				'<div class="col-sm-8" id="logo">' +
				'<a href="#navPanel" class="toggle"></a>' +
				'<span class="title">' + $('#logo h1').html() + '</span>' +
							'</div>' +
							'<div class="col-sm-4" id="logo">' +
							
							'<img src="./images/logoo.png" width="100px" height="100px" alt=""/>' +
						
							'</div>' +
					
					
				'</div>'
			)
				.appendTo($body);

		// Panel.
			$(
				'<div id="navPanel">' +
					'<nav>' +
						$('#nav').navList() +
					'</nav>' +
				'</div>'
			)
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'left',
					target: $body,
					visibleClass: 'navPanel-visible'
				});

})(jQuery);

$(document).ready(function(){
	$('.carousel').slick({
	  speed: 500,
	  slidesToShow: 6,
	  slidesToScroll: 4,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  dots:true,
	  centerMode: true,
	  responsive: [{
		breakpoint: 1024,
		settings: {
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  // centerMode: true,
  
		}
  
	  }, {
		breakpoint: 800,
		settings: {
		  slidesToShow: 2,
		  slidesToScroll: 2,
		  dots: true,
		  infinite: true,
  
		}
	  },  {
		breakpoint: 480,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  dots: true,
		  infinite: true,
		  autoplay: true,
		  autoplaySpeed: 2000,
		}
	  }]
	});
  });

  $(document).ready(function(){
	$('.carousel1').slick({
	  speed: 500,
	  slidesToShow: 1,
	  slidesToScroll: 4,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  dots:true,
	  centerMode: true,
	  responsive: [{
		breakpoint: 1024,
		settings: {
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  // centerMode: true,
  
		}
  
	  }, {
		breakpoint: 800,
		settings: {
		  slidesToShow: 2,
		  slidesToScroll: 2,
		  dots: true,
		  infinite: true,
  
		}
	  },  {
		breakpoint: 480,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  dots: true,
		  infinite: true,
		  autoplay: true,
		  autoplaySpeed: 2000,
		}
	  }]
	});
  });

// Proven

$(document).ready(function(){
	$('.carousel5').slick({
	  speed: 500,
	  slidesToShow: 3,
	  slidesToScroll: 4,
	  autoplay: false,
	  autoplaySpeed: 2000,
	  dots:true,
	  centerMode: true,
	  responsive: [{
		breakpoint: 1024,
		settings: {
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  // centerMode: true,
  
		}
  
	  }, {
		breakpoint: 800,
		settings: {
		  slidesToShow: 2,
		  slidesToScroll: 2,
		  dots: true,
		  infinite: true,
  
		}
	  },  {
		breakpoint: 480,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  dots: true,
		  infinite: true,
		  autoplay: true,
		  autoplaySpeed: 2000,
		}
	  }]
	});
  });
  


// slick slider
$(document).ready(function(){
$('.slider-single').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	autoplay: true,
  autoplaySpeed: 2000,
	fade: false,
	adaptiveHeight: true,
	infinite: false,
   useTransform: true,
	speed: 400,
	cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
	responsive: [{
		breakpoint: 1024,
		settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
		}
	}, {
		breakpoint: 640,
		settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
	   }
	}, {
		breakpoint: 420,
		settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
   }
	}]
});

$('.slider-nav')
	.on('init', function(event, slick) {
		$('.slider-nav .slick-slide.slick-current').addClass('is-active');
	})
	.slick({
		slidesToShow: 7,
		slidesToScroll: 7,
		dots: false,
		focusOnSelect: false,
		infinite: false,
		responsive: [{
			breakpoint: 1024,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 5,
			}
		}, {
			breakpoint: 640,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 4,
		   }
		}, {
			breakpoint: 420,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
	   }
		}]
	});

$('.slider-single').on('afterChange', function(event, slick, currentSlide) {
	$('.slider-nav').slick('slickGoTo', currentSlide);
	var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
	$('.slider-nav .slick-slide.is-active').removeClass('is-active');
	$(currrentNavSlideElem).addClass('is-active');
});

$('.slider-nav').on('click', '.slick-slide', function(event) {
	event.preventDefault();
	var goToSingleSlide = $(this).data('slick-index');

	$('.slider-single').slick('slickGoTo', goToSingleSlide);
}); });
// slider end

// Milestone function
$(document).ready(function(){
$('.counter').counterUp({
	delay: 10,
	time: 2000
  });
  $('.counter').addClass('animated fadeInDownBig');
  $('h3').addClass('animated fadeIn');
});


// My js popup
$('.open-popup').on('click', function() {
	$('.overlay').addClass('shown');
  });
  
  $('.popup-close').on('click', function() {
	$('.overlay').removeClass('shown');
  });
  $('.btn_yes').on('click', function() {
	$('.overlay').removeClass('shown');
  });
  $(document).on('keyup', function(event) {
	if (event.which == 27) { // esc
		$('.overlay').removeClass('shown');
	};
  });