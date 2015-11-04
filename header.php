<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/hint.css/1.3.6/hint.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav>
	<ul>
		<p id="open" class="curly"><a href="#">{</a></p>
		<li class="navLi"><a href="#about">About</a></li>
		<li class="navLi"><a href="#work">Work</a></li>
		<li class="navLi"><a href="#skills">Skills</a></li>
		<li class="navLi"><a href="#contact">Contact</a></li>
		<p id="close" class="curly"><a href="#">}</a></p>
	</ul>
</nav><!-- #site-navigation -->

	<header id="masthead" class="site-header flex column" role="banner">
		<div class="site-branding flex column">
			<h1 class="animated fadeIn"><?php bloginfo( 'name' ) ?> </h1>
			<h2 class="site-description animated fadeIn"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
