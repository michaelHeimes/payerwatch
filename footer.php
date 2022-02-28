<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer navy-bg" role="contentinfo">
					<div class="grid-container">
						<div class="inner-footer grid-x grid-padding-x">
							
							<div class="logo-wrap cell small-12 tablet-shrink">
								<ul class="menu logo-menu">
									<li class="menu show-for-sr"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
									<li class="logo footer-logo"><a href="<?php echo home_url(); ?>">
										<?php 
										$image = get_field('footer_logo', 'option');
										if( !empty( $image ) ): ?>
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>	
									</a></li>
								</ul>
							</div>
							
							<div class="right small-12 tablet-auto xlarge-offset-1">
								<div class="grid-x grid-padding-x">
									<div class="cell small-12 medium-6">
										
										<div class="grid-x grid-padding-x small-up-2">
											<div class="item cell location">
												<h3 class="mint">Location</h3>
												<a href="<?php the_field('directions_url', 'option');?>" target="_blank">
													<?php the_field('address', 'option');?>
												</a>
											</div>
											<div class="item cell in-touch">
												<h3 class="mint">Get In Touch</h3>
												<div>
													<a href="tel:<?php the_field('phone_number', 'option');?>">
														+<?php the_field('phone_number', 'option');?>
													</a>
												</div>
												<div>
													<a href="mailto:<?php the_field('email_address', 'option');?>">
														<?php the_field('email_address', 'option');?>
													</a>
												</div>
											</div>	
											<div class="item cell hours">
												<h3 class="mint">Hours</h3>
												<?php the_field('hours', 'option');?>
											</div>			
											<div class="item social cell">
												<?php joints_social_links(); ?>
											</div>												
										</div>
										
									</div>
									
									<div class="item cell small-12 medium-6">
										
										<div class="grid-x grid-padding-x">
											<div class="cell sitemap">
												<h3 class="mint">Sitemap</h3>
											</div>
											<div class="cell small-6">
												<nav role="navigation">
						    						<?php joints_footer_links1(); ?>
						    					</nav>
						    				</div>
		
											<div class="cell small-6">
												<nav role="navigation">
						    						<?php joints_footer_links2(); ?>
						    					</nav>
						    				</div>
											
											<div class="cell">
												
											</div>
									
										</div>
										
									</div>
								
								</div>
							</div>
						</div> <!-- end #inner-footer -->
					</div>
					
					<div class="grid-container fluid">
						<div class="grid-x grid-padding-x">
							<div class="cell text-right">
								<p class="source-org copyright small">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="https://proprdesign.com/" target="_blank">Made by Propr Design</a></p>
							</div>
						</div>
					</div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->