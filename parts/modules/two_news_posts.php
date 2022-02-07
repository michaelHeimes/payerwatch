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
			
			    
			    while ( $loop->have_posts() ) : $loop->the_post();?>
			    
				<article id="post-<?php the_ID(); ?>" <?php post_class('cell small-12 medium-6'); ?> role="article">		
					<div class="inner navy-bg">				
					
						<header class="article-header">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<?php get_template_part( 'parts/content', 'byline' ); ?>
						</header> <!-- end article header -->
										
						<section class="entry-content" itemprop="text">
<!-- 							<?php the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?> -->
							<?php the_excerpt();?>
						</section> <!-- end article section -->
											
						<footer class="article-footer">
					    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointswp') . '</span> ', ', ', ''); ?></p>
						</footer> <!-- end article footer -->	
								    						
					</div>
				</article> <!-- end article -->			    
			    
			<?php
			    endwhile;
			wp_reset_postdata(); 
			?>
			

			<div class="cell small-12">
				<?php the_sub_field('wysiwyg_editor');?>			
			</div>
					
		</div>
	</div>
</section>