<?php
	$section_background_color = get_sub_field('section_background_color');
	if ($section_background_color == 'white') {
		$section_bg = 'white-bg';
	} elseif ($section_background_color == 'royal-blue') {
		$section_bg = 'royal-blue-bg';
	} elseif ($section_background_color == 'blue') {
		$section_bg = 'blue-bg';
	} elseif ($section_background_color == 'mint') {
		$section_bg = 'mint-bg';
	}
	
	$left_editor = get_sub_field('left_text_editor');
		$left_bg = $left_editor['background_color'];
		
		if ($left_bg == 'transparent') {
			$left_element_bg = 'transparent-bg';
		} elseif ($left_bg == 'royal-blue') {
			$left_element_bg = 'royal-blue-bg';
		} elseif ($left_bg == 'blue') {
			$left_element_bg = 'blue-bg';
		} elseif ($left_bg == 'mint') {
			$left_element_bg = 'mint-bg';
		}
		
		$left_list_style = $left_editor['list_style'];
		$left_text_editor = $left_editor['text_editor'];
	
	$right_editor = get_sub_field('right_text_editor');
		$right_bg = $right_editor['background_color'];
		
		if ($right_bg == 'transparent') {
			$right_element_bg = 'transparent-bg';
		} elseif ($right_bg == 'royal-blue') {
			$right_element_bg = 'royal-blue-bg';
		} elseif ($right_bg == 'blue') {
			$right_element_bg = 'blue-bg';
		} elseif ($right_bg == 'mint') {
			$right_element_bg = 'mint-bg';
		}
		
		$right_list_style = $right_editor['list_style'];
		$right_text_editor = $right_editor['text_editor'];
	
	
?>
<section class="dual-wysiwyg-editors module <?php echo $section_bg;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="relative <?php echo $left_element_bg;?> cell small-12 tablet-6">
				<div class="bg <?php echo $left_element_bg;?> pull-left"></div>
				<div class="relative <?php echo $left_list_style;?>">
					<?php echo $left_text_editor;?>			
				</div>
			</div>
			
			<div class="relative <?php echo $right_element_bg;?> cell small-12 tablet-6">
				<div class="bg <?php echo $right_element_bg;?> pull-right"></div>
				<div class="relative <?php echo $right_list_style;?>">
					<?php echo $right_text_editor;?>			
				</div>
			</div>
					
		</div>
	</div>
</section>