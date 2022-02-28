<section class="copy-and-arrow-checklist module">
	
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="relative royal-blue-bg left cell small-12 tablet-6 large-7">
				<div class="bg royal-blue-bg pull-left"></div>
				<h2 class="white relative"><?php the_sub_field('heading');?></h2>
				<div class="g-pipe relative">
					<span></span>
				</div>
				<div class="copy-wrap white relative"><?php the_sub_field('copy');?></div>					
			</div>
			<div class="right cell small-12 tablet-6 large-5">
				<?php 
				$image = get_sub_field('list_graphic');
				if( !empty( $image ) ): ?>
				<div class="img-wrap">
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</div>
				<?php endif; ?>				
				<div class="list-wrap medium-copy">
					<?php the_sub_field('list');?>	
				</div>		
			</div>					
		</div>
	</div>
</section>