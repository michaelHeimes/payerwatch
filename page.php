<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
		
	    <main class="main" role="main">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<?php get_template_part( 'parts/loop', 'page' ); ?>
		    
		    <?php endwhile; endif; ?>							
		    					
		</main> <!-- end #main -->	    

	</div> <!-- end #content -->

<?php get_footer(); ?>