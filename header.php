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
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700' rel='stylesheet' type='text/css'>
    
    <style type="text/css">
        @font-face {
            font-family: 'Mono Social Icons Font';
            src: url('<?php echo get_template_directory_uri(); ?>/fonts/MonoSocialIconsFont-1.10.eot');
            src: url('<?php echo get_template_directory_uri(); ?>/fonts/MonoSocialIconsFont-1.10.eot?#iefix') format('embedded-opentype'),
                 url('<?php echo get_template_directory_uri(); ?>/fonts/MonoSocialIconsFont-1.10.woff') format('woff'),
                 url('<?php echo get_template_directory_uri(); ?>/fonts/MonoSocialIconsFont-1.10.ttf') format('truetype'),
                 url('<?php echo get_template_directory_uri(); ?>/fonts/MonoSocialIconsFont-1.10.svg#MonoSocialIconsFont') format('svg');
            src: url('<?php echo get_template_directory_uri(); ?>/fonts/MonoSocialIconsFont-1.10.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .symbol, a.symbol:before {
            font-family: 'Mono Social Icons Font';
            -webkit-text-rendering: optimizeLegibility;
            -moz-text-rendering: optimizeLegibility;
            -ms-text-rendering: optimizeLegibility;
            -o-text-rendering: optimizeLegibility;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            -ms-font-smoothing: antialiased;
            -o-font-smoothing: antialiased;
            font-smoothing: antialiased;
        }

        a.symbol:before {
            content: attr(title);
            margin-right: 0.3em;
            font-size: 130%;
        }
    </style>

    <style type="text/css">
        @font-face {
          font-family: "Aardvark Cafe";
          src: url("<?php echo get_template_directory_uri(); ?>/fonts/aardvark_cafe-webfont.ttf"),
          url("<?php echo get_template_directory_uri(); ?>/fonts/aardvark_cafe-webfont.svg"),
          url("<?php echo get_template_directory_uri(); ?>/fonts/aardvark_cafe-webfont.woff"),
          url("<?php echo get_template_directory_uri(); ?>/fonts/aardvark_cafe-webfont.eot");
          font-weight: 400;
        }
    </style>
    <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/style.less" />
    <script src="<?php echo get_template_directory_uri(); ?>/dependencies/js/less.min.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="nav">
	    <!--<?php include 'home_page/socialmedia.php'; ?>-->
        <div class="container">
                <div class="visible-lg">
                    <?php include 'nav/nav-lg.php' ?>
                </div>
                <div class="visible-md">
                    <?php include 'nav/nav-md.php' ?>
                </div>
                <div class="visible-sm">
                    <?php include 'nav/nav-sm.php' ?>
                </div>
        </div>
        <?php include 'home_page/socialmedia.php'; ?>
        <div class="clearfix"></div>
    </div>

    <div class="falling-flowers">
        <div class="container">
