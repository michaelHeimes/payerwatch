<?php
	$orientation = get_sub_field('orientation');
	$pull_wide = get_sub_field('pull_wide_optional');
	$img_or_vid = get_sub_field('image_or_video');
	$btn_style = get_sub_field('button_style');
	$click_enlarge = get_sub_field('click_to_enlarge');
	$special_image_type = get_sub_field('special_image_type');
	$mod_row = get_row_index();
?>
<section class="copy-image module <?php echo $pull_wide;?> <?php echo $img_or_vid;?> <?php if($click_enlarge):?> click-enlarge <?php endif;?> <?php echo $orientation;?> ">
	<div class="grid-container">
		<div class="grid-x grid-padding-x<?php if( $orientation == 'copy-left' ):?> medium-flex-dir-row-reverse<?php endif;?>">
			
			<div class="left cell small-12 medium-6">
				<?php if($img_or_vid == 'image'):?>
					<?php 
					$image = get_sub_field('image');
					if( !empty( $image ) ): ?>
					<div class="img-wrap <?php echo $special_image_type;?>">
						
						<?php if($click_enlarge):?>
							<div class="reveal" id="modal-<?php echo $mod_row;?>" data-reveal>
							<?php 
							$modal_image = get_sub_field('image_for_modal');
							if( !empty( $modal_image ) ): ?>
							<div class="btn-wrap text-right">
								<button class="close-button" data-close aria-label="Close modal" type="button">
									<svg xmlns="http://www.w3.org/2000/svg" width="35.536" height="35.536" viewBox="0 0 35.536 35.536">
									  <g id="Group_1187" data-name="Group 1187" transform="translate(-1184.082 -2634.732)">
									    <line id="Line_1" data-name="Line 1" x1="32" y2="32" transform="translate(1185.85 2636.5)" fill="none" stroke="#fff" stroke-width="5"/>
									    <line id="Line_2" data-name="Line 2" x2="32" y2="32" transform="translate(1185.85 2636.5)" fill="none" stroke="#fff" stroke-width="5"/>
									  </g>
									</svg>
								</button>
							</div>
							<div class="modal-img-wrap">
							    <img src="<?php echo esc_url($modal_image['url']); ?>" alt="<?php echo esc_attr($modal_image['alt']); ?>" />
							</div>

							<?php endif; ?>							
							</div>
							<button type="button" class="enlarge-btn relative royal-blue-bg grid-x align-middle align-center" data-open="modal-<?php echo $mod_row;?>">
								<span class="inner">
									<span class="blocker"></span>
									<span class="blocker"></span>
									<span class="relative">Click to<br>enlarge</span>
								</span>
							</button>
						<?php endif;?>
						
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					    
					    <?php if($special_image_type == 'expert'):?>
					    	<div class="expert-credentials">
						    	<?php the_sub_field('expert_credentials');?>
					    	</div>
					    <?php endif;?>

					    <?php if($special_image_type == 'webinar'):?>
					    	<div class="webinar-label text-right">
						    	<span class="violet-bg"><span><?php the_sub_field('webinar_label');?></span></span>
					    	</div>
					    <?php endif;?>
					    
					</div>
					<?php endif; ?>		
				<?php endif;?>	
				<?php if($img_or_vid == 'video'):?>
					<div class="video-wrap">
						<?php
						
						// Load value.
						$iframe = get_sub_field('video_url');
						
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
				<div class="copy-wrap">
					<?php the_sub_field('copy');?>
				</div>
				<div class="grid-x grid-padding-x align-left">
					
					<?php if($btn_style == 'solid'):?>
						<?php 
						$link = get_sub_field('button_link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						<div class="link-wrap cell shrink">
						    <a class="button mint-bg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?>
				
						<?php 
						$link = get_sub_field('button_link_2');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						<div class="link-wrap cell shrink">
						    <a class="button royal-bg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?>
					<?php endif; ?>
					<?php if($btn_style == 'outlined'):?>
						<?php 
						$link = get_sub_field('outline_button_link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						<div class="link-wrap cell style-outline">
						    <a class="button outline small" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?>					
					<?php endif; ?>
					
				</div>
				
			</div>
					
		</div>
	</div>
</section>