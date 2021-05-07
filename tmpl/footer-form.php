	<?php
		$hide_footer_form = get_field( 'hide_footer_form', 'option' );
		if ($hide_footer_form) {
			$hide_footer_form = $hide_footer_form;
		} else {
			$hide_footer_form = array('0');
		}
	 ?>
<?php if (!is_page($hide_footer_form)): ?>

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

	<?php endif ?>