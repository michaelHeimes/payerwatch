<?php if ( have_rows('modules') ) : ?>
<?php while ( have_rows('modules') ) : ?> 
	<?php the_row(); ?>

	<?php if ( get_row_layout() == 'wysiwyg_editor' ) : 
	
		get_template_part('parts/modules/wysiwyg_editor');
	
	endif;?>	
	
<?php endwhile;?>
<?php endif;?>