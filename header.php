<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?> data-equalizer="header-gradient" data-equalize-on="small">
		<header class="header" role="banner">
			<div class="bg-wrap has-bg">
				<div class="bg" data-equalizer-watch="header-gradient"></div>
			</div>
					
			 <!-- This navs will be applied to the topbar, above all content 
				  To see additional nav styles, visit the /parts directory -->
			 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>

		</header> <!-- end .header -->
		
		
		<div class="off-canvas-wrapper <?php $color_theme = get_field('color_theme'); if($color_theme): echo ' picked-color color-theme-' . $color_theme; endif;?>">
			
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>