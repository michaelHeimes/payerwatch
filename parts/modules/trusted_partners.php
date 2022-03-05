<section class="trusted-partners module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 text-center">
				<h2 class="small-copy"><?php the_field('tp_small_heading', 'options');?></h2>
				<h3><?php the_field('tp_large_heading', 'options');?></h3>
			</div>
		</div>
			
		<?php 
		$images = get_field('tp_logos', 'options');
		if( $images ): ?>
			<div class="grid-x grid-padding-x align-center">
	        <?php foreach( $images as $image ): ?>
	            <div class="single-partner cell small-6 medium-shrink text-center grid-x align-middle align-center">
	                <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	            </div>
	        <?php endforeach; ?>
		    </div>
		<?php endif; ?>
			
	</div>
</section>