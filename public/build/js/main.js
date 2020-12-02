$(document).ready(function () {

	$('.burger').click(function () {
		$('.header__nav_mob').slideToggle()
	})

	$('.block__head').click(function () {
		$(this).parent().find('.block__body').slideToggle()
		$(this).toggleClass('block__head_click')
	})


	$('.close-popup').click(function () {
		// $('.bgd__popup').fadeOut()
			$('.bgd__popup').animate({
				zIndex: '-3',
				opacity: '0',
			}, 300)
	})
	$(document).mouseup(function (e){ 
		var div = $(".popup"); 
		if (!div.is(e.target) 
			&& div.has(e.target).length === 0) { 
			$('.bgd__popup').animate({
				zIndex: '-3',
				opacity: '0',
			}, 300)
		}
	});

	$('a').click(function (e) {
		if ($(this).data('popup') != undefined){
			e.preventDefault()
			// $(`.popup-${$(this).data('popup')}`).fadeIn()
			// $(`.popup-${$(this).data('popup')}`).find('popup').fadeIn()
			$('.bgd__popup').animate({
				zIndex: '4',
			}, 10)
			$('.bgd__popup').animate({
				opacity: '1',
			}, 300)
		}
	})
	$('div').click(function (e) {
		if ($(this).data('popup') != undefined){
			e.preventDefault()
			// $(`.popup-${$(this).data('popup')}`).fadeIn()
			// $(`.popup-${$(this).data('popup')}`).find('popup').fadeIn()
			$('.bgd__popup').animate({
				zIndex: '4',
			}, 10)
			$('.bgd__popup').animate({
				opacity: '1',
			}, 300)
		}
	})


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

	$('.slider__popup').slick({
		dots: true,
		arrows: false
	})

	$('.map__slider').slick({
		slidesToShow: 1,
		fade: true,
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