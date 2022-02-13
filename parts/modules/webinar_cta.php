<section class="webinar-cta module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="left cell small-12 medium-6 large-5">
				<h2><?php the_sub_field('large_heading');?></h2>
				<h3><?php the_sub_field('small_heading');?></h3>
			</div>
			
			<div class="left cell small-12 medium-6 large-7">
				<div class="inner">
					<?php 
					$image = get_sub_field('skewed_image');
					if( !empty( $image ) ): ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>	
					<?php 
					$link = get_sub_field('button_link');
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
					    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>						
				</div>		
			</div>
					
		</div>
	</div>
</section>