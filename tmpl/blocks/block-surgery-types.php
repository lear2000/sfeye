<?php
	$items = [
		[
			'image' => get_template_directory_uri() . '/images/icon-vision-correction.png',
			'heading' => 'Vision Correction Surgery',
			'inner_class' => 'bottom-artifact-blue'
		],
		[
			'image' => get_template_directory_uri() . '/images/icon-cataract.png',
			'heading' => 'Cataract Surgery',
			'inner_class' => 'bottom-artifact-orange'
		],
		[
			'image' => get_template_directory_uri() . '/images/icon-ilux.png',
			'heading' => 'iLux for Dry Eye',
			'inner_class' => 'bottom-artifact-green'
		],
		[
			'image' => get_template_directory_uri() . '/images/icon-vision-correction.png',
			'heading' => 'Cross-Linking',
			'inner_class' => 'bottom-artifact-mustard'
		]
	];
?>

<section class="block-surgery-types">
	<div class="layout-container">
		<div class="block-surgery-types__wrapper">
			<div class="block-surgery-types__items">
				<?php foreach ($items as $index => $item) { ?>
					<div class="block-surgery-types__item">
						<div class="block-surgery-types__item-inner bottom-artifact <?php echo $item['inner_class'];?>">
							<div class="block-surgery-types__item-img text-center">
								<img src="<?php echo $item['image'];?>" alt="{replace me}">
							</div>
							<div class="block-surgery-types__item-heading">
								<h2 class="is-heading"><?php echo $item['heading'];?></h2>
							</div>
							<div class="block-surgery-types__item-text">
								<ul class="custom-list-bullet">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Lorem ipsum dolor sit amet</li>
								</ul>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="block-surgery-types__items-controls slider-controls text-center hide--m">
				<button class="slide-left"><img src="<?php echo get_template_directory_uri();?>/images/arrow-left.svg" alt="arrow left"></button>
				<button class="slide-right"><img src="<?php echo get_template_directory_uri();?>/images/arrow-right.svg" alt="arrow right"></button>
			</div>
		</div>
	</div>
</section>
