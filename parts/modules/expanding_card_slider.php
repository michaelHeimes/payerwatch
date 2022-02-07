<section class="expanding-card-slider module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="cell small-12">
				<?php if( have_rows('slides') ):?>
				<div class="slider">
					<?php while ( have_rows('slides') ) : the_row();?>	
					<?php $row = get_row_index();?>
					<div class="single-slide<?php if( $row == 1 ):?> widen<?php endif;?>">
						<div class="inner blue-bg white">
							<h3 class="white"><?php the_sub_field('heading');?></h3>
							<p class="large-copy"><?php the_sub_field('large-text');?></p>
						</div>
					</div>
				
					<?php endwhile;?>
				</div>
				<?php endif;?>			
			</div>
					
		</div>
	</div>
</section>