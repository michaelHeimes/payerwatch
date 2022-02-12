<section class="appeal-letter-template module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="cell small-12">
				<div class="grid-x grid-padding-x">
					<div class="left small-12 tablet-4 large-3 large-offset-1">
						<?php 
						$image = get_field('alt_preview_image', 'option');
						if( !empty( $image ) ): ?>
						<div class="img-wrap">
						    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						</div>
						<?php endif; ?>						
					</div>
					<div class="right small-12 tablet-8 large-8">
						<h2><?php the_field('alt_heading', 'option');?></h2>
						<h3><?php the_field('alt_text', 'option');?></h3>
						Form
					</div>					
							
			</div>
					
		</div>
	</div>
</section>