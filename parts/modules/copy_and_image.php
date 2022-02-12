<?php
	$orientation = get_sub_field('orientation');
	$pull_wide = get_sub_field('pull_wide_optional');
	$img_or_vid = get_sub_field('image_or_video');
	$btn_style = get_sub_field('button_style');
?>
<section class="copy-image module <?php echo $pull_wide;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x<?php if( $orientation == 'copy-left' ):?> medium-flex-dir-row-reverse<?php endif;?>">
			
			<div class="left cell small-12 medium-6">
				<?php if($img_or_vid = 'image'):?>
					<?php 
					$image = get_sub_field('image');
					if( !empty( $image ) ): ?>
					<div class="img-wrap">
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					</div>
					<?php endif; ?>		
				<?php endif;?>	
				<?php if($img_or_vid = 'image'):?>
					<div class="video-wrap">
						<?php
						
						// Load value.
						$iframe = get_field('oembed');
						
						// Use preg_match to find iframe src.
						preg_match('/src="(.+?)"/', $iframe, $matches);
						$src = $matches[1];
						
						// Add extra parameters to src and replace HTML.
						$params = array(
						    'controls'  => 1,
						    'hd'        => 1,
						    'autohide'  => 1
						);
						$new_src = add_query_arg($params, $src);
						$iframe = str_replace($src, $new_src, $iframe);
						
						// Add extra attributes to iframe HTML.
						$attributes = 'frameborder="0"';
						$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
						
						// Display customized HTML.
						echo $iframe;
						?>				
					</div>
				<?php endif;?>
			</div>

			<div class="right cell small-12 medium-6">
				<?php the_sub_field('copy');?>
				
				<div class="grid-x grid-padding-x align-left">
					
					<?php if($btn_style = 'solid'):?>
						<?php 
						$link = get_sub_field('button_link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						<div class="link-wrap">
						    <a class="button mint-bg"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?>
				
						<?php 
						$link = get_sub_field('button_link_2');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						<div class="link-wrap">
						    <a class="button blue-bg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?>
					<?php endif; ?>
					
					<?php if($btn_style = 'outline'):?>
						<?php 
						$link = get_sub_field('outline_button_link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						<div class="link-wrap style-outline">
						    <a class="button outline"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?>					
					<?php endif; ?>
					
				</div>
				
			</div>
					
		</div>
	</div>
</section>