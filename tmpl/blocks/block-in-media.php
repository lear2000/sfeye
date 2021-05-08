<?php
	$logos = [
		[
			'image' => get_template_directory_uri() . '/images/logo-insider.jpg?v=' . time(),
			'text' => 'Glasses vs Contact Lenses – Dr. Liu Discusses the Pros & Cons'
		],
		[
			'image' => get_template_directory_uri() . '/images/logo-optha.jpg?v=' . time(),
			'text' => 'Dr. Liu Highlighted  as a Featured Expert Discussing Advanced IOL Options in Ophthalmology'
		],
		[
			'image' => get_template_directory_uri() . '/images/logo-bottomline.jpg?v=' . time(),
			'text' => 'Dr. Liu Authors Article Discussing Everything You Need to Know About Eye Floaters'
		],
	];
?>

<section class="block-in-media">
	<div class="layout-container">
		<div class="block-in-media__heading text-center">
			<h2 class="is-heading"><span>In</span> The Media</h2>
		</div>
		<div class="block-in-media__images-wrapper">
			<div class="block-in-media__images">
				<?php foreach( $logos as $index => $logo ) { ?>
					<div class="block-in-media__image">
						<div class="block-in-media__image-image">
							<img src="<?php echo $logo['image'];?>" alt="{replace me}">
						</div>
						<div class="block-in-media__image-text text-center">
							<p><?php echo $logo['text'];?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="block-in-media__btn text-center">
			<a href="" class="btn">View all Media Articles</a>
		</div>
	</div>
</section>
