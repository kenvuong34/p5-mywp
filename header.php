<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Header Template
 *
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" title="favicon" />
    <title><?php p5theme_title(true); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-4">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/p5-logo-orange.png" alt="Logo" />
				</div>
				<div class="cols-xs-6 col-sm-8 text-right">
					<a href="#contact" class="btn btn-primary" data-toggle="modal" data-target="#contact"><i class="icon_comment_alt">&nbsp;</i>  Contact us</a>
				</div>
			</div>
		</div>
	</header>
