<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
	<meta name="application-name" content="<?php bloginfo('name'); ?>" />
	<title><?php bloginfo("name"); ?> <?php wp_title("&bull;"); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<div class="header">
	<div class="logo">
		<a href="/"><?php bloginfo('template_url'); ?>Logo</a>
	</div>
	<nav>
		<?php wp_nav_menu( array('menu' => 'Main Menu' )); ?> 
	</nav>
</div>

<body <?php body_class(); ?>>