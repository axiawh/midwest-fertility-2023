<?php // -------------------------------> Text Flex Slider <-------------------------------- ?>
<?php if(get_row_layout() == 'text_slider'): 
		echo '<div class="flexslider"><h3>';
		echo the_sub_field('text_headline');
		echo '</h3><ul class="slides">';
		if(have_rows('text_slider_set')):
		while(have_rows('text_slider_set')): the_row();
		$medium = wp_get_attachment_image_src(get_sub_field('text_image'), 'medium');
		?>
		<li class="text-slide"><?php if(get_sub_field('text_image')): ?><aside><img src="<?php echo $medium[0]; ?>" title="<?php the_sub_field('text_image_title'); ?>"></aside><?php endif; ?>
      <?php if(get_sub_field('text_highlight')): ?><h4><?php the_sub_field('text_highlight'); ?></h4><?php endif; ?>
      <?php if(get_sub_field('full_text')): ?><p><?php the_sub_field('full_text'); ?></p><?php endif; ?>
      <?php if(get_sub_field('author')): ?><p><?php the_sub_field('author'); ?></p><?php endif; ?></li>
        
<?php endwhile; 
		echo '</ul></div><div class="clear"></div>'; // Ends Flexslider
		endif; endif; ?> 