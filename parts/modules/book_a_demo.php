<section class="book-demo module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="left cell small-12 tablet-6 large-6">
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
			</div>
					
			<div class="right cell small-12 tablet--6 large-5 large-offset-1">
				<div class="copy-wrap relative">
					<?php the_sub_field('copy');?>
				</div>
				<div class="book relative">
					<div class="bg pull-right"></div>
					<?php 
					$image = get_sub_field('skewed_image');
					if( !empty( $image ) ): ?>
					<div class="img-wrap relative">
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					</div>
					<?php endif; ?>
					<?php 
					$link = get_sub_field('button_link');
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
					<div class="link-wrap relative">
					    <a class="button royal-bg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>