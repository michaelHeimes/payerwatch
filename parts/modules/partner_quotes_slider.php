<section class="partner-quotes-slider module color-bg royal-blue-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<h2 class="white"><?php the_sub_field('heading');?></h2>
				<div class="pq-slider">
				<?php if( have_rows('slides') ):?>
					<?php while ( have_rows('slides') ) : the_row();?>	
				
					<div class="pq-slide">
						<div class="inner white-bg">
							<div class="top grid-x">
								<?php 
								$image = get_sub_field('photo');
								if( !empty( $image ) ): ?>
								<div class="img-wrap cell small-12 medium-shrink">
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</div>
								<?php endif; ?>	
								<div class="name-title cell small-12 medium-auto">
									<h3 class="brand-blue medium-copy bold"><?php the_sub_field('name');?></h3>
									<h4 class="p"><?php the_sub_field('title');?></h4>
								</div>						
							</div>
							<div class="bottom brand-blue medium-copy bold">
								<?php the_sub_field('quote');?>
							</div>
						</div>
					</div>
					<?php endwhile;?>
				<?php endif;?>
				</div>	
				<div class="dots-container"></div>	
			</div>					
		</div>
	</div>
</section>