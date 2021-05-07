<?php get_header(); ?>
<?php if (is_page('contact-us')) {
	$bgcolor ="secondary-bg";
} ?>
<main class=" <?php echo $bgcolor; ?>">
<div class="container">
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php $articletitle = get_field('article_title'); ?>
		<?php $publication = get_field('publication'); ?>

		<div class="postitem">

				<?php $featured_image = get_field( 'featured_image' ); ?>
				<?php if ( $featured_image ) : ?>
					<div class="pitemimg">
					<img width="<?php echo $featured_image['width']; ?>" height="<?php echo $featured_image['height']; ?>" loading="lazy" src="<?php echo esc_url( $featured_image['url'] ); ?>" alt="<?php echo esc_attr( $featured_image['alt'] ); ?>" />
					</div>
				<?php endif; ?>

			<div class="pcontent">
				<h2><?php the_title(); ?></h2>
				<?php if ($articletitle): ?>
				<p class="meta"><strong>Article Title:</strong> <?php echo $articletitle;  ?></p>
				<?php endif ?>
				<?php if ($publication): ?>
				<p class="meta"><strong>Publication:</strong> <?php echo $publication;  ?></p>
				<?php endif ?>

				<div class="excerpt">
					<?php
							$post_or_article = get_field('post_or_article');
							if ($post_or_article == 'post' || $post_or_article == '') {
							 echo '<p>'.wp_trim_words( get_the_content(), 40, ' ...' ).'</p>';
							} else {
								the_excerpt();
							}
					 ?>

				</div>
				<?php $link_to_article = get_field( 'link_to_article' ); ?>
				<?php if ( $link_to_article ) : ?>
					<a class="btn" href="<?php echo esc_url( $link_to_article['url'] ); ?>" target="<?php echo esc_attr( $link_to_article['target'] ); ?>">Read Full Article</a>
				<?php else: ?>
					<a href="<?php the_permalink(); ?>" class="btn">Read More</a>
				<?php endif; ?>

			</div>
		</div>

	<?php endwhile; ?>
<?php endif; ?>
</div>
</main>
<?php get_footer(); ?>