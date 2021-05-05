<section class="navbar">
	<div class="mobile-nav">
		<span><img width="217" height="37" src="<?php bloginfo('template_directory');?>/images/mobile-logo.svg" alt="San Francisco Eye Institute Logo"/></span>
		<div class="bun">
			<span></span><span></span>
		</div>
	</div>
	<div class="navleft">
		<img class="close-nav" src="<?php bloginfo('template_directory');?>/images/close-nav.svg" alt="Close Nav" width="17" height="17"/>
		<a href="<?php bloginfo('url');?>/"><img width="17" height="17" src="<?php bloginfo('template_directory');?>/images/home-icon.svg" alt="home icon"><span>Home</span></a>
		<nav>
			<?php
			wp_nav_menu( array(
			    'menu' => 'Header Menu',
			    'container' => '',
			    'walker' => new submenuWrap()
			) );
			 ?>
		</nav>
	</div>
	<div class="navright">
		<a class="location" href="<?php bloginfo('url');?>/our-locations"><img width="11" height="15" src="<?php bloginfo('template_directory');?>/images/icon-location.svg" alt="location icon" /><span>Our Locations</span></a>
		<a class="tel" href="tel:+14154218667"><img width="15" height="16" alt="Telephone Icon" src="<?php bloginfo('template_directory');?>/images/tel-icon.svg"><span>Call us</span>(415) 421-8667</a>
	</div>
</section>
