<?php 
/**
 * The template for displaying all single posts and attachments
 */
 $expert_object = get_queried_object();
 $post_name =  $expert_object->post_name;
get_header(); ?>
			
<div class="content">
	<?php get_template_part('parts/content', 'post-banner');?>
	<div class="content-light-blue-bg">
		<div class="grid-container">
			<div class="inner-content grid-x grid-padding-x">
		
				<main class="main small-12 cell" role="main">
		
					<section class="expert-info">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class=" cell small-12 large-10 large-offset-1">
									<?php get_template_part('parts/loop', 'archive-expert-card');?>
								</div>
							</div>
						</div>
					</section>
							
				</main> <!-- end #main -->
								
			</div> <!-- end #inner-content -->
		</div>
	</div>

	<footer class="main small-12 cell">					
		<section class="post-slider-module module">
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class=" cell small-12 large-10 large-offset-1">
						<h2 class="h1">Interviews</h2>
					</div>	
					<div class="cell small-12">
						<h2 class="white"><?php the_sub_field('heading');?></h2>
						<div class="post-slider interview-slider">
							<?php			
							$args = array(  
							    'post_type' => 'interview',
							    'post_status' => 'publish',
							    'posts_per_page' => 99999,
								'meta_query' => array(
									array(
										'key' => 'select_expert',
										'value' => get_query_var('select_expert'),
										'compare' => 'LIKE'
									)
								)								    
							);
							
							$loop = new WP_Query( $args ); 
							
							    
							    while ( $loop->have_posts() ) : $loop->the_post();
								
								get_template_part('parts/loop', 'archive-interview-card');
											    
							    endwhile;
							wp_reset_postdata(); 
							?>
						</div>
						<div class="slider-nav grid-x grid-padding-x align-middle align-right">
							<div class="dots-container cell shrink"></div>
							<div class="vm-link-wrap text-right cell shrink"><a class="vm-link brand-navy grid-x align-middle" href="/webinars/"><span class="link-text"></span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16"><defs><clipPath id="clip-path"><rect width="16" height="16" fill="none"></rect></clipPath></defs><g id="Component_7" data-name="Component 7" clip-path="url(#clip-path)"><path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#12058f"></path></g></svg></a></div>
						</div>	
					</div>			
				</div>
			</div>
		</section>
		<?php get_template_part('parts/modules/two_news_posts');?>
		<?php get_template_part('parts/modules/trusted_partners');?>
		<?php get_template_part('parts/modules/blue_background_cta');?>
	</footer>
	
</div> <!-- end #content -->

<?php get_footer(); ?>