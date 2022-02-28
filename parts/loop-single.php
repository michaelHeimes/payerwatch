<?php
/**
 * Template part for displaying a single post
 */
$post_type = get_post_type();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<div class="social-share a2a_kit a2a_default_style">
			<div class="grid-x grid-padding-x align-center align-middle">
				<div class="cell shrink text-center uppercase medium-copy">Share This <?php if($post_type == 'news'):?>Article<?php endif;?></div>
		
				<div class="cell shrink">
					<div class="links-wrap grid-x align-center">
						
						<div class="cell shrink"><a class="a2a_button_facebook grid-x align-middle align-center" href="#">
		
							<svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29">
							  <g id="Group_1188" data-name="Group 1188" transform="translate(-1150 -8288.442)">
							    <path id="Path_8" data-name="Path 8" d="M137.138,2.092h1.15v-2A14.855,14.855,0,0,0,136.613,0a2.66,2.66,0,0,0-2.794,2.96V4.724h-1.83V6.963h1.83V12.6h2.243V6.964h1.756l.279-2.239h-2.035V3.182c0-.647.175-1.09,1.077-1.09Z" transform="translate(1029.01 8296.789)" fill="#201dd0"/>
							    <g id="Ellipse_6" data-name="Ellipse 6" transform="translate(1179 8317.442) rotate(180)" fill="none" stroke="#201dd0" stroke-width="2">
							      <circle cx="14.5" cy="14.5" r="14.5" stroke="none"/>
							      <circle cx="14.5" cy="14.5" r="13.5" fill="none"/>
							    </g>
							  </g>
							</svg>
		
						</a></div>
						
						<div class="cell shrink"><a class="a2a_button_linkedin grid-x align-middle align-center" data-url="<?php echo get_permalink();?>" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="29" viewBox="0 0 30 29">
							  <g id="Group_1189" data-name="Group 1189" transform="translate(-1195 -8319.442)">
							    <g id="Ellipse_7" data-name="Ellipse 7" transform="translate(1225 8348.442) rotate(180)" fill="none" stroke="#201dd0" stroke-width="2">
							      <ellipse cx="15" cy="14.5" rx="15" ry="14.5" stroke="none"/>
							      <ellipse cx="15" cy="14.5" rx="14" ry="13.5" fill="none"/>
							    </g>
							    <path id="Path_135" data-name="Path 135" d="M10.99,10.992H9.079V8c0-.714-.015-1.633-.995-1.633-1,0-1.148.777-1.148,1.58v3.046H5.026V4.837H6.861v.838h.024A2.014,2.014,0,0,1,8.7,4.681c1.935,0,2.294,1.274,2.294,2.932v3.379Zm-8.121-7a1.109,1.109,0,1,1,1.109-1.11A1.109,1.109,0,0,1,2.868,3.995Zm.958,7H1.911V4.837H3.826ZM11.944,0H.951A.94.94,0,0,0,0,.93v11.04a.94.94,0,0,0,.951.93H11.944a.944.944,0,0,0,.955-.93V.93A.944.944,0,0,0,11.944,0Z" transform="translate(1203.717 8327.794)" fill="#201dd0"/>
							  </g>
							</svg>
						</a></div>
																
						<div class="cell shrink"><a class="a2a_button_twitter grid-x align-middle align-center" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29">
							  <g id="Group_1189" data-name="Group 1189" transform="translate(-1235 -8288.442)">
							    <g id="Group_37" data-name="Group 37" transform="translate(1242.939 8298.407)">
							      <path id="Path_131" data-name="Path 131" d="M13.413,49.29a5.733,5.733,0,0,1-1.584.434,2.734,2.734,0,0,0,1.21-1.52,5.5,5.5,0,0,1-1.744.666,2.75,2.75,0,0,0-4.757,1.88,2.832,2.832,0,0,0,.064.627A7.783,7.783,0,0,1,.934,48.5a2.751,2.751,0,0,0,.845,3.675,2.716,2.716,0,0,1-1.242-.339v.03a2.762,2.762,0,0,0,2.2,2.7,2.745,2.745,0,0,1-.721.091,2.431,2.431,0,0,1-.521-.047,2.776,2.776,0,0,0,2.569,1.916A5.525,5.525,0,0,1,.658,57.7,5.15,5.15,0,0,1,0,57.664,7.741,7.741,0,0,0,4.218,58.9a7.773,7.773,0,0,0,7.827-7.825c0-.122,0-.239-.01-.355A5.486,5.486,0,0,0,13.413,49.29Z" transform="translate(0 -48)" fill="#201dd0"/>
							    </g>
							    <g id="Ellipse_8" data-name="Ellipse 8" transform="translate(1264 8317.442) rotate(180)" fill="none" stroke="#201dd0" stroke-width="2">
							      <circle cx="14.5" cy="14.5" r="14.5" stroke="none"/>
							      <circle cx="14.5" cy="14.5" r="13.5" fill="none"/>
							    </g>
							  </g>
							</svg>
						</a></div>
						
					</div>
				</div>
			</div>
		</div>
		
		<script async src="https://static.addtoany.com/menu/page.js"></script>
	</footer> <!-- end article footer -->
													
</article> <!-- end article -->