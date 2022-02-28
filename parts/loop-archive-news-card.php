<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-archive-card cell small-12 medium-6'); ?> role="article">		
	<div class="fh inner navy-bg">				
		<a class="fh white grid-x flex-dir-column" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<div>
				<header class="article-header">
					<div class="archive-tag mint">News</div>
					<h2 class="white"><?php the_title(); ?></h2>
				</header> <!-- end article header -->
								
				<section class="entry-content" itemprop="text">
					<?php $excerpt = get_the_excerpt();
						$excerpt = wp_trim_words($excerpt, 40, '...');
						$result = substr($excerpt, 0, strrpos($excerpt, ' '));	
						echo $excerpt;
					?>
				</section> <!-- end article section -->
			</div>
			
			<div>				
				<footer class="article-footer text-right">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
					  <defs>
					    <clipPath id="clip-path">
					      <rect width="16" height="15.999" fill="none"/>
					    </clipPath>
					  </defs>
					  <g id="Group_1187" data-name="Group 1187" transform="translate(-4376 -2216)">
					    <circle id="Ellipse_16" data-name="Ellipse 16" cx="15" cy="15" r="15" transform="translate(4376 2216)" fill="#00fab8"/>
					    <g id="Component_28" data-name="Component 28" transform="translate(4383 2223)" clip-path="url(#clip-path)">
					      <path id="Union_1" data-name="Union 1" d="M-4613,16V9h-7V7h7V0h2V7h7V9h-7v7Z" transform="translate(4620)" fill="#12058f"/>
					    </g>
					  </g>
					</svg>
				</footer> <!-- end article footer -->	
			</div>
		</a>
	</div>
</article> <!-- end article -->			    

