$(document).ready(function () {
	$('.carousel2').carousel({
	  interval: 2000
	});


	$('.top__slider').slick({
		slidesToShow: 3,
		swipeToSlide: true,
		arrows: true,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					arrows: false,
					dots: true
				}
			}
		]
	})

	$('.map__slider').slick({
		slidesToShow: 1,
		swipeToSlide: true,
		arrows: true,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					arrows: false,
					dots: true
				}
			}
		]
	})
})