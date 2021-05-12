<?php get_header(); ?>
<?php if (is_page('contact-us')) {
	$bgcolor ="secondary-bg";
} ?>
<main class=" <?php echo $bgcolor; ?>">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>


		<?php //get_template_part( 'tmpl/quote', 'background' ); ?>



	<!-- storefront -->
	<?php get_template_part( 'tmpl/blocks/block' , 'hero' ); ?>

	<?php get_template_part( 'tmpl/blocks/block' , 'surgery-types' ); ?>

	<?php get_template_part( 'tmpl/blocks/block' , '1-2-vision' ); ?>

	<?php get_template_part( 'tmpl/blocks/block' , '1-2-cataract' ); ?>

	<?php get_template_part( 'tmpl/blocks/block' , '1-2-ilux' ); ?>

	<?php get_template_part( 'tmpl/blocks/block' , '1-2-crosslink' ); ?>

	<?php get_template_part( 'tmpl/blocks/block' , 'physicians' ); ?>

	<?php get_template_part( 'tmpl/blocks/block' , 'in-media' ); ?>

		<?php get_template_part( 'tmpl/section', 'twotext' ); ?>
		<?php get_template_part( 'tmpl/section', 'bgwtext' ); ?>
		<?php get_template_part( 'tmpl/section', 'bgburst' ); ?>
		<?php get_template_part( 'tmpl/section', 'himghtext' ); ?>
		<?php get_template_part( 'tmpl/section', 'faq' ); ?>
		<?php get_template_part( 'tmpl/section', 'sourcebar' ); ?>
		<?php get_template_part( 'tmpl/section', 'cta' ); ?>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'tmpl/footer', 'form' ); ?>
</main>
<?php get_footer(); ?>
