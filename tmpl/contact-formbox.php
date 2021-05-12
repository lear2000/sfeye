<?php
 	$footerform = $args['footerform'];
 	if ($footerform) {
 		$footerform = 'is-footer-form';
 	}
 ?>
<section class="formbox <?php echo $footerform; ?>">
	<div class="ffbtw"><a class="ffbtn btn button" href="<?php bloginfo('url');?>/contact-us/">Contact Us</a></div>

	<div class="container">
		<div class="formwrap">
			<?php
			  //query var from footerphp
				$haslogo = $args['haslogo'];
 			?>
 			<?php if ($haslogo): ?>
 			<div class="logowrap">
 				<img class="dlogo" width="378" height="194"  loading="lazy" src="<?php bloginfo('template_directory');?>/images/footer-logo.svg" alt="San Francisco Eye Institute Logo" />
 				<img class="mlogo"   width="269" height="46" loading="lazy" src="<?php bloginfo('template_directory');?>/images/mob-footer-logo.svg" alt="San Francisco Eye Institute Logo" />
 			</div>
 			<?php endif ?>
			<h2>To request an appointment please use the<br> form below, or call: (415) 421-8667    </h2>
		<?php echo do_shortcode( '[aform name="contact-us"]' ); ?>
	</div>
	</div>
</section>