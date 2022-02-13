<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
 $first_term = get_the_terms( $post->ID, 'interview_expert' );
 $first_term_name = $first_term[0]->name;
 $expert_first_name = str_word_count( $first_term_name, 1);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cell small-12 medium-6'); ?> role="article">		
	<div class="inner royal-blue-bg">				
		<a class="white" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<header class="article-header">
				<div class="archive-tag white">Interview with <?php echo $expert_first_name[0];?></div>
				<h2 class="white"><?php the_title(); ?></h2>
			</header> <!-- end article header -->
							
			<section class="entry-content" itemprop="text">
				<?php $excerpt = get_the_excerpt();
					$excerpt = wp_trim_words($excerpt, 40, '...');
					$result = substr($excerpt, 0, strrpos($excerpt, ' '));	
					echo $excerpt;
				?>
			</section> <!-- end article section -->
								
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
		</a>
	</div>
</article> <!-- end article -->			    

