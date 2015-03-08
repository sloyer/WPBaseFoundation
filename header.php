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

<header class="header">   
	<nav class="top-bar" data-topbar role="navigation">
	 
	  <ul class="title-area">
	    <li class="name">
	      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	    </li>
	    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	  </ul>
	 
	  <section class="top-bar-section">
	    <?php display_primary_menu(); ?>
	  </section>
	 
	</nav>
</header>

<body <?php body_class(); ?>>