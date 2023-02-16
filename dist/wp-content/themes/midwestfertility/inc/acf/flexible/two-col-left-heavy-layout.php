<?php // -------------------------------> 2 Column - 2/3 + 1/3 Layout <-------------------------------- ?>
       <?php if( get_row_layout() == 'two_column_content_set' ): ?>
       <div id="two-col-left-heavy-container">
       <ul>
		<li><?php the_sub_field('left_content'); ?></li>
        <li><?php the_sub_field('right_content'); ?></li>
        <div class="clear"></div>
        </ul>
        </div>
       <?php endif; ?>