<section class="events module sky-blue-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<?php $heading = get_sub_field('heading');
				if($heading):?>
			<div class="cell small-12 large-10 large-offset-1">
				<h2 class="brand-royal h3 big-h3"><?php the_sub_field('heading');?></h2>
			</div>
			<?php endif;?>
			
			<div class="cell small-12 large-10 large-offset-1">
				<div class="events-grid grid-x grid-padding-x small-up-1 medium-up-3">

					<?php
					$today = date('Ymd');	
					$args = array(  
					    'post_type' => 'event',
					    'post_status' => 'publish',
					    'meta_key'  => 'event_date',
					    'orderby'   => 'meta_value_num',
					    'order'     => 'ASC',					    
						'posts_per_page' => 99999,
						'meta_query' => array(
							'key' => 'event_date',
							'compare' => '>=',
							'value' => $today,
						),
					);
					
					$loop = new WP_Query( $args ); 
					
					    
					    while ( $loop->have_posts() ) : $loop->the_post();?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('event-card cell'); ?> role="article">		
							<div class="fh inner">				
								<a class="fh grid-x flex-dir-column navy" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<div>
										<header class="article-header">
											<?php $date_string = get_field('event_date'); $date = DateTime::createFromFormat('Ymd', $date_string);?>
											<div class="date mint has-bg large-copy">
												<div class="bg royal-blue-bg"></div>
												<span><?php echo $date->format('m'); ?>.</span><span><?php echo $date->format('d'); ?>.</span><span><?php echo $date->format('y'); ?></span>
											</div>
											<h3 class="medium-copy navy"><?php the_title(); ?></h3>
										</header> <!-- end article header -->
														
										<section class="entry-content small-copy" itemprop="text">
											<?php the_field('event_card_excerpt');?>
										</section> <!-- end article section -->
									</div>
									
									<div>				
										<footer class="article-footer text-right">
											<div class="vm-link brand-navy grid-x align-middle">
												<span>Learn More</span>
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
												  <defs>
												    <clipPath id="clip-path">
												      <rect width="16" height="16" fill="none"></rect>
												    </clipPath>
												  </defs>
												  <g id="Component_7" data-name="Component 7" clip-path="url(#clip-path)">
												    <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#12058f"></path>
												  </g>
												</svg>	
											</div>
										</footer> <!-- end article footer -->	
									</div>
								</a>
							</div>
						</article> <!-- end article -->			    
						
									    
					    <?php endwhile;
					wp_reset_postdata(); 
					?>
				</div>					
			</div>					
		</div>
	</div>
</section>