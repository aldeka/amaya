<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till after the splash
 * @package WordPress
 * @subpackage Amaya Theme
 * @since Amaya Theme 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/dependencies/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700|Homemade+Apple' rel='stylesheet' type='text/css'>
    <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/style.less" />
    <script src="<?php echo get_template_directory_uri(); ?>/dependencies/js/less.min.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="nav">
        <div class="nav-flowers">
            <div class="container">
                    <div class="visible-lg">
                        <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="/img/logo.png"></a>
                        <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Home</a>
                        <a href="">Menu</a>
                        <a href="">Reservations</a>
                        <a href="">Takeout</a>
                        <a href="">Catering</a>
                        <a href="">About Us</a>
                    </div>
                    <div class="visible-md">
                        <a href="/" class="logo"><img src="/img/logo.png"></a>
                        <a href="">Menu</a>
                        <a href="">Reservations</a>
                        <a href="">Takeout</a>
                        <a href="">Catering</a>
                        <a href="">About Us</a>
                    </div>
                    <div class="visible-sm">
                        <a href="/" class="logo" style="margin: 0;"><img src="/img/logo.png"></a>
                        <a href="">Menu</a>
                        <a href="">Reservations</a>
                        <a href="">Takeout</a>
                    </div>
                    <!-- <h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3> -->
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="falling-flowers">
        <div class="container">