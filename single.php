<?php get_header(); ?>
<main>
	<section class="upbnav">
		<div class="container">
		<a class="button btn" href="<?php bloginfo('url');?>/blog/"><img class="back-arrow" width="9" height="14"src="<?php bloginfo('template_directory');?>/images/back-icon.svg" alt="Back Icon" />Back To Blog</a>
		<span class="button btn category catsel">
			Categories
			<img class="down-arrow" width="14" height="9"src="<?php bloginfo('template_directory');?>/images/down-arrow.svg" alt="Categories" />
					<div class="fscats catcat">
					  <?php $categories = get_categories();
							foreach($categories as $category) {
			   				echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
							} ?>
					 </div>
		</span>
				<span class="button btn archive arcsel">Archives
				<img class="down-arrow" width="14" height="9"src="<?php bloginfo('template_directory');?>/images/down-arrow.svg" alt="Archives" />
				<ul class="fscats arcats">
					<?php wp_get_archives( array( 'type' => 'yearly', 'limit' => 12 ) ); ?>
				 </ul>
				</span>
		</div>
	</section>
<?php if ( have_posts() ) : ?>
	<section>
	<?php while ( have_posts() ) : the_post(); ?>
		<article class="container">
				<?php the_content(); ?>
		</article>
		<nav>
			<?php previous_post_link( '%link', 'Previous'); ?>
			<?php next_post_link( '%link', 'Next'); ?>
		</nav>
	<?php endwhile; ?>
</section>
<?php endif; ?>
</main>
<?php get_footer(); ?>