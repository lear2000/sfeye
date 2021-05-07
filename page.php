<?php get_header(); ?>
<?php if (is_page('contact-us')) {
	$bgcolor ="secondary-bg";
} ?>
<main class=" <?php echo $bgcolor; ?>">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="container">
		<?php the_content(); ?>

		</div>
	<?php endwhile; ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>