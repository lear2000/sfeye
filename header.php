<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory');?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory');?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/favicon/favicon-32x32.png">
	<link rel="manifest" href="<?php bloginfo('template_directory');?>/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_directory');?>/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >