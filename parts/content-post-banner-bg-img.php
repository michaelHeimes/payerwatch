<?php $post_type = get_post_type();?>

<div class="bg" style="background-image: url( 

<?php
	
if($post_type == 'news'): 
	
	the_field('news_banner_image', 'option');
	
elseif($post_type == 'webinar'): 
	
	the_field('webinar_banner_image', 'option');

elseif($post_type == 'interview'): 

	the_field('interview_banner_image', 'option'); 

elseif($post_type == 'expert'): 

	the_field('expert_banner_image', 'option');

elseif($post_type == 'event'): 

	the_field('event_banner_image', 'option');

endif;?> );"></div>


