<section class="navbar">
	<div class="navleft">
		<a href="<?php bloginfo('url');?>/"><img width="17" height="17" src="<?php bloginfo('template_directory');?>/images/home-icon.svg" alt="home icon"><span>Home</span></a>
		<nav>
			<?php
			wp_nav_menu( array(
			    'menu' => 'Header Menu',
			    'container' => ''
			) );
			 ?>
		</nav>
	</div>
	<div class="navright">
		<a class="location" href="<?php bloginfo('url');?>/our-locations"><img width="11" height="15" src="<?php bloginfo('template_directory');?>/images/icon-location.svg" alt="location icon" /><span>Our Locations</span></a>
		<a class="tel" href="tel:+14154218667"><img width="15" height="16" alt="Telephone Icon" src="<?php bloginfo('template_directory');?>/images/tel-icon.svg"><span>Call us</span>(415) 421-8667</a>
	</div>
</section>
