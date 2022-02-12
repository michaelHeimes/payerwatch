<div class="banner page-banner">
	<div class="grid-container fluid">
		<div class="grid-x grid-padding-x">
			<div class="left cell small-12 medium-6 white">
				<h1 class="white"><?php the_sub_field('heading');?></h1>
				<p class="large-copy"><?php the_sub_field('large_text');?></p>
				<p class="medium-copy"><?php the_sub_field('text');?></p>
				<?php 
				$link = get_sub_field('button_link');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				<div class="btn-link">
				    <a class="button large arrow-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
					    <span class="gradient">
					    	<span class="text">
					    		<?php echo esc_html( $link_title ); ?>
					    	</span>
					    </span>
					    <span class="mint-bg arrow">
							<svg id="Symbol_82" data-name="Symbol 82" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
							  <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" fill="#050d57"/>
							</svg>
					    </span>
					</a>
				</div>
				<?php endif; ?>					

			</div>
			<div class="right cell small-12 medium-6">
				<?php 
				$image = get_sub_field('image');
				if( !empty( $image ) ): ?>
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
				<div class="accent"></div>
			</div>
		</div>
	</div>
	<?php if( have_rows('cta') ):?>
	<div class="banner-cta">
		<?php while ( have_rows('cta') ) : the_row();?>	
		<div class="grid-container fluid">
			<div class="grid-x grid-padding-x align-right">
				<div class="cell shrink">
					<div class="grid-x grid-padding-x align-middle blue-bg">
						<div class="cell auto white">
							<?php the_sub_field('text');?>
						</div>
						<div class="cell shrink">
							<?php 
							$link = get_sub_field('button_link');
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
		<?php endwhile;?>
	</div>
	<?php endif;?>
</div>