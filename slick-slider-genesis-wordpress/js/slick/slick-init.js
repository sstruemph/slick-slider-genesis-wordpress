jQuery( function($) {
	$('.slick-full').slick({
		arrows:true,
		dots:true,
        lazyLoad: 'progressive',
		centerMode: true,
		centerPadding: '0px',
		fade: true,
		speed: 700,
		infinite: true,
		autoplay: true,
	});
});

jQuery(function( $ ){
	$('.responsive-carousel').slick({
	  dots: false,
	  autoplay: true,
	  lazyLoad: 'progressive',
	  speed: 600,
	  arrows:true,
	  infinite:true,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
			lazyLoad: 'progressive',
			arrows:true,
			infinite: true,
			dots: false
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			arrows:true,
			dots: false,
			slidesToShow: 2,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			arrows:true,
			dots: false,
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ]
	});
});