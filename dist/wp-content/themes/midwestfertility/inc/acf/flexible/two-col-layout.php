<?php // -------------------------------> 2 Column Even Layout <-------------------------------- ?>
       <?php if( get_row_layout() == 'two_column_content_set_even' ): ?>
       <div id="two-col-container">
       <ul>
		<li>
		<?php if(get_sub_field('left_content_choose_your_element')=="rich text editor"): ?>
		<?php the_sub_field('left_content'); ?><?php elseif(get_sub_field('left_content_choose_your_element')=="embed code"): ?><?php the_sub_field('left_embed_code_text_area'); ?><?php else: ?><img src="<?php the_sub_field('left_image'); ?>"><?php endif; ?></li>
        <li><?php if(get_sub_field('right_content_choose_your_element')=="rich text editor"): ?><?php the_sub_field('right_content'); ?><?php elseif(get_sub_field('right_content_choose_your_element')=="embed code"): ?><?php the_sub_field('right_embed_code_text_area'); ?>
		<?php else: ?><img src="<?php the_sub_field('right_image'); ?>"><?php endif; ?></li>
        <div class="clear"></div>
        </ul>
        </div>
       <?php endif; ?>