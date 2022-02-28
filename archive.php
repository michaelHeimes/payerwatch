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
		<?php get_template_part('parts/modules/page_banner');?>
		<div class="inner-content">
		
		    <main class="main" role="main">
		    	
		    	<div class="grid-x grid-padding-x">
			    	<div class="cell small-12 tablet-10 tablet-offset-1">
					    <div class="filter-buttons-container grid-container fluid insights-cards-wrap">
						    
						    <ul class="filter-buttons menu grid-x grid-padding-x align-middle">
								<?php if (!is_post_type_archive('expert')):?>
							
									<?php if (is_post_type_archive('news')):?>
										<li class="cell shrink"><a class="button solid mint-bg small" href="/news">All News</a></li>
									<?php endif;?>
									<?php if (is_post_type_archive('webinar')):?>
										<li class="cell shrink"><a class="button solid mint-bg small" href="/news">All Webinars</a></li>
									<?php endif;?>
									<?php if (is_post_type_archive('interview')):?>
										<li class="cell shrink"><a class="button solid mint-bg small" href="/news">All Interviews</a></li>
									<?php endif;?>
									
								<?php endif;?>
																	
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
											<li class="cell shrink"><a class="button outline small" href="<?php echo $term_link;?>"><?php echo $term->name;?></a></li>
										<?php endforeach;
									}
									
									if (is_post_type_archive('interview')) {
										$args = array(  
										    'post_type' => 'interview',
										    'post_status' => 'publish',
										    'posts_per_page' => -1,
										    'orderby' => 'title',
										    'order' => 'ASC'
										);
										
										$loop = new WP_Query( $args ); 
										
										if ( $loop->have_posts() ) : 
										    
										    while ( $loop->have_posts() ) : $loop->the_post();
										    
											$expert = get_field('select_expert');
											$expert_name = get_the_title( $expert->ID );
											$permalink = get_permalink( $expert->ID );
											$expert_first_name = str_word_count( $expert_name, 1);
											
										    ?>
										    
												<li class="cell shrink"><a class="button outline small" href="<?php echo esc_url( $permalink ); ?>"><?php echo $expert_first_name[0];?></a></li>
										    	
										    <?php endwhile;
								
										endif;
										wp_reset_postdata(); 
										
									}
									
									
								?>
							</ul>
							
					    </div>
			    	</div>
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
	
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell">
							<?php joints_page_navi(); ?>
							</div>
						</div>
					</div>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
				
				<?php get_template_part('parts/modules/trusted_partners');?>
				
				<?php get_template_part('parts/modules/blue_background_cta');?>				
					
			</main> <!-- end #main -->
	
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->	
	
<?php get_footer(); ?>