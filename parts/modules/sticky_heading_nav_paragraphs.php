<?php $block = get_row_index();?>	
<section class="sticky-heading-nav-paragraphs module navy-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<?php if( have_rows('paragraphs') ):?>
				<div class="nav-wrap cell small-12 medium-6 show-for-medium" data-sticky-container>
					<div class="sticky" data-sticky data-anchor="block-<?php echo $block;?>" data-margin-top="10">
						<ul class="menu expanded vertical" data-magellan data-offset="100">
							
							<?php while ( have_rows('paragraphs') ) : the_row();?>	
							
								<?php 
									$row = get_row_index();
									$target = get_sub_field('heading');
									$new_target = preg_replace("/[^a-zA-Z0-9\s]/", "", $target);
									$target_dashed = str_replace(" ", "-", $new_target);
								?>
							
								<li class="link-wrap">
									<h2>
										<a class="large-black-text grid-x align-middle" href="#<?php echo strtolower($target_dashed);?>">
											<?php the_sub_field('heading');?>
										</a>
									</h2>
								</li>

							<?php endwhile;?> 
						
						</ul>
					</div>								
				</div>
			<?php endif;?>
			
			<?php if( have_rows('paragraphs') ):?>
				<div id="block-<?php echo $block;?>" class="block cell small-12 medium-6">
				<?php while ( have_rows('paragraphs') ) : the_row();?>	
					<?php 
						$row = get_row_index();
						$target = get_sub_field('heading');
						$new_target = preg_replace("/[^a-zA-Z0-9\s]/", "", $target);
						$target_dashed = str_replace(" ", "-", $new_target);
					?>
				
					<div class="section" id="<?php echo strtolower($target_dashed);?>" data-magellan-target="<?php echo strtolower($target_dashed);?>">
						<h3 class="hide-for-medium"><?php the_sub_field('heading');?></h3>
						<div class="copy-wrap"><p><span class="large-copy"><?php the_sub_field('text');?></span></p></div>
					</div>
									
				<?php endwhile;?>
				</div>
			<?php endif;?>
		
		</div>
	</div>
</section>
