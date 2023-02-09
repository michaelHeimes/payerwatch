<?php
	$heading = get_sub_field('heading');
	$icons_w_labels = get_sub_field('icons_w_labels');
?>
<section class="icons-labels module text-center">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<?php if(!empty($heading)):?>
				<h2><?php echo $heading;?></h2>
			<?php endif;?>
			<?php foreach( $icons_w_labels as $icons_label ):
				$label = $icons_label['label'];	
				$icon = $icons_label['icon'];	
				$fontawesome_icon = $icons_label['fontawesome_icon'];	
			?>
			<div class="cell small-12 medium-6">
				<?php if( !empty($icon) ):?>
					<div class="icon-wrap">
						<?php 
						$image = $icon;
						if( !empty( $image ) && empty($fontawesome_icon) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					</div>
				<?php endif;?>
				<?php if( !empty($fontawesome_icon) && empty( $image ) ):?>
					<div class="icon-wrap">
						<?php echo $fontawesome_icon;?>
					</div>
				<?php endif;?>
				<?php if( !empty($label) ):?>
					<h3 class="h4"><?php echo $label;?></h3>
				<?php endif;?>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</section>