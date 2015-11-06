<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Source+Code+Pro:300|Work+Sans:400,100,200|Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.0.2/css/hover-min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/hint.css/1.3.6/hint.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav>
	<ul class="flex">
		<p id="curly" class="curly"><a>{</a></p>
		<div class="navLi">
			<li><a href="#about">About</a></li>
			<li><a href="#work">Work</a></li>
			<li><a href="#skills">Skills</a></li>
			<li><a href="#contact">Contact</a></li>
		</div>
		<p id="curly" class="curly"><a>}</a></p>
	</ul>
</nav><!-- #site-navigation -->

	<header id="masthead" class="site-header flex column" role="banner">
		<div class="site-branding flex column">
			<h1 class="animated fadeIn"><?php bloginfo( 'name' ) ?> </h1>
			<h2 class="site-description animated fadeIn"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
