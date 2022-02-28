<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
 $linkedin_url = get_field('linkedin_url');
 $phone_number = get_field('phone_number');
 $email_address = get_field('email_address');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cell small-12'); ?> role="article">		
	<div class="inner relative">		
			<div class="grid-x grid-padding-x">
				<?php if(is_single()):?>
				<div class="cell small-12 tablet-4">
				<?php else:?> 
				<div class="cell small-12 tablet-shrink">
				<?php endif;?> 
					<?php 
					$image = get_field('photo');
					if( !empty( $image ) ): ?>
					<div class="photo-wrap">
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					</div>
					<?php endif; ?>					
				</div>
				<?php if(is_single()):?>
				<div class="cell small-12 tablet-8 large-7 large-offset-1 grid-x">
				<?php else:?> 
				<div class="cell small-12 tablet-auto grid-x">
				<?php endif;?> 
					<div class="fh content-wrap">
						<div class="fh grid-x flex-dir-column align-justify">
							<div class="top">
								<header class="article-header">
									<?php if(is_single()):?>
										<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
										<h2><?php the_field('title');?></h2>
									<?php else:?> 
										<h2 class="medium-copy brand-royal"><?php the_title(); ?></h2>
										<h3 class="p"><?php the_field('title');?></h3>
									<?php endif;?> 
								</header> <!-- end article header -->
												
								<section class="entry-content" itemprop="text">
									<p><?php the_field('blurb');?></p>
								</section> <!-- end article section -->
							</div>
								
							<div class="bottom">				
								<footer class="article-footer">
									<div class="grid-x grid-padding-x">
										<?php if($linkedin_url):?>
										<div class="cell shrink">
											<a href="<?php echo $linkedin_url;?>" target="_blank">
												<svg id="Group_231" data-name="Group 231" xmlns="http://www.w3.org/2000/svg" width="17.693" height="16.907" viewBox="0 0 17.693 16.907">
												  <path id="Path_5" data-name="Path 5" d="M18.193,10.87v6.537H14.409V11.312c0-1.524-.541-2.58-1.917-2.58a2.071,2.071,0,0,0-1.941,1.376,2.69,2.69,0,0,0-.123.934v6.365H6.619s.049-10.346,0-11.4H10.4V7.626c0,.025-.025.025-.025.049H10.4V7.626a3.761,3.761,0,0,1,3.416-1.892c2.507,0,4.374,1.622,4.374,5.136ZM2.638.5A1.987,1.987,0,0,0,.5,2.466,1.958,1.958,0,0,0,2.589,4.432h.025A1.973,1.973,0,0,0,4.751,2.466,1.952,1.952,0,0,0,2.638.5ZM.721,17.407H4.506V6H.721Zm0,0" transform="translate(-0.5 -0.5)" fill="#201dd0"/>
												</svg>
											</a>
										</div>
										<?php endif;?>
										<?php if($phone_number):?>
										<div class="cell shrink">
											<a href="tel:<?php echo $phone_number;?>">
												+<?php echo $phone_number;?>
											</a>
										</div>
										<?php endif;?>
										<?php if($email_address):?>
										<div class="cell shrink">
											<a href="mailto:<?php echo $email_address;?>">
												<?php echo $email_address;?>
											</a>
										</div>
										<?php endif;?>									
									</div>
								</footer> <!-- end article footer -->
								
								<?php if(!is_singular('expert')):?>
								<a class="black" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<div class="icon text-right">
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
									</div>
								</a>
								<?php endif;?>
								
							</div>
						</div>
					</div>
				</div>
			</div>	
	</div>
</article> <!-- end article -->			    

