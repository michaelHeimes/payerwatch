<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>
			
	<div class="content">
		<div class="grid-container">
			<div class="inner-content grid-x grid-padding-x">
		
				<main class="main small-12 medium-8 medium-offset-2 cell" role="main">
	
					<article class="content-not-found grid-x grid-padding-x align-middle" style="min-height: 400px">
						<div class="cell">
							<header class="article-header">
								<h1>404</h1>
							</header> <!-- end article header -->
					
							<section class="entry-content">
								<p>The page you're looking for doesn't exist. Please use the navigation at the top of the page or <a href="<?php echo home_url(); ?>">return to the home page.</a></p>
							</section> <!-- end article section -->
						</div>
	
				
					</article> <!-- end article -->
		
				</main> <!-- end #main -->
	
			</div> <!-- end #inner-content -->
		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>