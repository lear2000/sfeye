<?php get_header(); ?>
<?php if (is_page('contact-us')) {
	$bgcolor ="secondary-bg";
} ?>
<main class=" <?php echo $bgcolor; ?>">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php get_template_part( 'tmpl/contact','formbox' ); ?>
		<?php get_template_part( 'tmpl/contact','mapbox' ); ?>
	<?php endwhile; ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>