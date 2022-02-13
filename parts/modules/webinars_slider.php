<section class="webinars-slider-module module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<h2 class="white"><?php the_sub_field('heading');?></h2>
				<div class="webinars-slider">

					<?php			
					$args = array(  
					    'post_type' => 'webinar',
					    'post_status' => 'publish',
					    'posts_per_page' => 99999,
					);
					
					$loop = new WP_Query( $args ); 
					
					    
					    while ( $loop->have_posts() ) : $loop->the_post();
						
						get_template_part('parts/loop', 'archive-webinar-card');
									    
					    endwhile;
					wp_reset_postdata(); 
					?>

				</div>		
			</div>					
		</div>
	</div>
</section>