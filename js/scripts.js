// @koala-prepend "jquery-3.1.1.slim.min.js"
// @koala-prepend "slick.min.js"

(function ($) {
	"use strict"

    $("iframe").wrap("<div class='video-container'/>");

	$('.slider-upper').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-lower'
	});
	
	$('.slider-lower').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-upper',
		dots: true,
		centerMode: true,
		focusOnSelect: true
	});

}(jQuery));