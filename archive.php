<?php
/**
 * Template part for cpt archives
 *
 */
 $archive_object = get_queried_object();
 $cpt_slug = $archive_object->name;
 $taxonomy = get_object_taxonomies( $cpt_slug);

 get_header();
?>

	<div class="content">
	
		<div class="inner-content">
		
		    <main class="main" role="main">
			    
		    	<header>
		    		<h1 class="page-title"><?php the_archive_title();?></h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	</header>
		    	
			    <div class="filter-buttons-container grid-container fluid insights-cards-wrap">
				    
				    <ul class="filter-buttons menu grid-x grid-padding-x align-center">
							
						<?php
							if ($taxonomy) {
							
								$current_tax = get_queried_object();
								$current_tax_id = $current_tax->term_id;
															
								$args = array(
									'post_type' => $cpt_slug,
									'taxonomy' =>  $taxonomy,
									'hide_empty' => true,
								);
								$terms = get_terms($args);
	
								foreach ($terms as $term): $term_link = get_term_link($term);?>
									<li class="cell shrink "><a class="button" href="<?php echo $term_link;?>"><?php echo $term->name;?></a></li>
								<?php endforeach;
							}?>
					</ul>
					
			    </div>
		
		    	<?php if (have_posts()) : ?>
			    	<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<?php while (have_posts()) : the_post(); ?>
								<!-- To see additional archive styles, visit the /parts directory -->
								<?php 
									if (is_post_type_archive('news')) {
										get_template_part( 'parts/loop', 'archive-news-card' );
									} elseif (is_post_type_archive('webinar')) {
										get_template_part( 'parts/loop', 'archive-webinar-card' );
									} elseif (is_post_type_archive('interview')) {
										get_template_part( 'parts/loop', 'archive-interview-card' );
									} elseif (is_post_type_archive('expert')) {
										get_template_part( 'parts/loop', 'archive-expert-card' );
									} else {
										get_template_part( 'parts/content', 'missing' );
									}
								?>
							<?php endwhile; ?>	
						</div>
			    	</div>
	
						<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		
			</main> <!-- end #main -->
	
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->	
	
<?php get_footer(); ?>