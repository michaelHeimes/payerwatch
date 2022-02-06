<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar-wrap grid-container fluid">

	<div class="top-bar" id="top-bar-menu">
	
		<div class="top-bar-left float-left">
				
			<ul class="menu">
				<li class="menu show-for-sr"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
				<li class="logo"><a href="<?php echo home_url(); ?>">
					<?php if( is_archive() || is_single() ):?>
						
						<?php 
						$image = get_field('header_logo_white', 'option');
						if( !empty( $image ) ): ?>
						    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>		
						
					<?php else:?>
					
						<?php $logo_color = get_field('logo_color');?>		
						
						<?php if($logo_color == 'navy'):?>
							<?php 
							$image = get_field('header_logo_navy', 'option');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>							
						<?php endif;?>
						
						<?php if($logo_color == 'white'):?>
							<?php 
							$image = get_field('header_logo_white', 'option');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>							
						<?php endif;?>
						
						<?php if($logo_color == 'mint'):?>
							<?php 
							$image = get_field('header_logo_mint', 'option');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>							
						<?php endif;?>				
					
					<?php endif;?>
					
					

				</a></li>
			</ul>
			
		</div>
		<div class="top-bar-right show-for-tablet">
			<?php joints_top_nav(); ?>	
		</div>
		<div class="menu-toggle-wrap top-bar-right float-right hide-for-tablet">
			<ul class="menu">
				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a id="menu-toggle" data-toggle="off-canvas"><span></span><span></span><span></span></a></li>
			</ul>
		</div>
	</div>
	
</div>