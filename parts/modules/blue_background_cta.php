<section class="blue-background-cta module blue-bg color-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="grid-x grid-padding-x align-center align-middle">
					<div class="cell small-12 medium-shrink">
						<?php 
						$image = get_field('bbcta_logo', 'option');
						if( !empty( $image ) ): ?>
						    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>		
					</div>
					<div class="cell auto">
						<p class="large-copy"><?php the_field('bbcta_text', 'option');?></p>
					</div>
					<div class="cell shrink">
						<?php 
						$link = get_field('bbcta_button_link', 'option');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						    <a class="button mint-bg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>				
					</div>
				</div>
			</div>
		</div>
	</div>
</section>