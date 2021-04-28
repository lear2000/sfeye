<?php get_header(); ?>
<main>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>

		<?php get_template_part( 'tmpl/quote', 'background' ); ?>

		<a href="#" class="btn">Button Text</a>

	<?php endwhile; ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>