<?php
/**
 * Template part for custom taxonomy archives
 *
 */
 $archive_object = get_queried_object();
 $archive_tax = $archive_object->taxonomy;
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
							    
								<?php if ($archive_tax == 'news_type'):?>
									<li class="cell shrink"><a class="button solid mint-bg small" href="/news">All News</a></li>
								<?php endif;?>

								<?php if ($archive_tax == 'webinar_type'):?>
									<li class="cell shrink"><a class="button solid mint-bg small" href="/news">All Webinars</a></li>
								<?php endif;?>

<!--
								<?php if ($archive_tax == 'interview_expert'):?>
									<li class="cell shrink"><a class="button solid mint-bg small" href="/news">All Experts</a></li>
								<?php endif;?>
-->
									
								<?php
									$current_tax = get_queried_object();
									$current_tax_id = $current_tax->term_id;
									$tax_to_show = $archive_tax;
																
									$args = array(
										'taxonomy' =>  $tax_to_show,
										'hide_empty' => true,
									);
									$terms = get_terms($args);
								?>
		
								<?php foreach ($terms as $term): $term_link = get_term_link($term);?>
									<?php if($current_tax_id == $term->term_id):?>
										<li class="cell shrink is-current-tax"><button class="button disabled outline small" href="<?php echo $term_link;?>"><?php echo $term->name;?></button></li>
									<?php else:?>
										<li class="cell shrink "><a class="button outline small" href="<?php echo $term_link;?>"><?php echo $term->name;?></a></li>
									<?php endif;?>
								<?php endforeach; ?>
										
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
									if ($archive_tax == 'news_type') {
										get_template_part( 'parts/loop', 'archive-news-card' );
									} elseif ($archive_tax == 'webinar_type') {
										get_template_part( 'parts/loop', 'archive-webinar-card' );
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