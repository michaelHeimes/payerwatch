<?php if ( have_rows('modules') ) : ?>
<?php while ( have_rows('modules') ) : ?> 
	<?php the_row(); ?>

	<?php if ( get_row_layout() == 'home_banner' ) : 
	
		get_template_part('parts/modules/home_banner');
		
	elseif ( get_row_layout() == 'copy_and_image' ) : 
	
		get_template_part('parts/modules/copy_and_image');

	elseif ( get_row_layout() == 'expanding_card_slider' ) : 
	
		get_template_part('parts/modules/expanding_card_slider');

	elseif ( get_row_layout() == 'team_preview' ) : 
	
		get_template_part('parts/modules/team_preview');
		
	elseif ( get_row_layout() == 'two_news_posts' ) : 
	
		get_template_part('parts/modules/two_news_posts');
	
	elseif ( get_row_layout() == 'wysiwyg_editor' ) : 
	
		get_template_part('parts/modules/wysiwyg_editor');
	
	endif;?>	
	
<?php endwhile;?>
<?php endif;?>