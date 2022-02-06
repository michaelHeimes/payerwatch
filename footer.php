<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					<div class="grid-container">
						<div class="inner-footer grid-x grid-padding-x">
							<div class="logo-wrap cell shrink">
								<ul class="menu">
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
							
							<div class="small-12 medium-12 large-12 cell">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
							
							<div class="small-12 medium-12 large-12 cell">
								
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