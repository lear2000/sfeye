<section class="headerwbg" style="background-image: url(<?php bloginfo('template_directory');?>/images/hero-2.jpg);">
	<div class="mobile-header-img" style="background-image: url(<?php bloginfo('template_directory');?>/images/mobile-hero.jpg);"></div>
	<div class="container" role="banner">
		<div class="htop">
		<span class="logo"><img src="<?php bloginfo('template_directory');?>/images/logo.svg" alt="San Francisco Eye Institute" width="413" height="71"/></span>
		<hr />
		<h1><?php single_post_title(); ?></h1>
		</div>
		<div class="breadcrumb">
			<?php echo fs_breadcrumb(); ?>
		</div>
	</div>
</section>