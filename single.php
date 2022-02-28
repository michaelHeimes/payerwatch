<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">
	<?php get_template_part('parts/content', 'post-banner');?>
	<div class="content-light-blue-bg">
		<div class="grid-container">
			<div class="inner-content grid-x grid-padding-x">
		
				<main class="main small-12 medium-8 large-8 large-offset-1 cell" role="main">
				
				    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				    	<?php get_template_part( 'parts/loop', 'single' ); ?>
				    	
				    <?php endwhile; else : ?>
				
				   		<?php get_template_part( 'parts/content', 'missing' ); ?>
		
				    <?php endif; ?>
		
				</main> <!-- end #main -->
				
			</div> <!-- end #inner-content -->
		</div>
	</div>
			
	<?php get_template_part('parts/modules/two_news_posts');?>

	<?php get_template_part('parts/modules/trusted_partners');?>
	
	<?php get_template_part('parts/modules/blue_background_cta');?>
			
</div> <!-- end #content -->

<?php get_footer(); ?>