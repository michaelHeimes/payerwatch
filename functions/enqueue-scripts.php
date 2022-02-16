<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Adding GSAP to the footer
    wp_enqueue_script( 'gsap', get_template_directory_uri() . '/assets/scripts/vendor/gsap.min.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/vendor/gsap.min.js'), true );
    
    // Adding GSAP ScrollTrigger to the footer
    wp_enqueue_script( 'gsap-ScrollTrigger', get_template_directory_uri() . '/assets/scripts/vendor/ScrollTrigger.min.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/vendor/ScrollTrigger.min.js'), true );
              
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );
    
    
    // Localize Three Columns Stats Numbers 
	global $post;
	$id = $post->ID;
	
	if(have_rows('modules', $id)) {
	
		$modules_array = array();
	
		foreach(get_field('modules', $id) as $module) {
		
			if ( $module['acf_fc_layout'] == 'graphic_and_stats') {
		
				wp_localize_script('site-js', 'site_js', array(  
				'stats_parent' => $module,			
				)); 
				
			}    
		}
	
	}
   
  	// Adding Adobe Fonts
    wp_enqueue_style( 'adobe-fonts', 'https://use.typekit.net/zqu5vmn.css', array(), time(), false );
    
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);