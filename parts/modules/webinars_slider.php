<section class="webinars-slider-module slider-module module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<?php $heading = get_sub_field('heading');
				if($heading):?>
			<div class="cell small-12 large-10 large-offset-1">
				<h2 class="violet h3 big-h3"><?php the_sub_field('heading');?></h2>
			</div>
			<?php endif;?>
			
			<div class="cell small-12">
				<div class="post-slider webinars-slider">

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
				<div class="slider-nav grid-x grid-padding-x align-middle align-right">
					<div class="dots-container cell"></div>
					<div class="vm-link-wrap text-right cell"><a class="vm-link brand-navy grid-x align-middle" href="/webinars/"><span class="link-text"></span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16"><defs><clipPath id="clip-path"><rect width="16" height="16" fill="none"></rect></clipPath></defs><g id="Component_7" data-name="Component 7" clip-path="url(#clip-path)"><path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#12058f"></path></g></svg></a></div>
				</div>
					
			</div>					
		</div>
	</div>
</section>