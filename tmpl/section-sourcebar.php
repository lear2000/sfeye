<section class="sources-cite">
<div class="container">
<div id="<?php echo esc_attr( $id ); ?>" class=" single-sources <?php echo esc_attr( $classes ); ?>">
	<span><img src="<?php echo get_template_directory_uri(); ?>/assets/trusted.svg" alt="Trused Source Icon - Checkbox" /> <data>Sources</data></span>
	<?php if ( have_rows( 'sources' ) ) : ?>
		<div id="sources">
		<?php while ( have_rows( 'sources' ) ) : the_row(); ?>
			<?php  $text = get_sub_field('single_source') ?: 'Source here...'; ?>
			<?php echo $text; ?>
			<p>Source</p>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>
</div>
</section>