<section class="two-news-posts module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<?php			
			$args = array(  
			    'post_type' => 'news',
			    'post_status' => 'publish',
			    'posts_per_page' => 2,
			);
			
			$loop = new WP_Query( $args ); 
			
			    
			    while ( $loop->have_posts() ) : $loop->the_post();
				
				get_template_part('parts/loop', 'archive-news');
							    
			    endwhile;
			wp_reset_postdata(); 
			?>

		</div>
	</div>
</section>