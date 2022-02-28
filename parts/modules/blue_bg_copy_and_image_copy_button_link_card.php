<section class="blue-bg-image-copy-button-cards module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<?php if( have_rows('left_card') ):?>
				<?php while ( have_rows('left_card') ) : the_row();?>	
				<div class="left relative cell small-12 medium-6">
					<div class="bg royal-blue-bg pull-left"></div>
					<h2 class="white relative"><?php the_sub_field('heading');?></h2>
					<div class="g-pipe relative">
						<span></span>
					</div>
					<div class="copy-wrap white relative"><?php the_sub_field('copy');?></div>	
				</div>
				<?php endwhile;?>
			<?php endif;?>

			<?php if( have_rows('right_card') ):?>
				<?php while ( have_rows('right_card') ) : the_row();?>	
				<div class="left cell small-12 medium-6">
					<?php 
					$image = get_sub_field('image');
					if( !empty( $image ) ): ?>
					<div class="img-wrap">
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					</div>
					<?php endif; ?>
					<h2 class="h3"><?php the_sub_field('wysiwyg_editor');?></h2>
					<div class="copy-wrap medium-copy">
						<?php the_sub_field('copy');?>
					</div>		
					<?php 
					$link = get_sub_field('button_link');
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
					<div class="link-wrap">
					    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					</div>
					<?php endif; ?>
				</div>
				<?php endwhile;?>
			<?php endif;?>
					
		</div>
	</div>
</section>