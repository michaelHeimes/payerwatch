<section class="appeal-letter-template module has-bg color-bg">
	<div class="bg royal-blue-bg skewed-bg"></div>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="animate grid-x grid-padding-x">
					<div class="left relative small-12 tablet-4 large-3 large-offset-1 navy-bg">
						<?php 
						$image = get_field('alt_preview_image', 'option');
						if( !empty( $image ) ): ?>
						<div class="img-wrap">
						    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						</div>
						<?php endif; ?>						
					</div>
					<div class="right small-12 tablet-8 large-8 relative">
						<div class="bg navy-bg"></div>
						<h2 class="white relative"><?php the_field('alt_heading', 'option');?></h2>
						<h3 class="white relative"><?php the_field('alt_text', 'option');?></h3>
						Form
					</div>					
				</div>
			</div>
					
		</div>
	</div>
</section>