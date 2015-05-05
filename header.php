<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Kuhl Entertainment
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="nBxmtpbU3BOWre56_oGZp6tiuGHOJ7985ZEZYpqdcfo" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58387280-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<?php

$menu_left = array(
	'theme_location'  => 'primary',
	'menu'            => false,
	'menu_class' 	  => 'list_naked list_nav list_inline txt_center pad_r_half',
	'container'       => false,
	'echo'            => true,
	'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
	'depth'           => 0,
);
$menu_right = array(
	'theme_location'  => 'secondary',
	'menu'            => false,
	'menu_class' 	  => 'list_naked list_nav list_inline txt_center pad_l_half',
	'container'       => false,
	'echo'            => true,
	'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
	'depth'           => 0,
);
?>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wedding-djs-with-class' ); ?></a>
<div class="top_tier">
	<header id="masthead" class="site_header" role="banner">
		<div class="wrap pad_n_t">
			<div class="row row_full main_navigation">
				<div class="column third txt_center">
					<?php wp_nav_menu( $menu_left ); ?>
				</div>
				<div class="column third txt_center space_neg_b_2 small_pad_n_t smalls_pad_t_half">
					<h1 class="site-title i_bl bigs_pad_t_half">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img class="logo" src="<?php echo get_template_directory_uri()?>/img/logo_large.png">
							<span class="visually_hidden"><?php bloginfo( 'name' ); ?></span>
						</a>
					</h1>
				</div>
				<div class="column third txt_center">
					<?php wp_nav_menu( $menu_right ); ?>
				</div>
	<!--			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
			</div><!-- .site-branding -->
		</div>
		<!--<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'wedding-djs-with-class' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content site_content">
