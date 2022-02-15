<section class="expanding-card-slider module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="cell small-12">
				<?php if( have_rows('slides') ):?>
				<div class="slider grid-x">
					<?php while ( have_rows('slides') ) : the_row();?>	
					<?php $row = get_row_index();?>
					<div class="grid-x single-slide<?php if( $row == 1 ):?> widen<?php endif;?>">
						<div class="inner blue-bg white">
							<h3 class="white"><?php the_sub_field('heading');?></h3>
							<div class="hidden">
								<p class="large-copy"><?php the_sub_field('large_text');?></p>
		
								<?php 
								$image = get_sub_field('graphic');
								if( !empty( $image ) ): ?>
								<div class="img-wrap">
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</div>
								<?php endif; ?>
						</div>
							
						</div>
					</div>
				
					<?php endwhile;?>
				</div>
				<?php endif;?>			
			</div>
					
		</div>
	</div>
</section>