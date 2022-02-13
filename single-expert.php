<?php 
/**
 * The template for displaying all single posts and attachments
 */
 $expert_object = get_queried_object();
 $post_name =  $expert_object->post_name;

get_header(); ?>
			
<div class="content">
		<div class="inner-content">
			<main class="main" role="main">
			
				<section class="expert-info">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class=" cell small-12 large-10 large-offset-1">
								<?php get_template_part('parts/loop', 'archive-expert-card');?>
							</div>
						</div>
					</div>
				</section>
				
				<section class="webinars-slider-module module">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class=" cell small-12 large-10 large-offset-1">
								<h2>Interviews</h2>
							</div>	
							<div class="cell small-12">
								<h2 class="white"><?php the_sub_field('heading');?></h2>
								<div class="webinars-slider">
				
									<?php			
									$args = array(  
									    'post_type' => 'interview',
									    'post_status' => 'publish',
									    'posts_per_page' => 99999,
									    'tax_query' => array(
									        array (
									            'taxonomy' => 'interview_expert',
									            'field' => 'slug',
									            'terms' => $post_name,
									        )
									    ),									    
									);
									
									$loop = new WP_Query( $args ); 
									
									    
									    while ( $loop->have_posts() ) : $loop->the_post();
										
										get_template_part('parts/loop', 'archive-interview-card');
													    
									    endwhile;
									wp_reset_postdata(); 
									?>
				
								</div>		
							</div>
							<div class="cell text-right">
								<a class="view-all-link uppercase bold navy" href="/interviews">
									<span>View All Interviews</span>
									<svg id="Component_82" data-name="Component 82" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
									  <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#12058f"/>
									</svg>
									
								</a>	
							</div>				
						</div>
					</div>
				</section>
				
				<?php get_template_part('parts/modules/two_news_posts');?>
				<?php get_template_part('parts/modules/trusted_partners');?>
				<?php get_template_part('parts/modules/blue_background_cta');?>

			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div>
</div> <!-- end #content -->

<?php get_footer(); ?>