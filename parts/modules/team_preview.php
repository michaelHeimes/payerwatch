<section class="team-preview module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="cell small-12 medium-6 large-5">
				<?php the_sub_field('copy');?>			
			</div>
			
			<div class="cell small-12 medium-6 large-offset-1">

				<?php if( have_rows('slider') ):?>
				<div class="inner slider" data-slide="1" data-equalizer data-equalize-on="small" data-equalize-on-stack="true">
					<?php while ( have_rows('slider') ) : the_row();?>
					
					<?php $order_number = get_row_index();?>	
					
					<div class="single-card text-center" data-order="<?php echo $order_number;?>" data-equalizer-watch>
						
						<?php
						$expert = get_sub_field('expert');
					    $permalink = get_permalink( $expert->ID );
				        $title = get_the_title( $expert->ID );
				        $photo = get_field( 'photo', $expert->ID );
				        $job_title = get_field( 'title', $expert->ID );
				        ?>
				        
				        <div class="photo-wrap">
					        <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
				        </div>
				        
				        <div class="name-title mint">
					        <?php echo $title;?> | <?php echo $job_title;?>
				        </div>

						<div class="copy-wrap medium-copy">
							<?php the_sub_field('text');?>
						</div>
						
						<div class="link-wrap">			
							<a class="align-middle" href="<?php echo esc_url( $permalink ); ?>">
					            <span>Meet Expert</span>
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
								  <defs>
								    <clipPath id="clip-path">
								      <rect width="16" height="16" fill="none"/>
								    </clipPath>
								  </defs>
								  <g id="Component_4" data-name="Component 4" clip-path="url(#clip-path)">
								    <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#00fab8"/>
								  </g>
								</svg>
					            
					        </a>
						</div>
				
					</div>
				
					<?php endwhile;?>
				</div>
				<?php endif;?>
				
				<?php if( have_rows('slider') ):?>
				<ul class="card-nav">
					<?php while ( have_rows('slider') ) : the_row();?>
					
					<?php $order_number = get_row_index();?>	
					
					<li class="single-dot">
						<button class="button team-dot" role="tab" data-order="<?php echo $order_number;?>"></button>
					</li>
				
					<?php endwhile;?>
				</ul>
				<?php endif;?>
		
			</div>			
					
		</div>
	</div>
</section>