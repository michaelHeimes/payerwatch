<section class="graphic-and-stats module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x small-up-1 medium-up-3 tablet-up-3 align-center align-middle">
			<div class="cell col">
				<?php 
				$image = get_sub_field('graphic');
				if( !empty( $image ) ): ?>
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>			
			</div>
			<?php if( have_rows('stat_1') ):?>
				<?php while ( have_rows('stat_1') ) : the_row();?>	
				<div class="cell col">
					<div class="number grid-x">
						<?php
							$before = get_sub_field('before_number');
							$number = get_sub_field('number');	
							$after = get_sub_field('after_number');	
						?>
						<?php if($before):?>
							<span class="before"><?php echo $before;?></span>
						<?php endif;?>
						<?php if($number):?>
							<span id="stat-1" class="number">0</span>
						<?php endif;?>
						<?php if($after):?>
							<span class="after"><?php echo $after;?></span>
						<?php endif;?>
					</div>
					<div class="figure-label">
						<?php the_sub_field('label');?>
					</div>
				</div>
				<?php endwhile;?>
			<?php endif;?>
			<?php if( have_rows('stat_2') ):?>
				<?php while ( have_rows('stat_2') ) : the_row();?>	
				<div class="cell col">
					<div class="number grid-x">
						<?php
							$before = get_sub_field('before_number');
							$number = get_sub_field('number');	
							$after = get_sub_field('after_number');	
						?>
						<?php if($before):?>
							<span class="before"><?php echo $before;?></span>
						<?php endif;?>
						<?php if($number):?>
							<span id="stat-2" class="number">0</span>
						<?php endif;?>
						<?php if($after):?>
							<span class="after"><?php echo $after;?></span>
						<?php endif;?>
					</div>
					<div class="figure-label">
						<?php the_sub_field('label');?>
					</div>
				</div>
				<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>
</section>