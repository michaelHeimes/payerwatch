<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
 $expert = get_field('select_expert');
 $expert_name = get_the_title( $expert->ID );
 $permalink = get_permalink( $expert->ID );
 $expert_first_name = str_word_count( $expert_name, 1);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-archive-card cell small-12 medium-6'); ?> role="article">		
	<div class="inner royal-blue-bg">				
		<header class="article-header">
			<div class="archive-tag white">Interview with <a class="mint" href="<?php echo esc_url( $permalink ); ?>"><?php echo $expert_first_name[0];?></a></div>
			<h2 class="white"><?php the_title(); ?></h2>
		</header> <!-- end article header -->

		<footer class="article-footer text-right">
			<a class="white" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<svg xmlns="http://www.w3.org/2000/svg" width="63.059" height="63.06" viewBox="0 0 63.059 63.06">
				  <g id="Group_1081" data-name="Group 1081" transform="translate(-382 -2272)">
				    <g id="Ellipse_77" data-name="Ellipse 77" transform="translate(382 2272)" fill="none" stroke="#fff" stroke-width="6">
				      <circle cx="31.53" cy="31.53" r="31.53" stroke="none"/>
				      <circle cx="31.53" cy="31.53" r="28.53" fill="none"/>
				    </g>
				    <path id="Polygon_1" data-name="Polygon 1" d="M13.794,0,27.589,23.647H0Z" transform="translate(428.802 2289.735) rotate(90)" fill="#fff"/>
				  </g>
				</svg>
			</a>
		</footer> <!-- end article footer -->	
	</div>
</article> <!-- end article -->			    

