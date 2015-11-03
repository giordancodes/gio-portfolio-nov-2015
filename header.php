<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav>
	<ul>
		<p id="open" class="curly">{</p>
		<li><a href="#about">About</a></li>
		<li><a href="#work">Work</a></li>
		<li><a href="#skills">Skills</a></li>
		<li><a href="#contact">Contact</a></li>
		<p id="close" class="curly">}</p>
	</ul>
</nav><!-- #site-navigation -->

	<header id="masthead" class="site-header flex column" role="banner">
		<div class="site-branding flex column">
			<h1><?php bloginfo( 'name' ) ?> </h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
