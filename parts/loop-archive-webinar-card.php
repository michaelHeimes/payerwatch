<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-archive-card cell small-12 medium-6'); ?> role="article">		
	<div class="fh grid-x inner violet-bg">				
		<a class="white grid-x flex-dir-column" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<div>
				<header class="article-header">
					<div class="archive-tag white">Webinar</div>
					<h2 class="white"><?php the_title(); ?></h2>
				</header> <!-- end article header -->
			</div>			
			<div>
				<footer class="article-footer text-right">
					<svg xmlns="http://www.w3.org/2000/svg" width="63.059" height="63.06" viewBox="0 0 63.059 63.06">
					  <g id="Group_1081" data-name="Group 1081" transform="translate(-382 -2272)">
					    <g id="Ellipse_77" data-name="Ellipse 77" transform="translate(382 2272)" fill="none" stroke="#fff" stroke-width="6">
					      <circle cx="31.53" cy="31.53" r="31.53" stroke="none"/>
					      <circle cx="31.53" cy="31.53" r="28.53" fill="none"/>
					    </g>
					    <path id="Polygon_1" data-name="Polygon 1" d="M13.794,0,27.589,23.647H0Z" transform="translate(428.802 2289.735) rotate(90)" fill="#fff"/>
					  </g>
					</svg>
				</footer> <!-- end article footer -->	
			</div>
		</a>
	</div>
</article> <!-- end article -->			    

