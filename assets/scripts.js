jQuery(document).ready(function($) {

$('.bun').click(function(event) {
	/* Act on the event */
	event.preventDefault();
	$('.navleft').toggleClass('is-active');
	$('body').toggleClass('is-hidden');
});
$('.close-nav').click(function(event) {
	/* Act on the event */
	event.preventDefault();
	$('.navleft').toggleClass('is-active');
	$('body').toggleClass('is-hidden');
	$('.menu-item-has-children .nav-plus, .sub-menu').removeClass('is-active');
});


//child
			$('.menu-item-has-children > .nav-plus').click(function(event) {
				event.preventDefault();
				$(this).toggleClass('is-active');
				$(this).next('.sub-menu').toggleClass('is-active');
			});

});