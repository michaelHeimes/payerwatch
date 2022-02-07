<?php
	$orientation = get_sub_field('orientation');
	$pull_wide = get_sub_field('pull_wide_optional');
?>
<section class="copy-image module <?php echo $pull_wide;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x<?php if( $orientation == 'copy-left' ):?> medium-flex-dir-row-reverse<?php endif;?>">
			
			<div class="left cell small-12 medium-6">
				<?php 
				$image = get_sub_field('image');
				if( !empty( $image ) ): ?>
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>				
			</div>

			<div class="right cell small-12 medium-6">
				<?php the_sub_field('copy');?>
				
				<?php 
				$link = get_sub_field('button_link');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				<div class="link-wrap">
				    <a class="button small" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				</div>
				<?php endif; ?>
						
			</div>
					
		</div>
	</div>
</section>