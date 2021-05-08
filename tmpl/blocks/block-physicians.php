<?php
	$doctors = [
		[
			'image' => get_template_directory_uri() . '/images/liu-headshot.jpg',
			'name' => 'Margaret P. Liu, M.D.',
			'text' => 'Vision Correction Surgery',
		],
		[
			'image' => get_template_directory_uri() . '/images/liu-headshot.jpg',
			'name' => 'Margaret P. Liu, M.D. - 2',
			'text' => 'Cataract Surgery',
		],
		[
			'image' => get_template_directory_uri() . '/images/liu-headshot.jpg',
			'name' => 'Margaret P. Liu, M.D. - 3',
			'text' => 'iLux for Dry Eye',
		],
		[
			'image' => get_template_directory_uri() . '/images/liu-headshot.jpg',
			'name' => 'Margaret P. Liu, M.D. - 4',
			'text' => 'Cross-Linking',
		],
		[
			'image' => get_template_directory_uri() . '/images/liu-headshot.jpg',
			'name' => 'Margaret P. Liu, M.D. - 5',
			'text' => 'Cross-Linking',
		],
		[
			'image' => get_template_directory_uri() . '/images/liu-headshot.jpg',
			'name' => 'Margaret P. Liu, M.D. - 6',
			'text' => 'Cross-Linking',
		],
		[
			'image' => get_template_directory_uri() . '/images/liu-headshot.jpg',
			'name' => 'Margaret P. Liu, M.D. - 7',
			'text' => 'Cross-Linking',
		],
		[
			'image' => get_template_directory_uri() . '/images/liu-headshot.jpg',
			'name' => 'Margaret P. Liu, M.D. - 8',
			'text' => 'Cross-Linking',
		]
	];
?>

<section class="block-physcicians">
	<div class="layout-container">
		<div class="block-physcicians__heading">
			<h2 class="is-heading text-center">Our Physicians <span>Dedicated To Your Vision Goals</span></h2>
		</div>
		<div class="block-physcicians__head-shots-wrapper">
			<div class="block-physcicians__head-shots-arrows has-arrows"></div>
			<div class="block-physcicians__head-shots">
				<?php foreach($doctors as $index => $doctor ) { ?>
					<div class="block-physcicians__head-shot">
						<span><img src="<?php echo $doctor['image'];?>" alt="{DOCTOR NAME}"></span>
					</div>	
				<?php } ?>
			</div>
		</div>
		
	
		
		<div class="block-physcicians__text-items-wrapper">
			<div class="block-physcicians__text-items">
				<?php foreach($doctors as $index => $doctor ) { ?>
					<div class="block-physcicians__text-item">
						<h3 class="is-heading"><?php echo $doctor['name'];?></h3>
						<div class="block-physcicians__text-item-text">
							Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
						</div>
						<div class="block-physcicians__text-item-btn">
							<a href="#"  class="btn">LEARN MORE</a>
							<a href="#"  class="btn">Appointment Request</a>
						</div>
					</div>	
				<?php } ?>
			</div>
		</div>
	</div>
</section>
