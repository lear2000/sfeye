<!-- 
	note: will need to add responsive images for backgrounds
 -->

 <!-- <img class="lazyload" data-src="<?php echo get_template_directory_uri(  );?>/images/hero-1-mobile.jpg" alt=""> -->
<section class="block-hero has-background lazyload" role="img"
data-bg="<?php echo get_template_directory_uri();?>/images/hero-1-mobile.jpg" 
data-bgset="<?php echo get_template_directory_uri();?>/images/hero-1-mobile.jpg [(max-width: 766px)] | <?php echo get_template_directory_uri();?>/images/hero-1.jpg [(min-width: 767px)]"
>
	<div class="layout-container">
		<div class="block-hero__content color-white text-center text-left--m">

			<div class="block-hero__logo hide show--m">
				<img src="<?php echo get_template_directory_uri();?>/images/logo-1.png" alt="logo-1">
			</div>
			<h1 class="is-heading">Custom Vision Correction, <span>Tailored to Your Needs</span></h1>
			<div class="block-hero__text">
				<p>From cataract surgery and corneal treatments, to vision correction surgeries such as Visian ICL and LASIK, our team of expert eye doctors at San Francisco Eye Institute are committed to providing our patients with top quality eye care.</p>
			</div>
			<div class="block-hero__btn">
				<a href="" class="btn">Request a Consultation</a>
			</div>
		</div>
	</div>
</section>
