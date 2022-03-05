<section class="contact-form module has-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 tablet-10 tablet-offset-1">
				<div class="inner relative">
					<div class="bg navy-bg"></div>
					<div class="grid-x grid-padding-x">
						<div class="relative cell small-12 tablet-10 tablet-offset-1">
							<h2 class="small-copy">Contact <span><?php bloginfo('name'); ?></span></h2>
							<div class="contact">
								<div>
									<a href="<?php the_field('directions_url', 'option');?>" target="_blank">
										<?php the_field('address', 'option');?>
									</a>
								</div>
								<div>
									<a href="mailto:<?php the_field('email_address', 'option');?>">
										<?php the_field('email_address', 'option');?>
									</a>									
								</div>
								<div>
									<a href="tel:<?php the_field('phone_number', 'option');?>">
										+<?php the_field('phone_number', 'option');?>
									</a>
								</div>
							</div>
							<div class="form-wrap white">
								<p><?php the_sub_field('form_copy');?></p>
								<?php gravity_form( 1, false, false, false, '', true );?>
							</div>
						</div>
					</div>
				</div>		
			</div>
					
		</div>
	</div>
</section>