$(function() { // document ready

	
	var $slickSurgeryTypes = $('.block-surgery-types__items');
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

	// physicians 
	var $slickDoctors = $('.block-physcicians__head-shots');
	var $slickDoctorsText = $('.block-physcicians__text-items');
	if( $slickDoctors.length > 0 ){
		var imagesPath = js_theme_vars.image_path;
		$slickDoctors.slick({
			arrows: true,
			centerMode: true,
			centerPadding: '20px',
			variableWidth: true,
			mobileFirst: true,
			infinite: true,
			prevArrow: '<button class="slide-left slick-arrow"><img src="'+ imagesPath +'/arrow-left.svg"></button>',
			nextArrow: '<button class="slide-right slick-arrow"><img src="'+ imagesPath +'/arrow-right.svg"></button>',
			asNavFor: $slickDoctorsText,
			appendArrows: $slickDoctors.parent().find('.has-arrows'),
			responsive: [{
				breakpoint: 767,
      	settings: {
					arrows: true,
        	slidesToShow: 6,
					centerMode: false,
					variableWidth: false,
					focusOnSelect: true
      	}
			}]
		});	
	}
	if( $slickDoctorsText.length > 0 ){
		$slickDoctorsText.slick({
			arrows: false,
			asNavFor: $slickDoctors
		});
	}


	var $inMedia = $('.block-in-media__images');
	if ($inMedia.length > 0) {
	$inMedia.slick({
			arrows: false,
			centerMode: true,
			centerPadding: '20px',
			variableWidth: true,
			mobileFirst: true,
			infinite: true,
			responsive: [{
				breakpoint: 767,
				settings: 'unslick'
			}]
		});
	} 

});


