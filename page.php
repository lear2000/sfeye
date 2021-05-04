<?php get_header(); ?>
<main>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>

		<?php //get_template_part( 'tmpl/quote', 'background' ); ?>

		<!-- <a href="#" class="btn">Button Text</a> -->


	<!-- storefront -->
	<?php get_template_part( 'tmpl/blocks/block' , 'hero' ); ?>
	
	<?php get_template_part( 'tmpl/blocks/block' , 'surgery-types' ); ?>

	<?php get_template_part( 'tmpl/blocks/block' , '1-2-vision' ); ?>
	
	<?php get_template_part( 'tmpl/blocks/block' , '1-2-cataract' ); ?>

	<?php get_template_part( 'tmpl/blocks/block' , '1-2-ilux' ); ?>

	<?php get_template_part( 'tmpl/blocks/block' , '1-2-crosslink' ); ?>
	<!--  -->

	<?php endwhile; ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>
