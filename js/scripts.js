$(function() { // document ready

	$slickSurgeryTypes = $('.block-surgery-types__items');
	if ($slickSurgeryTypes.length > 0) {
		var $slickSurgeryLeft = $slickSurgeryTypes.parent().find('.slide-left');
		var $slickSurgeryRight = $slickSurgeryTypes.parent().find('.slide-right');
		$slickSurgeryTypes.slick({
			arrows: true,
			centerMode: true,
			centerPadding: '20px',
			variableWidth: true,
			mobileFirst: true,
			infinite: true,
			prevArrow : $slickSurgeryLeft,
			nextArrow : $slickSurgeryRight,
			responsive: [{
				breakpoint: 767,
				settings: 'unslick'
			}]
		});
	} 

});


