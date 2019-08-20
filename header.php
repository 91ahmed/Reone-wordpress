<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<title><?php bloginfo('name').wp_title(' - ') ?></title>
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
		<meta name="author" content="Ahmed Hassan"/>
		<meta name="description" content="<?php bloginfo('description'); ?>"/>
		<meta name="keywords" content="php,html,css,js,ajax,mysql"/>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

		
		<link href="<?= get_template_directory_uri() ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?= get_template_directory_uri() ?>/assets/Normalize/normalize.css" rel="stylesheet">
		<link href="<?= get_template_directory_uri() ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?= get_template_directory_uri() ?>/assets/linearicons/css/icon-font.min.css" rel="stylesheet">
		<link href="<?= get_template_directory_uri() ?>/assets/animate/animate.css" rel="stylesheet">
		<link href="<?= get_template_directory_uri() ?>/assets/revolution/css/settings.css" rel="stylesheet">
		<link href="<?= get_template_directory_uri() ?>/assets/revolution/css/layers.css" rel="stylesheet">
		<link href="<?= get_template_directory_uri() ?>/assets/revolution/css/navigation.css" rel="stylesheet">
		<link href="<?= get_template_directory_uri() ?>/assets/css/ionicons.min.css" rel="stylesheet">
		<link href="<?= get_template_directory_uri() ?>/assets/css/magnific-popup.css" rel="stylesheet">
		<link href="<?= get_template_directory_uri() ?>/css/style.css" rel="stylesheet">
		<script src="<?= get_template_directory_uri() ?>/js/vendor/modernizr-3.5.0.min.js"></script>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>