	<section class="fform">
		<div class="ffbg">
			<div class="ffcnt">
			<h2>Ensuring the highest level of vision care and individual attention possible.</h2>
			<p>Whether you just need a general eye exam, or if you are interested in reducing or eliminating your need for glasses or contacts, our team is here to help! Contact us to book an appointment today!</p>
			</div>
		</div>
		<?php get_template_part( 'tmpl/contact', 'formbox', array('haslogo' => 'true','footerform'=>'true') ); ?>
		<?php get_template_part( 'tmpl/contact', 'mapbox', array('mapfooterform' => 'true') ); ?>
	</section>
<footer>
	<p>Copyright © <?php echo date("Y"); ?> Margaret P. Liu, MD, Inc., all rights reserved</p>
	<p><a href="https://www.silvragency.com/website-design-and-development/" target="_blank" rel="noopener">Design</a> and <a target="_blank" rel="noopener" href="https://www.silvragency.com/digital-marketing/">Marketing</a> by <a target="_blank" rel="noopener" href="https://www.silvragency.com/">SILVR</a> <img width="24" height="22"  loading="lazy" src="<?php bloginfo('template_directory');?>/images/silvr.svg" alt="silvr social icon" /></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>