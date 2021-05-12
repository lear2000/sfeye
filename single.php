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
			<div class="swrap">
			<?php
				$post_or_article = get_field('post_or_article');
				$featured_image = get_field( 'featured_image' );
				if ($post_or_article == "article"): ?>
					<?php

							$article_title = get_field( 'article_title' );
							$publication =  get_field( 'publication' );
					 ?>
					<?php if ( $featured_image ) : ?>
						<div class="sfeat">
						 <img width="<?php echo  $featured_image['width']; ?>" height="<?php echo esc_url( $featured_image['height'] ); ?>" src="<?php echo esc_url( $featured_image['url'] ); ?>" alt="<?php echo $featured_image['alt']; ?>" />
						</div>
					<?php endif; ?>
					<div class="stitle">
						<h2><?php the_title(); ?></h2>
						<?php if ($article_title): ?>
						<p><strong>Article Title:</strong> <?php echo $article_title; ?></p>
						<?php endif ?>
						<?php if ($publication): ?>
							<p><strong>Publication:</strong> <?php echo $publication; ?></p>
						<?php endif ?>
						<?php if (get_the_excerpt()): ?>
							<?php the_excerpt(); ?>
						<?php endif ?>
					</div>
			  <?php endif; //article ?>
			  <?php if ($post_or_article == "post"): ?>

			  	<?php if ( get_field( 'hide_featured_image_on_single_post_page' ) != 1 ) : ?>
			  		<div class="sfeat">
			  		 <img width="<?php echo  $featured_image['width']; ?>" height="<?php echo esc_url( $featured_image['height'] ); ?>" src="<?php echo esc_url( $featured_image['url'] ); ?>" alt="<?php echo $featured_image['alt']; ?>" />
			  		</div>
			  		<div class="stitle ">
			  			<h2><?php the_title(); ?></h2>
			  			<?php if (get_the_excerpt()): ?>
			  				<?php the_excerpt(); ?>
			  			<?php endif ?>
			  		</div>
			  	<?php else: ?>
			  	<div class="stitle fullh">
			  		<h2><?php the_title(); ?></h2>
			  	</div>
			  <?php endif; ?>

			  <?php endif ?>
			 </div>
				<?php ///main content ?>
				<?php the_content(); ?>
				<nav class="prevnext">
					<?php previous_post_link( '%link', 'Previous'); ?>
					<?php next_post_link( '%link', 'Next'); ?>
				</nav>
		</article>

	<?php endwhile; ?>
</section>
<?php endif; ?>
</main>
<?php get_footer(); ?>